<?php
App::import('Vendor', 'php-excel-reader/excel_reader2');
App::import('Vendor', 'phpexcel', array('file' => 'PHPExcel.php'));

App::import('Vendor', 'phpexcelreader', array('file' => 'PHPExcel'.DS.'Reader'.DS.'Excel5.php'));

App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel'.DS.'PHPExcel.php'));
App::import('Vendor', 'PHPExcel_IOFactory', array('file' => 'PHPExcel'.DS.'PHPExcel'.DS.'IOFactory.php'));
App::uses('HttpSocket', 'Network/Http');
class HelloShell extends AppShell {

    public $uses = array('Stock');

    public function main() {
        $tries = 2;

        while($this->process() && $tries > 0) {
            $tries--;
        }
    }

    public function process() {
        
        $httpSocket = new HttpSocket();
        
        $yql = 'select * from yahoo.finance.quotes where symbol in ('.'\'^GSPC\''.')';
        $url = 'http://query.yahooapis.com/v1/public/yql?q='.$yql.'&format=json&env=http%3A%2F%2Fdatatables.org%2Falltables.env&callback=';
        $response = $httpSocket->get($url);
        $index_data = json_decode($response['body']);
        $index_data = $index_data->query->results->quote;

        $date = date('n/j/Y');
        if($date != $index_data->LastTradeDate) {
            $this->out('Last Trade Date '.$index_data->LastTradeDate.' does not equal '.$date);
            return;
        }
            
        $date = date('Y-m-d');
        $conditions = array('is_index'=>1, 'DATE(modified)'=>$date);
        $date_exists = $this->Stock->find('first', array('conditions'=>$conditions));
        if($date_exists) {
            return True;
        }

        $url = "http://us.spindices.com/idsexport/file.xls?hostIdentifier=48190c8c-42c4-46af-8d1a-0cd5db894797&selectedModule=Constituents&selectedSubModule=ConstituentsFullList&indexId=340";

        $file = file_get_contents($url);
        if($file) {
            file_put_contents(Configure::read('app_root').'/tmp/report.xls', $file);
        }

        $list = $this->readXls(Configure::read('app_root').'/tmp/report.xls', 1);

        $count = 0;
        $pe_count = 0;
        $pe_multi = 0;
        
        $peg_count = 0;
        $peg_multi = 0;
        
        $eps_fwd_q_count = 0;
        $eps_fwd_q_multi = 0;
        
        $eps_fwd_yr_count = 0;
        $eps_fwd_yr_multi = 0;
        
        $price_eps_fwd_yr_count = 0;
        $price_eps_fwd_yr_multi = 0;
        
        foreach($list[0]['data'] as $company) {

            if(!preg_match('/^[A-Z\.\-\^]{1,5}$/', $company[1])) {
                $this->out($company[1]);
                continue;
            }
            $company[1] = str_replace('.', '-', $company[1]);
            $this->out($company[0]);
            
            $conditions = array('DATE(modified)'=>$date, 'symbol'=>$company[1]);
            $r = $this->Stock->find('first', array('conditions'=>$conditions));
            if($r) {

                $count++;
                if($r['Stock']['PE'] && $r['Stock']['PE'] > 0) {
                    $pe_count++;
                    $pe_multi += $r['Stock']['PE'];
                }
                    
                if($r['Stock']['PEG'] && $r['Stock']['PEG'] > 0) {
                    $peg_count++;
                    $peg_multi += $r['Stock']['PEG'];
                }

                if($r['Stock']['EPS_estimate_next_quarter'] && $r['Stock']['EPS_estimate_next_quarter'] > 0) {
                    $eps_fwd_q_count++;
                    $eps_fwd_q_multi += $r['Stock']['EPS_estimate_next_quarter'];
                }
                    
                if($r['Stock']['EPS_estimate_next_year'] && $r['Stock']['EPS_estimate_next_year'] > 0) {
                    $eps_fwd_yr_count++;
                    $eps_fwd_yr_multi += $r['Stock']['EPS_estimate_next_year'];
                }

                if($r['Stock']['price_EPS_estimate_next_year'] && $r['Stock']['price_EPS_estimate_next_year'] > 0) {
                    $price_eps_fwd_yr_count++;
                    $price_eps_fwd_yr_multi += $r['Stock']['price_EPS_estimate_next_year'];
                }

                continue;
            }

            $yql = 'select * from yahoo.finance.quotes where symbol in ('.'\''.$company[1].'\''.')';
                            
            $url = 'http://query.yahooapis.com/v1/public/yql?q='.$yql.'&format=json&env=http%3A%2F%2Fdatatables.org%2Falltables.env&callback=';
            $response = $httpSocket->get($url );
            if(!$response) {
                sleep(8);
                continue;
            }

            $data = json_decode($response['body']);
            $data = $data->query->results->quote;

            if(!$data || $data->ErrorIndicationreturnedforsymbolchangedinvalid) {
                $this->out($company[1]);
                sleep(8);
                $response = $httpSocket->get($url );
                $data = json_decode($response['body']);
                $data = $data->query->results->quote;
                if(!$data || $data->ErrorIndicationreturnedforsymbolchangedinvalid) {
                    continue;
                }
            }

            $stock = array('Stock'=>array(
                'name'=>$company[0],
                'symbol'=>$company[1],
                'PE'=>$data->PERatio,
                'PEG'=>$data->PEGRatio,
                'EPS_estimate_next_quarter'=>$data->EPSEstimateNextQuarter,
                'EPS_estimate_next_year'=>$data->EPSEstimateNextYear,
                'price_EPS_estimate_next_year'=>$data->PriceEPSEstimateNextYear,
                '50MA'=>$data->FiftydayMovingAverage,
                '200MA'=>$data->TwoHundreddayMovingAverage,
                'days_high'=>$data->DaysHigh,
                'days_low'=>$data->DaysLow,
                'volume'=>$data->Volume,
                'average_daily_volume'=>$data->AverageDailyVolume,
                'market_cap'=>$data->MarketCapitalization,
                'open'=>$data->Open,
                'previous_close'=>$data->PreviousClose,
                'change'=>$data->Change,
                'is_index'=>0
            ));
            $this->Stock->create();
            $this->Stock->save($stock);
            $count++;
            if($data->PERatio && $data->PERatio > 0) {
                $pe_count++;
                $pe_multi += $data->PERatio;
            }
            
            if($data->PEGRatio && $data->PEGRatio > 0) {
                $peg_count++;
                $peg_multi += $data->PEGRatio;
            }
                
            if($data->EPSEstimateNextQuarter && $data->EPSEstimateNextQuarter > 0) {
                $eps_fwd_q_count++;
                $eps_fwd_q_multi += $data->EPSEstimateNextQuarter;
            }
                
            if($data->EPSEstimateNextYear && $data->EPSEstimateNextYear > 0) {
                $eps_fwd_yr_count++;
                $eps_fwd_yr_multi += $data->EPSEstimateNextYear;
            }
                
            if($data->PriceEPSEstimateNextYear && $data->PriceEPSEstimateNextYear > 0) {
                $price_eps_fwd_yr_count++;
                $price_eps_fwd_yr_multi += $data->PriceEPSEstimateNextYear;
            }

            sleep(8);
        }
        
        if($count < 500) {
            return False;
        }

        $pe_ave = $pe_multi / $pe_count;
        $peg_ave = $peg_multi / $peg_count;
        $eps_q_ave = $eps_fwd_q_multi / $eps_fwd_q_count;
        $eps_yr_ave = $eps_fwd_yr_multi / $eps_fwd_yr_count;
        $p_eps_yr_ave = $price_eps_fwd_yr_multi / $price_eps_fwd_yr_count;
        
        //$yql = 'select * from yahoo.finance.quotes where symbol in ('.'\'^GSPC\''.')';
        //$url = 'http://query.yahooapis.com/v1/public/yql?q='.$yql.'&format=json&env=http%3A%2F%2Fdatatables.org%2Falltables.env&callback=';
        //$response = $httpSocket->get($url );
        //$data = json_decode($response['body']);
        //$data = $data->query->results->quote;

        $this->out('S&P 500');
        $stock = array('Stock'=>array(
            'name'=>'S&P 500',
            'symbol'=>$index_data->Symbol,
            'PE'=>$pe_ave,
            'PEG'=>$peg_ave,
            'EPS_estimate_next_quarter'=>$eps_q_ave,
            'EPS_estimate_next_year'=>$eps_yr_ave,
            'price_EPS_estimate_next_year'=>$p_eps_yr_ave,
            '50MA'=>$index_data->FiftydayMovingAverage,
            '200MA'=>$index_data->TwoHundreddayMovingAverage,
            'days_high'=>$index_data->DaysHigh,
            'days_low'=>$index_data->DaysLow,
            'volume'=>$index_data->Volume,
            'average_daily_volume'=>$index_data->AverageDailyVolume,
            'market_cap'=>$index_data->MarketCapitalization,
            'open'=>$index_data->Open,
            'previous_close'=>$index_data->PreviousClose,
            'change'=>$index_data->Change,
            'is_index'=>1
        ));
        $this->Stock->create();
        $this->Stock->save($stock);

        return True;
    }


