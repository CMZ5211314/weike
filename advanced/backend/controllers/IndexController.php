<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

class IndexController extends Controller{
	public function actionIndex(){
		return $this->renderPartial('login');
	}
	public function actionMain(){
		return $this->renderPartial('index');
	}
	public function actionCenter(){
		return $this->renderPartial('center');
	}
	public function actionConfig(){
		return $this->renderPartial('config');
	}
	public function actionArtilcle(){
		return $this->renderPartial('article/article');
	}
}
?>