<?php

namespace backend\controllers;

class HangyeController extends \yii\web\Controller
{
    public function actionGuanli(){
		return $this->renderPartial('guanli');
	}
	public function actionJineng(){
		return $this->renderPartial('jineng');
	}

}
