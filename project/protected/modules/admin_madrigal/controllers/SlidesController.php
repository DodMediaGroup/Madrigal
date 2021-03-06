<?php

class SlidesController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout='/layouts/main';

    /**
     * @return array action filters
     */
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
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array(
                    'admin',
                    'create',
                    'view',
                    'update',
                    'status',
                    'delete_post'
                ),
                'users'=>array('@'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }


    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
         $scriptsAdd = array(
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/ckeditor/ckeditor'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/ckeditor/adapters/jquery'
            )
        );
        $this->addScripts($scriptsAdd, 'admin');
        $this->writeScripts();

        $model=new Slide;


        if(isset($_POST['Slide']))
        {
            $errors = false;

            $model->attributes=$_POST['Slide'];
            $model->clearErrors();
            $model->image = "default.png";

            if($model->validate(null, false)){
                if($_FILES['logo']['size'] > 0){
                    $server = $_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl.'/images/';
                    
                    $uploadLogo = MyMethods::uploadImage($_FILES['logo'], 500, 'slide/');

                    if(!$uploadLogo['status']){
                        $model->addError('image', $uploadLogo['message']);
                        $errors = true;
                    }
                    else{
                        $model->image = $uploadLogo['imageName'];
                        MyMethods::resizeImage($server.'slide/', $model->image, 300, 300);
                    }
                }
                else{
                    $model->addError('image', 'Es necesario agregar una imagen al Slide!!!');
                    $errors = true;
                }
                if(!$errors && $model->save()){
                    $this->redirect('admin');
                }
            }
        }
        $this->render('create',array(
            'model'=>$model
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
       $scriptsAdd = array(
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/ckeditor/ckeditor'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/ckeditor/adapters/jquery'
            )
        );
        $this->addScripts($scriptsAdd, 'admin');
        $this->writeScripts();

        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Slide']))
        {
            $errors = false;

            $model->attributes=$_POST['Slide'];
            $model->clearErrors();

            if($model->validate(null, false)){
                if($_FILES['logo']['size'] > 0){
                    $server = $_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl.'/images/';
                    $currentImagen = $model->image;
                    $uploadLogo = MyMethods::uploadImage($_FILES['logo'], 500, 'slide/');

                    if(!$uploadLogo['status']){
                        $model->addError('image', $uploadLogo['message']);
                        $errors = true;
                    }
                    else{
                        $model->image = $uploadLogo['imageName'];
                        MyMethods::resizeImage($server.'slide/', $model->image, 300 , 300);

                         @unlink($_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl."/images/slide/".$currentImagen);
                        @unlink($_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl."/images/slide/200x315/".$currentImagen);
                    }
                }
            }
            if(!$errors && $model->save()){
                  $this->redirect(array('admin','id'=>$model->id));
                }
        }
        $this->render('update',array(
            'model'=>$model
        ));
    }


     public function actionStatus($id){
        $Slide = $this->loadModel($id);
        if($Slide->status == 1)
            $Slide->status = 0;
        else if($Slide->status == 0)
            $Slide->status = 1;
        else
            throw new CHttpException(404,'The requested page does not exist.');

        $Slide->save();
        $this->redirect(array('admin'));
    }


    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete_post($id)
    {
        $Slide = $this->loadModel($id);

       $Slide->status = 2;
       $Slide->save();
       $this->redirect(array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('Slide');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $scriptsAdd = array(
            array(
                'type'=>'css',
                'file'=>'assets/admin/libs/jquery-datatables/css/dataTables.bootstrap'
            ),
            array(
                'type'=>'css',
                'file'=>'assets/admin/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/jquery-datatables/js/jquery.dataTables.min'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/jquery-datatables/js/dataTables.bootstrap'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min'
            )
        );
        $this->addScripts($scriptsAdd);
        $this->writeScripts();

        $slides = Slide::model()->findAll(array('condition'=>'t.status != 2', 'order'=>'t.id DESC'));

        $this->render('admin',array(
            'slides'=>$slides,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Habitacion the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
         $model=Slide::model()->findByAttributes(array('id'=>$id), array('condition'=>'t.status != 2'));
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Habitacion $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='Slide-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}