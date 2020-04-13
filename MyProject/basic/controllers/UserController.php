<?php

namespace app\controllers;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
         if(isset ($_POST['submit']))
     {   print_r("df");}
        if(isset($_POST['Submit']))
           {   
          print_r("df");
            return $this->render('new',  compact('data'));
           } 
               $data = \app\models\UserDetail::find()->all();
               return $this->render('new',  compact('data'));
           }
}
