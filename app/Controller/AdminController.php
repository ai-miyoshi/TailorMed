<?php
App::uses('AppController', 'Controller');

class AdminController extends AppController {

    var $uses = array('User');
    
    public $name = 'Admin';
    
    public $paginate = array(
        'recursive' => -1,
        'order' => array('Post.modified' => 'desc'),
        'limit' => 10,
    );

    function index() {
        if(!$this->_auth('admin', false)) {
            $this->redirect(array('controller'=>'users', 'action'=>'login'));
            exit;
        }
        $this->set('data', $this->paginate);
    }
    
}
