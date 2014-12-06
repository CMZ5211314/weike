<?php
 
namespace backend\controllers;
use app\models\WitkeyMember;
session_start();
class LoginController extends \yii\web\Controller
{
   
    public function actionIndex()
    {
        return $this->render('login');
    }
    public function actionLogin()
    {
    	
    	$username=$_POST['user'];
    	$password=$_POST['pwd'];
    	$model=new WitkeyMember();
    	$username=$model::find()->where(['username'=>$username])->one();
    	$password=$model::find()->where(['password'=>$password])->one();

    	//$_SESSION['user']=$username;
    	 
    	 //echo $_SESSION['user'];die;
		if($username)
		{
			if($password)
			{ 
                $_SESSION['username']=$username;
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
        //echo 
    	//return $this->renderPartial('');
        echo "<script>location.href='./index.php?r=index/main'</script>";
    }

}
