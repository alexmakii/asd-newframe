<?php

class TestModule extends CWebModule
{
	public $defaultController = 'index';
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'test.models.*',
			'test.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			Yii::app()->name = 'Тестим Yii';
			return true;
		}
		else
			return false;
	}
}
