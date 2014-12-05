<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

class ZengzhiController extends Controller{
	public function actionFuwu(){
		return $this->renderPartial('fuwu');
	}
	public function actionGouwu(){
		return $this->renderPartial('gouwu');
	}
}
?>