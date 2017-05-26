<?php

class ProductGalleryController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	protected function beforeAction($action)
	{
		if (!parent::beforeAction($action)) {
	        return false;
	    }
		if(isFrontUserLoggedIn()){
			return true;
		} else {
			$this->redirect(CController::createUrl("/admin/login"));
		}
	}


	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id = null)
	{
		$model=new ProductGallery;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProductGallery']))
		{
			$r = count($_POST['ProductGallery']['image']);
			for ($i=0; $i<$r; $i++) {
				$model = new ProductGallery;
				$name = $_POST['ProductGallery']['image'][$i]['name'];
				$tmp_name = $_POST['ProductGallery']['image'][$i]['tmp_name'];
				$type = $_POST['ProductGallery']['image'][$i]['type'];
				$image = uploadImage($name, $type, $tmp_name, $path);
				$model->image = $image;
				$model->image_type = $_POST['ProductGallery']['image_type'][$i];
				$model->product = $_POST['ProductGallery']['product'];
				$model->save();
			}
			$this->redirect(array('product/view','id'=>$model->id));
			//$model->attributes=$_POST['ProductGallery'];
			//if($model->save())
				//$this->redirect(array('product/view','id'=>$model->id));
		}
		$this->render('create',array(
			'model'=>$model,
			'product'=>$id
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$p = Product::model->findByPk($id);
		if($p === null){
			$model=$this->loadModel($id);
		} else {
			$model = new ProductGallery;
			$gallery = ProductGallery::model()->findAll(array("condition" => "product = '".$id."'"));
		}

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProductGallery']))
		{
			ProductGallery::model()->deleteAll(['product' => $_POST['ProductGallery']['product']]);
			$r = count($_POST['ProductGallery']['image']);
			for ($i=0; $i<$r; $i++) {
				$model = new ProductGallery;
				$name = $_POST['ProductGallery']['image'][$i]['name'];
				$tmp_name = $_POST['ProductGallery']['image'][$i]['tmp_name'];
				$type = $_POST['ProductGallery']['image'][$i]['type'];
				$image = uploadImage($name, $type, $tmp_name, $path);
				$model->image = $image;
				$model->image_type = $_POST['ProductGallery']['image_type'][$i];
				$model->product = $_POST['ProductGallery']['product'];
				$model->save();
			}
			$this->redirect(array('product/view','id'=>$model->id));
			
			/*$model->attributes=$_POST['ProductGallery'];
			if($model->save())
				$this->redirect(array('product/view','id'=>$model->id));*/
		}
		$this->render('update',array(
			'model' => $model,
			'gallery'=>$gallery,
			'product'=>$id
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model = $this->loadModel($id);
		unlink($model->image);
		$model->delete();
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('manage'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->redirect(array("manage"));
	}

	/**
	 * Manages all models.
	 */
	public function actionManage()
	{
		$model=new ProductGallery('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ProductGallery']))
			$model->attributes=$_GET['ProductGallery'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ProductGallery the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ProductGallery::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ProductGallery $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-gallery-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
