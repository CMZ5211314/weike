<?php

namespace backend\controllers;

class DingjinController extends \yii\web\Controller
{
   public function actionGuanli(){
		return $this->renderPartial('guanli');
	}
	public function actionPeizhi(){
		return $this->renderPartial('peizhi');
	}

}
