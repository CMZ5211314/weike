<?php

namespace backend\controllers;

class WangzhanController extends \yii\web\Controller
{
    public function actionGuanggao(){
		return $this->renderPartial('guanggao');
	}
	public function actionJieshao(){
		return $this->renderPartial('jieshao');
	}

}
