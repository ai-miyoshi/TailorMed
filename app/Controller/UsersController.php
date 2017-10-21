<?php
App::uses('AppController', 'Controller');
App::uses('HttpSocket', 'Network/Http');
class UsersController extends AppController {

    var $uses = array('LoginAttempt', 'Token', 'User', 'Email', 'AttackLog');
    
    function edit() {
        $this->_auth('admin');
        
        $this->User->id = $this->_logged_user['id'];

        if($this->request->is('POST')) {
            if($this->User->save($this->data)) {

                $this->Session->setFlash('Edited user.', 'default', array('class'=>'alert alert-success'));
            }
        }

        //$this->data = $this->User->read();
        $this->set('title', 'Edit User');
    }

    function add() {
        $this->_auth('admin'); exit; // Keep it disabled.

        if($this->request->is('POST')) {

            $this->User->create();
            if($this->User->save($this->data)) {
                $this->Session->setFlash('User added.', 'default', array('class'=>'alert alert-success'));
                $this->redirect('/');
                exit;
            }
        }
        $this->set('title', 'Register User');
    }

    function login() {
        if($this->request->is('POST')) {

            if((isset($this->data['username']) && '' != $this->data['username']) ||
            (isset($this->data['password']) && '' != $this->data['password'])) {
                $this->AttackLog->save(array('target'=>'login', 'client_ip'=>$this->request->clientIp()));
                $this->layout = False;
                $this->set('ip', $this->request->clientIp());
                $this->render('../Errors/error_atk');
                return;
            }

            $username_or_email = $this->data['User'][$this->User->_imap['username']];
            
            $hash = $this->User->hashString($this->data['User'][$this->User->_imap['password']]);
            $conditions = array('OR'=>array('User.username'=>$username_or_email, 'User.email'=>$username_or_email), 'User.password'=>$hash);
            
            if(!$this->LoginAttempt->isLocked($username_or_email, $this->request->clientIp())) {
                if($user = $this->User->find('first', array('conditions'=>$conditions))) {
                    
                    $this->LoginAttempt->record($username_or_email, $this->request->clientIp(), True);
                    $this->Session->write('logged_user', $user);
                    $this->Session->setFlash('Logged in as '.$user['User']['username'], 'default', array('class'=>'alert alert-success'));
                    $this->redirect(array('controller'=>'admin', 'action'=>'index'));
                    exit;
                }
                $this->Session->setFlash('Failed to login', 'default', array('class'=>'alert alert-danger'));
            } else {
                $this->Session->setFlash('Account is locked', 'default', array('class'=>'alert alert-danger'));
            }
            $this->LoginAttempt->record($username_or_email, $this->request->clientIp(), False);
        } 
        $this->set('title', 'Login');

    }

    function logout() {
        $this->Session->delete('logged_user');
        $this->Session->setFlash('Logged out', 'default', array('class'=>'alert alert-success'));
        $this->redirect('/');
        exit;
    }
    
    function setpass($hash='') {

        if($hash != '' && !($pwd_reset = $this->Token->matchValidHash($hash, 'reset'))) {
            $this->Session->setFlash('The link has expired.', 'default', array('class'=>'alert alert-danger'));
            $this->redirect(array('controller'=>'users', 'action'=>'reset'));
            exit;
        }

        if($this->request->is('POST')) {
            if($hash != '') {
                $this->User->id = $pwd_reset['Token']['user_id'];
            } elseif($this->_logged_user) {
                $this->User->id = $this->_logged_user['id'];
            } else {
                throw Exception('Error');
            }

            if($this->User->save($this->data)) {
                $this->Session->setFlash('Password changed.', 'default', array('class'=>'alert alert-success'));
                $this->Session->write('logged_user', $this->User->read());
                $this->redirect('/');
                exit;
            } else { 
                $this->Session->setFlash('Failed to change password.', 'default', array('class'=>'alert alert-danger'));
            }
        }
        $this->set('hash', $hash);
    }

}
