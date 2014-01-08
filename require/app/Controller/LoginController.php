<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author Kay
 */
class LoginController extends lController {

		static public function authentication(){
			F3::set('email', 'Email');
			F3::set('password', 'Passwort');
			F3::set('submitbutton', 'Anmelden');
			F3::set('view', 'login.html');
		}

		public function verify(){
			$user=new DB\SQL\Mapper($this->db,'Benutzer');
			$auth=new \Auth($user, array('id'=> 'Email', 'pw' => 'Password'));
			$login_result = $auth->login($_POST['email'], $_POST['password']);

			if ($login_result){
				F3::set('SESSION.login', true, 10);
				$user = new UserController($this->db);
				$id = $user->getUserByEmail($_POST['email']);
				F3::set('SESSION.userid', $id);
				echo F3::get('SESSION.userid');
				F3::reroute('/');
			} else {
				F3::set('SESSION.login', false);
				F3::reroute('/login');
			}
		}

		public function logout(){
			F3::set('SESSION.login', false);
			F3::reroute('/login');
		}

}
