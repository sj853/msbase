<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    
    public function _before_getUsers(){
		//echo "-------before---------";    	
    }
    
    public function getUsers(){
    	$users = array(
    		array('id'=>1,'name'=>'Ed','email'=>'ed@sencha.com'),
    		array('id'=>2,'name'=>'Tommy','email'=>'tommy@sencha.com')
    	);
    	$this->ajaxReturn($users);
    }
     
}