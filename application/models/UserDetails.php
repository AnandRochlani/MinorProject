<?php
class UserDetails extends CI_Model{
	public function validateLogin($username,$password){
		$sql="select count(*) from userdetails where email=$username and password=$password";
		$query= $this->db->query($sql);
		return $query;
	}
}

?>
