<?php

namespace backend\controllers;

class WangzhanController extends \yii\web\Controller
{
    public function actionGuanggao(){
		/*$sql="select * from bowen";
		$criteria=new CDbCriteria();
		$result = Yii::app()->db->createCommand($sql)->query();	
		$pages=new CPagination($result->rowCount);
		$pages->pageSize=5;
		$pages->applyLimit($criteria);
		$result=Yii::app()->db->createCommand($sql." LIMIT :offset,:limit");
		$result->bindValue(':offset', $pages->currentPage*$pages->pageSize);
		$result->bindValue(':limit', $pages->pageSize);
		$goodsInfo=$result->query();
		this->renderPartial('guanggao',array(
		'info'=>$goodsInfo,
		));*/
		return $this->renderPartial('guanggao');
	}
	public function actionJieshao(){
		return $this->renderPartial('jieshao');
	}

}
