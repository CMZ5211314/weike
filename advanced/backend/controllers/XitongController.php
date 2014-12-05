<?php

namespace backend\controllers;

class XitongController extends \yii\web\Controller
{
    public function actionPeizhi(){
		return $this->renderPartial('peizhi');
	}
	public function actionMoxing(){
		return $this->renderPartial('moxing');
	}
	public function actionHuiyuan(){
		return $this->renderPartial('huiyuan');
	}
	public function actionZidingyi(){
		return $this->renderPartial('zidingyi');
	}
	public function actionHuilu(){
		return $this->renderPartial('huilu');
	}

}
