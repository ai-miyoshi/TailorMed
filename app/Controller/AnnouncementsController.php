<?php
App::uses('AppController', 'Controller');

class AnnouncementsController extends AppController {

    var $uses = array('Announcement');
    
    public $name = 'Announcements';

    public $paginate = array(
        'recursive' => -1,
        'order' => array('Announcement.id' => 'desc'),
        'limit' => 5,
        'fields'=>array('Announcement.*')
    );

    function add() {
        $this->_auth('admin');
        if($this->request->is('Put') || $this->request->is('Post')) {
        	$this->Announcement->save($this->data);
            $this->Session->setFlash('Added announcement.', 'default', array('class'=>'alert alert-success'));
            $this->redirect(array('controller'=>'announcements', 'action'=>'index'));
            exit;
	    }
    }

    function edit($id) {
        $this->_auth('admin');
        $this->Announcement->id = $id;

        if($this->request->is('Put') || $this->request->is('Post')) {
        	$this->Announcement->save($this->data);
            $this->Session->setFlash('Edited announcement.', 'default', array('class'=>'alert alert-success'));
            $this->redirect(array('controller'=>'announcements', 'action'=>'index'));
            exit;
	    }

        $this->data = $this->Announcement->read();
    }
    
    function delete($id) {
        $this->_auth('admin');
        $this->Announcement->id = $id;
        $this->Announcement->delete();
        $this->Session->setFlash('Deleted announcement.', 'default', array('class'=>'alert alert-success'));
        $this->redirect(array('controller'=>'announcements', 'action'=>'index'));
        exit;
    }

    function index() {
        $this->_auth('admin');
        $data = $this->paginate('Announcement');
        $this->set('data', $data);
    }

    function home() {
        $this->set('announcements', $this->Announcement->find('all', array('limit'=>10, 'order' => array('id' => 'DESC'))));   
    }
    
}
