<?php

namespace backend\controllers;

class QuanjuController extends \yii\web\Controller
{
    public function actionQuanju(){
		return $this->renderPartial('config');
	}

}
