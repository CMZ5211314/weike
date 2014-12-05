<?php

namespace backend\controllers;

class ZengzhiController extends \yii\web\Controller
{
    public function actionFuwu(){
		return $this->renderPartial('fuwu');
	}
	public function actionGouwu(){
		return $this->renderPartial('gouwu');
	}

}
