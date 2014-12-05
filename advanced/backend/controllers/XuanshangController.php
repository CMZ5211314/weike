<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
class XuanshangController extends Controller{
	public function actionRenwu(){
		return $this->renderPartial('renwu');
	}
	public function actionPeizhi(){
		return $this->renderPartial('peizhi');
	}
}
?>