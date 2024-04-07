<?php
namespace app\core;

//Controller superclass from which all controller classes should inherit
class Controller{
	function view($name, $data=null){
		//load the view files to present them to the Web user
		include('app/views/' . $name . '.php');
	}
}