<?php

namespace backend\controllers;

class FuwuController extends \yii\web\Controller
{
    public function actionGuanli(){
		return $this->renderPartial('guanli');
	}
	public function actionPeizhi(){
		return $this->renderPartial('peizhi');
	}
	public function actionDingdan(){
		return $this->renderPartial('dingdan');
	}

}
