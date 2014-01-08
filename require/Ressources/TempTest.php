<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Test
 *
 * @author Kay
 */
class TempTest extends nController{

	public function HalloWelt(){
//		echo '<pre>'.print_r($f3->get('SESSION.user'), 1);
//		if (!$f3->get('SESSION.user')) $f3->reroute('/login');
		echo json_encode('Hallo Welt aus TempTest');

	}
}
