<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

class HangyeController extends Controller{
	public function actionGuanli(){
		return $this->renderPartial('guanli');
	}
	public function actionJineng(){
		return $this->renderPartial('jineng');
	}
}
?>