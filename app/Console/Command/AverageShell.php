<?php
class AverageShell extends AppShell {

    public $uses = array('Average', 'Stock');

    public function main() {
        $this->out('BEGIN sp500 average');
        $date = date('Y-m-d');
        $conditions = array('DATE(created)'=>$date);

        $this->Stock->recursive = -1;
        $stocks = $this->Stock->find('all', array('conditions'=>$conditions));

        foreach($stocks as $stock) {

            if(!$stock['Stock']['PE'] or $stock['Stock']['PE'] == '') {
                continue;
            }

            $symbol = $stock['Stock']['symbol'];
            $conditions = array('symbol'=>$symbol);
            $stock_hist = $this->Stock->find('all', array('conditions'=>$conditions, 'order'=>array('created DESC')));

            $hist_count = count($stock_hist);

            $sum = 0;
            $sum50 = 0;
            $sum200 = 0;

            $sum_eps_yr = 0;
            $sum_prc_eps_yr = 0;

            $sum_count = 0;
            $sum_eps_yr_count = 0;
            $sum_prc_eps_yr_count = 0;

            foreach($stock_hist as $index=>$sh) {
                if($sh['Stock']['EPS_estimate_next_year'] and $sh['Stock']['EPS_estimate_next_year'] != '') {
                    $sum_eps_yr += $sh['Stock']['EPS_estimate_next_year'];
                    $sum_eps_yr_count++;
                }    
                
                if($sh['Stock']['price_EPS_estimate_next_year'] and $sh['Stock']['price_EPS_estimate_next_year'] != '') {
                    $sum_prc_eps_yr += $sh['Stock']['price_EPS_estimate_next_year'];
                    $sum_prc_eps_yr_count++;
                }    

                if($sh['Stock']['PE'] and $sh['Stock']['PE'] != '') {
                    $sum += $sh['Stock']['PE'];
                    $sum_count++;

                    if($hist_count >= 50 && $index < 50) {
                        $sum50 += $sh['Stock']['PE'];
                        if($hist_count >= 200 && $index < 200) {
                            $sum200 += $sh['Stock']['PE'];
                        }
                    }
                }    
            }

            $pe_ave = $sum / $sum_count;
            $eps_yr_ave = $sum_eps_yr / $sum_eps_yr_count;
            $price_eps_yr_ave = $sum_prc_eps_yr / $sum_prc_eps_yr_count;
            $ma50 = NULL;
            $ma200 = NULL;

            if($hist_count >= 50) {
                $ma50 = $sum50 / 50;
            }

            if($hist_count >= 200) {
                $ma200 = $sum200 / 200;
            }

            $average = $this->Average->find('first', array('conditions'=>array('symbol'=>$symbol)));
            if($average) {
                $stock = array('Average'=>array(
                    'id'=>$average['Average']['id'],
                    'symbol'=>$symbol,
                    'EPS_estimate_next_year'=>$eps_yr_ave,
                    'price_EPS_estimate_next_year'=>$price_eps_yr_ave,
                    'PE'=>$pe_ave,
                    'PE_50MA'=>$ma50,
                    'PE_200MA'=>$ma200
                ));
                $this->Average->save($stock);
            } else {
                $stock = array('Average'=>array(
                    'symbol'=>$symbol,
                    'EPS_estimate_next_year'=>$eps_yr_ave,
                    'price_EPS_estimate_next_year'=>$price_eps_yr_ave,
                    'PE'=>$pe_ave,
                    'PE_50MA'=>$ma50,
                    'PE_200MA'=>$ma200
                ));
                $this->Average->create();
                $this->Average->save($stock);
            }
        }
        $this->out('END SUCCESS');
    }

}
