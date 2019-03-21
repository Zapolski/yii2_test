<?php
/**
 * Created by PhpStorm.
 * User: d
 * Date: 21.03.2019
 * Time: 15:47
 */
namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller{

    public function actionIndex(){
        return $this->render('index');
    }

}