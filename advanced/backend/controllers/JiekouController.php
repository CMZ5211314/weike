<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

class JiekouController extends Controller{
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
?>