<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'ทดสอบ1';
$this->params['breadcrumbs'][] = $this->title;
?>
ทดสอบ1<br>
ส่งตัวแปลมาว่า a=<?=$a?> * b=<?=$b?> = s=<?=$sum?>
<hr>
<?PHP
$dat = [9,8,77,666];
print_r($dat);
?>
<hr>
<?PHP
$dat = array(1,2,3,4,5,6);
print_r($dat);
?>
<hr>
<?PHP
$dat = ['a'=>9,'s'=>8,'s'=>77,'d'=>666];
print_r($dat);
?>