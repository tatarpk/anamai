<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {
        $a = 9;
        $b = 2;
        $s = $a * $b;
        echo 'test1 นะจ๊ะ';
        return $this->render('test1', ['a' => $a, 'b' => $b, 'sum' => $s]);
    }# actionTest1() end

    public function actionTest2($name=null) {
        echo "Your name is $name";
        
    }

}
