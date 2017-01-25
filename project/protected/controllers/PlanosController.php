<?php

class PlanosController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionViewajax($id)
	{
		if(Yii::app()->request->isAjaxRequest){
			$plano = Apartment::model()->findByAttributes(array('status'=>1, 'id'=>$id));
			if($plano != null){
				$this->renderPartial('plano', array('plano' => $plano));
			}else{
				throw new CHttpException(404,'The requested page does not exist.');
			}
		}else{
			throw new CHttpException(404,'The requested page does not exist.');
		}
	}
}