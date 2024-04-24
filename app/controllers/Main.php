<?php

namespace app\controllers;

class Main extends \app\core\Controller {

	public function index(){
		$movies = new \app\models\Movie();
		$movies = $movies->getAllAvailable();
		$this->view('Main/index', $movies);
	}
}