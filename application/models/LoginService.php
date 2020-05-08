
<?php
require 'UserDetails';

class LoginService {

	public function validate($username,$password){
		$dao=new UserDetails();
		$result=$dao->validateLogin($username,$password);
		$a=array();

		foreach($result as $r)
		{
			array_push($a,$r);

		}
		$json_obj = json_encode($a);
		return $json_obj;

	}
	public function test(){
		return "hello";
	}
}
?>
