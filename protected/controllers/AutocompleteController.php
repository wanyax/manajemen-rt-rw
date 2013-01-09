<?php

class AutocompleteController extends Controller
{

    public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
    
    /**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('parse'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionParse($tbl_name)
	{
		$term = trim($_GET['term']) ;
		if($term != '')
		{
			$model = $this->toCamelCase($tbl_name);
			$model = new $model;
			$sampel = $model->searchAutoComplete($term);
			echo CJSON::encode($sampel);
			Yii::app()->end();
		}
	}

}