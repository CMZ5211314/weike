<?php

namespace backend\controllers;

class ChenggongController extends \yii\web\Controller
{
    public function actionGuanli(){
		return $this->renderPartial('guanli');
	}

}
