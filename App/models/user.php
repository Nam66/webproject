<?php 

Class User 
{

	public function login($POST)
	{
		$DB = new Database();

		$_SESSION['error'] = "";
		if(isset($POST['username']) && isset($POST['password']))
		{

			$arr['username'] = $POST['username'];
			$arr['password'] = $POST['password'];

			$query = "select * from users where username = :username && password = :password limit 1";
			$data = $DB->read($query,$arr);
			if($data)
			{
 				//logged in
 				$_SESSION['user_name'] = $data[0]->username;
				$_SESSION['user_url'] = $data[0]->url_adress;

				header("Location:". ROOT . "home");
				die;

			}else{

				$_SESSION['error'] = "wrong username or password";
			}
		}else{

			$_SESSION['error'] = "please enter a valid username and password";
		}

	}

	public function signup($POST)
	{

		$DB = new Database();
		$a = $DB->db_connect();


		$_SESSION['error'] = "";
		if(isset($POST['username']) && isset($POST['password']))
		{

			$arr['username'] = $POST['username'];
			$arr['password'] = $POST['password'];
			$arr['email'] = $POST['email'];
			$arr['url_adress'] = get_random_string_max(60);
			$arr['date'] = date("Y-m-d H:i:s");

			$query = "insert into users (username,password,email,url_adress,date) values (:username,:password,:email,:url_adress,:date)";
			$data = $DB->write($query,$arr);
			if($data)
			{
				header("Location:". ROOT . "login");
				die;
			}

			$_SESSION['error'] = "please enter a valid username and password";
		}
	}

	public function check_logged_in()
	{

		$DB = new Database();
		if(isset($_SESSION['user_url']))
		{

			$arr['user_url'] = $_SESSION['user_url'];
			$query = "select * from users where url_adress = :user_url limit 1";
			$data = $DB->read($query,$arr);
			if($data)
			{
				//logged in
 				$_SESSION['user_name'] = $data[0]->username;
				$_SESSION['user_url'] = $data[0]->url_adress;

				return true;
			}
		}

		return false;

	}

	function logout()
	{
		//logged in
		unset($_SESSION['user_name']);
		unset($_SESSION['user_url']);

		header("Location:". ROOT . "login");
		die;
	}


}