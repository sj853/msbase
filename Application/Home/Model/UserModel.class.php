<?php
/**
 * @author elemeNT
 * @todo userModel 用户Model
 * @since v0.9 - 2014年5月21日
 */
 namespace Home\Model;
 use Think\Model;
 
 class UserModel extends Model{
 	
 	 /* 用户模型自动完成 */
    protected $_auto = array(
        array('login', 0, self::MODEL_INSERT),
        array('reg_ip', 'get_client_ip', self::MODEL_INSERT, 'function', 1),
        array('reg_time', NOW_TIME, self::MODEL_INSERT),
        array('last_login_ip', 0, self::MODEL_INSERT),
        array('last_login_time', 0, self::MODEL_INSERT),
        array('update_time', NOW_TIME),
        array('status', 1, self::MODEL_INSERT),
    );
 	
 	 public __construct(){
 	 	
 	 }
 }
?>
