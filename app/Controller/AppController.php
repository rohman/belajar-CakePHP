<?php
class AppController extends Controller{
    
    public $components = array('Auth' =>
							array('authorize'=>'controller',
								  'loginRedirect' => array('admin'=>'false','controller'=>'users','action'=>'dashboard'),
								  'loginError' =>'Invalid account',
								  'authError' => 'You don\'t Havee Permission'
								),
								
                              'Session');
							  
	/*public function beforeFilter(){
		if($this->Auth->getModel()->hasField('active')){
			$this->Auth->userScope = array('active' => 1);			
		}	
		
	}*/
	
    public function isAuthorized(){
        return true;
    }
    
}


?>