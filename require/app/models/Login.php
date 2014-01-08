<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Kay
 */
class Login extends DB\SQL\Mapper {
	
	public function __construct(DB\SQL $db) {
		parent::__construct($db, 'Benutzer');

	}
	
	public function checkPWD($email, $pwd){
		$this->load(array('Email=? AND Password=?', $email, $pwd));
		return $this->query;
	}
}
