<?php

class Benutzer extends DB\SQL\Mapper {

    public function __construct(\DB\SQL $db) {
	parent::__construct($db, 'Benutzer');
    }

    public function add() {
	$this->copyfrom('POST');
	$this->save();
    }

    public function getUserById($id) {
	$this->load(array('BenutzerId=?', $id));
	return $this->query;
    }
    
    public function getUserByEmail($email) {
	$this->load(array('Email=?', $email));
	return $this->query;
    }

}
