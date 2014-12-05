<?php

namespace backend\controllers;

class IndexController extends \yii\web\Controller
{
    public function actionIndex(){
		return $this->renderPartial('login');
	}
	public function actionMain(){
		return $this->renderPartial('index');
	}
	public function actionCenter(){
		return $this->renderPartial('center');
	}

}
