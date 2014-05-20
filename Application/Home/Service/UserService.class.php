<?php
namespace Home\Service;
use Think\Controller;
use \SoapClient;
class UserService{
    		public function authLogin(){
			    $client = new SoapClient(C('WS_ROOT'));
				$client->soap_defencoding = 'utf-8';  
				$client->decode_utf8 = false;   
				$client->xml_encoding = 'utf-8'; 
				$param = array(
					'corporationCode'=> "01",
					'account'=> "sj",
					'password'=> "123"
				);
				$result = $client->__soapCall("VerifyUser", array( $param ));
				//$result = $client->__Call("InfoApprove", array( $param ));
			   echo htmlspecialchars($client->__getLastResponse());
				if (is_soap_fault($result))
				{
					echo "error";	
					trigger_error("SOAP Fault: (faultcode: {$result->faultcode}, faultstring: {$result->faultstring})", E_USER_ERROR);
				}
				else
				{
					//$data = $result->GetArticleResult;	//这里返回的是类，必须使用->得到元素的值
					print_r($result);
					echo "ok";
				}
    		}
}
?>