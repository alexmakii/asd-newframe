<?php

class IndexController extends Controller
{
	public function actionIndex()
	{
//		$this->render()
		$this->pageTitle = "Дегустируем Yii";
//		$this->
		$this->render('index', array('val1'=>'111'));
	}
}