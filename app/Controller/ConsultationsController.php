<?php
App::uses('AppController', 'Controller');
App::uses('HttpSocket', 'Network/Http');
class ConsultationsController extends AppController {

    var $uses = array('Consultation', 'Email');
    //今は閉鎖
    /*
    function add() {
        if($this->request->is('POST')) {

            if($this->Consultation->save($this->data)) {

                $from = Configure::read('email');
                $to = Configure::read('to');
                $subject = '検査受付窓口申し込み';
                $data = $this->data;
                $indexes = array('name', 'phone', 'email', 'zipcode', 'prefecture', 'address',
                    'age', 'gender', 'cancer_type', 'cancer_stage', 'initial_date',
                    'had_surgery', 'taking_anticancer_drug', 'anticancer_drug_name', 'others');
                $vars = array();

                foreach($indexes as $index) {
                    if(isset($this->data['Consultation'][$index])) {
                        $vars[$index] = $this->data['Consultation'][$index];
                    } else {
                        $vars[$index] = '';
                    }
                }

                if($this->Email->send($from, $to, $subject, '', 'テーラーメッド', 'consultation', $vars)) {

                    $this->Session->setFlash('送信されました。', 'default', array('class'=>'alert alert-success'));
                } else {
                    $this->Session->setFlash('エラーが発生しました。', 'default', array('class'=>'alert alert-danger'));
                }
            }
        }
    }*/

}
