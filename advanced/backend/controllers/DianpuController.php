<?php

namespace backend\controllers;

class DianpuController extends \yii\web\Controller
{
    public function actionGuanli(){
		return $this->renderPartial('guanli');
	}

}
