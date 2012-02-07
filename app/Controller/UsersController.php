<?php
class UsersController extends AppController{
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }
    
	public function index(){
		
	}
	
    public function login(){}
    
    public function logout(){
        $this->redirect($this->Auth->logout());
        
    }
       
    public function add(){
        if(!empty($this->data)){
            $this->User->create();
			//print_r($this->data);exit;
            if($this->User->save($this->data)){
                $this->Session->setFlash('User Created');
                $this->redirect(array('action'=>'login'));
            }else{
                $this->Session->setFlash('Please Correct Auth');    
            }
        }
    }
    
}


?>