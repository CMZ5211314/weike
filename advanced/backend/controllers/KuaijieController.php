<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

class KuaijieController extends Controller{
	public function actionRenzheng(){
		return $this->renderPartial('renzheng');
	}
	public function actionGengxin(){
		return $this->renderPartial('gengxin');
	}
	
}
?>