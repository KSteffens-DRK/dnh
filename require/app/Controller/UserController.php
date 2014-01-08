<?php

class UserController extends nController {

	public function loadUser() {
		$user = new Benutzer($this->db);
		F3::set('users', $user->getUserById(F3::get('SESSION.userid')));
//echo '<pre>'.print_r($user->Name,1);
		F3::set('page_head', 'Benutzerdaten');
		F3::set('view', 'user/user.html');
	}

	public function getUserByEmail($email) {
		$user = new Benutzer($this->db);
		$user->getUserByEmail($email);
		return $user->BenutzerId;
	}

}
