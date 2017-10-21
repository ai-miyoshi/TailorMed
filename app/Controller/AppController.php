<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

    protected $_logged_user = NULL;
    protected $_imap = NULL;
    protected $_validator_path = '/Elements/validator';

    function beforeFilter() {
        $this->_checkLogin();
        $this->_imap = Configure::read('input_name_map');
        $this->set('imap', $this->_imap);
        $this->set('logged_user', $this->_logged_user);
    }
    
    protected function _auth($type = 'admin', $redirect = True) {

        if('admin' == $type && $this->__isAdmin()) {
            return True;
        }
        
        if('user' == $type && $this->_checkLogin()) {
            return True;
        }

        if($redirect) {
            $this->Session->setFlash('Permission denied.', 'default', array('class'=>'alert alert-danger'));
            $this->redirect($this->referer());
            exit;
        }
    }

    private function __isAdmin() {

        if(isset($this->_logged_user['is_admin']) && $this->_logged_user['is_admin']) {
            return True;
        }

        return False;
    }

    protected function _checkLogin() {
        if($this->_logged_user = $this->Session->read('logged_user')) {
            unset($this->_logged_user['User']['password']);
            $this->_logged_user = $this->_logged_user['User'];
            return True;
        }
        return False;
    }

}
