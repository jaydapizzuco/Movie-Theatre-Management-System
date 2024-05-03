<?php

namespace app\controllers;

class Main extends \app\core\Controller {

	public function index(){
		$movies = new \app\models\Movie();
		$movies = $movies->getAllAvailable();
		$this->view('Main/index', $movies);
	}

	public function aboutus(){
		$about = new \app\models\About();
		$about = $about->get();
		$this->view('Main/aboutus', $about);
	}
}