    function readXls($filepath, $colCount = null, $rowCount = null, $sheetIndex = null) 
    {
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load($filepath);

        $sheets = array();
        if (is_null($sheetIndex)) {
            $sheets = $objPHPExcel->getAllSheets();
        } elseif (is_array($sheetIndex)) {
            foreach($sheetIndex as $idx) {
                $sheets[$idx] = $objPHPExcel->getSheet($idx);
            } 
        } elseif (is_int($sheetIndex)) {
            $sheets[$sheetIndex] = $objPHPExcel->getSheet($sheetIndex);
        }
        $data = array();
        if (empty($sheets)) {
            return $data;
        }

        foreach ($sheets as $s => $objSheet) {
            $sheetTitle = $objSheet->getTitle();
            $data[$s]['title'] = $sheetTitle;

            $rowMax = $rowCount;
            if (is_null($rowCount)) {
                $rowMax = $objSheet->getHighestRow();
            }
            $colMax = $colCount;
            if (is_null($colCount)) {
                $colMax = $objSheet->getHighestColumn();
            }

            $sheetData = array();
            for($r=1; $r<=$rowMax; $r++) {
                 for($c=0; $c<=$colMax; $c++) {
                     $objCell = $objSheet->getCellByColumnAndRow($c, $r);
                     $sheetData[$r][$c]= $objCell->getValue();
                 }
             }
             $data[$s]['data'] = $sheetData;
        }
        return $data;
    }
}
