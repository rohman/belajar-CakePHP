<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class PostsController extends AppController{
    
    public $name = 'Posts';
    public $helpers = array('Html','Form');
    
    public function index(){
        $this->set('posts', $this->Post->find('all'));
    }
    
    public function view($id = null){
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());
    }
    
    public function add(){
        
    }
    
}
?>
