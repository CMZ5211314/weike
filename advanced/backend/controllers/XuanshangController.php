<?php

namespace backend\controllers;

class XuanshangController extends \yii\web\Controller
{
   public function actionRenwu(){
		return $this->renderPartial('renwu');
	}
	public function actionPeizhi(){
		return $this->renderPartial('peizhi');
	}

}
