<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

class XitongController extends Controller{
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
?>