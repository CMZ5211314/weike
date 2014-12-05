<?php

namespace backend\controllers;

class KuaijieController extends \yii\web\Controller
{
   public function actionRenzheng(){
		return $this->renderPartial('renzheng');
	}
	public function actionGengxin(){
		return $this->renderPartial('gengxin');
	}

}
