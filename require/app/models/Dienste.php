<?php

class Dienste extends DB\SQL\Mapper {

	public function __construct(\DB\SQL $db) {
		parent::__construct($db, 'Ereignis');
	}

	public function add(){
		$this->copyfrom('POST');
		$this->save();
	}
}