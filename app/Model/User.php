<?php
App::uses('AppModel', 'Model');

class User extends AppModel {

    public $validate = array(
        'username'=>array(
            'username_rule_1'=>array(
                'rule'=>'isUnique',
                'message'=>'The username already exists.'
            ),
            'username_rule_3'=>array(
                'rule'=>array('minLength', 3),
                'message'=>'Minimum username length is 3.'
            ),
            'username_rule_4'=>array(
                'rule'=>array('maxLength', 16),
                'message'=>'Max username length is 16.'
            ),
        ),
        'email'=>array(
            'email_rule_1'=>array(
                'rule'=>array('__confirmEmail'),
                'message'=>'Email confirmation does not match.'
            ),
            'email_rule_2'=>array(
                'rule'=>'isUnique',
                'message'=>'The email already exists.'
            ),
            'email_rule_3'=>array(
                'rule'=>'email',
                'message'=>'Invalid email address.'
            ),
        ),
        'password'=>array(
            'password_rule_1'=>array(
                'rule'=>array('__confirmPassword'),
                'message'=>'Password confirmation does not match.'
            ),
            'password_rule_2'=>array(
                'rule'    => array('minLength', 8),
                'message' => 'Passwords must be at least 8 characters long.'
            ),
           'password_rule_3'=>array(
                'rule'    => array('__checkLetterAndNum'),
                'message' => 'Passwords must contain at least one letter and number.'
            ),
        ),
    );

    function beforeSave($options=array()) {

        if(isset($this->data['User']['password'])) {
            $hash = $this->hashString($this->data['User']['password']);
            $this->data['User']['password'] = $hash;
        }
    }
    
    function __checkMinecraftUsername($data) {
        
        if(preg_match('/^[A-Za-z0-9_]+$/', $data['username'])){
            return true;
        }
        return false;
    }

    function __confirmEmail() {
        $data = $this->data['User'];
        if($data['email'] != $data['email_confirm']) {
            return false;
        }
        return true;
    }

    function __confirmPassword() {
        $data = $this->data['User'];
        if($data['password'] != $data['password_confirm']) {
            return false;
        }
        return true;
    }

    function matchPassword($password) {
        $hash = $this->hashString($this->data['User']['password']);
    }

    function __checkLetterAndNum($data) {
        
        if(preg_match('/[a-zA-Z]{1,}/', $data['password'])){
            if(preg_match('/[0-9]{1,}/', $data['password'])){
                return true;
            }

        }
        return false;
    }

    function increaseCommentsCount($id) {
        $this->id = $id;
        $user = $this->read();
        $this->saveField('comments_count', $user['User']['comments_count']+1);
    }
}
