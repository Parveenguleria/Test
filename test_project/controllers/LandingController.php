<?php
namespace app\controllers;

use yii\web\Controller;

class LandingController extends Controller{
	
	public $layout = "LandingLayout";
	public function actionIndex(){
		return $this->render('index');
	}
	
}