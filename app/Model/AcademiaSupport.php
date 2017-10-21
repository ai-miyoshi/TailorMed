<?php
App::uses('AppModel', 'Model');

class AcademiaSupport extends AppModel {

    public $validate = array(
        'email'=>array(
            'email_rule_1'=>array(
                'rule' => 'notEmpty',
                'required'=>True,
                'message' => 'メールアドレスをご記入ください'
            ),
            'email_rule_2'=>array(
                'rule'=>'email',
                'message'=>'メールアドレスの入力形式が正しくありません。'
            ),
            'email_rule_3'=>array(
                'rule'=>array('__confirmEmail'),
                'message'=>'確認用のメールアドレスが一致しません。'
            ),
        ),
        'name'=>array(
            'name_rule_1'=>array(
                'rule' => 'notEmpty',
                'required'=>True,
                'message' => 'お名前をご記入ください'
            ),
        ),
        'phone'=>array(
            'phone_rule_1'=>array(
                'rule' => 'notEmpty',
                'required'=>True,
                'message' => 'お電話番号をご記入ください'
            ),
        ),
    );

    function beforeSave($options=array()) {

    }
    
    function __confirmEmail() {
        $data = $this->data['AcademiaSupport'];
        if($data['email'] != $data['email_confirm']) {
            return false;
        }
        return true;
    }

}
