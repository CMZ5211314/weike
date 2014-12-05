<?php

namespace backend\controllers;

class JijianController extends \yii\web\Controller
{
    public function actionGuanli(){
		return $this->renderPartial('guanli');
	}
	public function actionPeizhi(){
		return $this->renderPartial('peizhi');
	}

}
