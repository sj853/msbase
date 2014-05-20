<?php
namespace Home\Controller;
use Think\Controller;
use Home\Service\UserService;
use \SoapClient;
class UserController extends Controller {
    
    private $_userService;
    
    public function __construct(){
    		$this->_userService = new UserService();
    }
    
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
    
    public function login(){ 
		    	$this->_userService->authLogin();
    }
}