<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
class WangzhanController extends Controller{
	public function actionguanggao(){
		return $this->renderPartial('guanggao');
	}
}
?>