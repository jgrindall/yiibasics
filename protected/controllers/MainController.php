<?php

/*
http://www.yiiframework.com/wiki/175/how-to-create-a-rest-api/
*/

class MainController extends Controller
{
	public $layout='main';
	private $format = 'json';
  public function filters(){
    return array();
  }
  public function actionList(){
		$models = Post::model()->findAll();
		$rows = array();
		if(empty($models)) {
        echo json_encode($rows);
    }
		else {
        foreach($models as $model){
            $rows[] = $model->attributes;
				}
        echo json_encode($rows);
    }
  }
  public function actionView(){
		$out = array();
		if(!isset($_GET['id'])){
        throw new CHttpException(404,'The specified post cannot be found.');
		}
		$model = Post::model()->findByPk($_GET['id']);
		if(isset($model)){
			$out = $model->attributes;
		}
		echo json_encode($out);
  }
  public function actionCreate(){
  }
  public function actionUpdate(){
  }
  public function actionDelete(){
  }
	public function actionIndex(){
		$this->render('index');
	}
	public function actionLoad(){
		echo json_encode(array("name"=>"John G"));
	}
}





/*
$models = Post::model()->findAll();
            break;
        default:
            // Model not implemented error
            $this->_sendResponse(501, sprintf(
                'Error: Mode <b>list</b> is not implemented for model <b>%s</b>',
                $_GET['model']) );
            Yii::app()->end();
    }
    // Did we get some results?
    if(empty($models)) {
        // No
        $this->_sendResponse(200,
                sprintf('No items where found for model <b>%s</b>', $_GET['model']) );
    } else {
        // Prepare response
        $rows = array();
        foreach($models as $model)
            $rows[] = $model->attributes;
        // Send the response
        $this->_sendResponse(200, CJSON::encode($rows));
    }
}
*/
