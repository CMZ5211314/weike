<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
class FuwuController extends Controller{
	public function actionGuanli(){
		return $this->renderPartial('guanli');
	}
	public function actionPeizhi(){
		return $this->renderPartial('peizhi');
	}
	public function actionDingdan(){
		return $this->renderPartial('dingdan');
	}
}
?>