<?php

class DefaultController extends Controller
{
	public function init()
	{
		Yii::import('application.modules.evil_dm.models.*');
	}

	public function actionIndex()
	{
		$this->pageTitle .= " - Список админских плюшек";
		$this->render('index');
	}

	public function actionGenerateBlowfish()
	{
        $input = Yii::app()->request->getPost('input');
        // для примера будем приводить строку к верхнему регистру
        $output = CPasswordHelper::hashPassword($input);

        // если запрос асинхронный, то нам нужно отдать только данные
        if(Yii::app()->request->isAjaxRequest){
            echo CHtml::encode($output);
            // Завершаем приложение
            Yii::app()->end();
        }
        else {
            // если запрос не асинхронный, отдаём форму полностью
            $this->render('index', array(
                'input'=>$input,
                'output'=>$output,
            ));
        }
    }

	public function actionTestAjax()
	{
		$input = Yii::app()->request->getPost('ajax');
		$char = Yii::app()->db->createCommand()
				->select()
				->from("tbl_charsheet")
				->where("name = '". CHtml::encode($input) . "'")
				->queryAll();
		if(Yii::app()->request->isAjaxRequest){
//            var_dump($char[0]);
            echo $char[0]["bio"];
            Yii::app()->end();
        }
	}
}