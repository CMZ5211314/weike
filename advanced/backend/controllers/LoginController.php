<?php
namespace backend\controllers;
use app\models\WitkeyMember;

class LoginController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('login');
    }
    public function actionLogin()
    {
    	session_start();
    	$username=$_POST['user'];
    	$password=$_POST['pwd'];
    	$model=new WitkeyMember();
    	$username=$model::find()->where(['username'=>$username])->one();
    	$password=$model::find()->where(['password'=>$password])->one();

    	$_SESSION['user']=$username;
    	 
    	 //echo $_SESSION['user'];die;
		if($username)
		{
			if($password)
			{
				exit("showList(".json_encode(1).")");
			}else
			{
				exit("showList(".json_encode(0).")");
			}
		}else
		{
			exit("showList(".json_encode(2).")");
		}
    }
    public function actionAa()
    {
    	 return $this->renderPartial('index');
    }

}
