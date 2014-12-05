<?php

namespace backend\controllers;

class JiekouController extends \yii\web\Controller
{
    public function actionDenglu(){
		return $this->renderPartial('denglu');
	}
	public function actionDitu(){
		return $this->renderPartial('ditu');
	}
	public function actionPeizhi(){
		return $this->renderPartial('peizhi');
	}
	public function actionDuanxin(){
		return $this->renderPartial('duanxin');
	}
	public function actionZhifu(){
		return $this->renderPartial('zhifu');
	}

}
