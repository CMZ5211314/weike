<?php

namespace backend\controllers;

class WenzhangController extends \yii\web\Controller
{
    public function actionGuanli(){
		return $this->renderPartial('guanli');
	}
	public function actionFenlei(){
		return $this->renderPartial('fenlei');
	}

}
