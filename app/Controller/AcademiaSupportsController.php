<?php
App::uses('AppController', 'Controller');
App::uses('HttpSocket', 'Network/Http');
class AcademiaSupportsController extends AppController {

    var $uses = array('AcademiaSupport', 'Email');
    //今は閉鎖
    /*
    function add() {
        if($this->request->is('POST')) {

            if($this->AcademiaSupport->save($this->data)) {

                $from = Configure::read('email');
                $to = Configure::read('to');
                $subject = '研究サンプル申し込み';
                $data = $this->data;
                $indexes = array('name', 'email', 'phone', 'address', 'organization', 'research', 'zipcode', 'prefecture');
                $vars = array();

                foreach($indexes as $index) {
                    if(isset($this->data['AcademiaSupport'][$index])) {
                        $vars[$index] = $this->data['AcademiaSupport'][$index];
                    } else {
                        $vars[$index] = '';
                    }
                }

                if($this->Email->send($from, $to, $subject, '', 'テーラーメッド', 'research_sample', $vars)) {

                    $this->Session->setFlash('送信されました。', 'default', array('class'=>'alert alert-success'));
                } else {
                    $this->Session->setFlash('エラーが発生しました。', 'default', array('class'=>'alert alert-danger'));
                }
            }
        }
    }*/

}
