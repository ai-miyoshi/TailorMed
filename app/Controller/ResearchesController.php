<?php
App::uses('AppController', 'Controller');
App::uses('HttpSocket', 'Network/Http');
class ResearchesController extends AppController {

    var $uses = array('Email', 'AttackLog');
    

    function add() {

        if($this->request->is('POST')) {
            
            $username_or_email = $this->data['User'][$this->User->_imap['username']];
            $conditions = array('OR'=>array('User.username'=>$username_or_email, 'User.email'=>$username_or_email));
            $user = $this->User->find('first', array('conditions'=>$conditions));

            if(!$user) {

                $this->Session->setFlash('Email sent to '.$email.'.', 'default', array('class'=>'message success'));
                return;
            }

            if($this->Consultation->save($data)) {

                $from = Configure::read('email');
                $email = Configure::read('to');

                $subject = 'RawMinecraft Password Reset Link';
                $msg = '<p>LJLASDJL.</p><p>Replace this text.</p>';
                if($this->Email->send($from, $email, $subject, $msg, 'RawMinecraft')) {

                    $this->Session->setFlash('Email sent to '.$email.'.', 'default', array('class'=>'alert alert-success'));
                } else {
                    $this->Session->setFlash('Error sending email.', 'default', array('class'=>'alert alert-danger'));
                }
            }
        }
        $this->set('title', 'Request Password Reset');
    }

}
