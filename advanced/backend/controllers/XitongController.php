<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

class XitongController extends Controller{
	public function actionpeizhi(){
		return $this->renderPartial('peizhi');
	}
}
?>