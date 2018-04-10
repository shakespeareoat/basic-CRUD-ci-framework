<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hash_c extends CI_Controller {

	public function index()
	{
		$nama = "test";
		$hashed_name = $this->hash_string($nama);
		echo "name : ".$nama."<br>";
		echo $hashed_name;

		echo "<br>";
		$jika_ditekan_login = "test";
		$result = $this->hash_verify($jika_ditekan_login, $hashed_name);
		if ($result==TRUE) {
			echo "login succesf";
		}else{
			echo "login fail";
		}

	}
	public function hash_string($string)
	{
		$hashed_string = password_hash($string, PASSWORD_BCRYPT, ['cost'=>9]);
		return $hashed_string;
	}

	public function hash_verify($plain_text, $hashed_string)
	{
		$hashed_string = password_verify($plain_text, $hashed_string);
		return $hashed_string;
	}


}

/* End of file Hash_c.php */
/* Location: ./application/controllers/Hash_c.php */