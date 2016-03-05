<?php

class MainController extends Controller
{
	public $layout='main';
	public function actionIndex()
	{
		// renders the view file 'protected/views/main/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		echo "render";
		echo $this->layout;
		echo $this->getLayoutFile($this->layout);
		$this->render('index');
	}
	public function actionLoad(){
		echo json_encode(array("name"=>"John G"));
	}
}
