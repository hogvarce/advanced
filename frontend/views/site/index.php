<?php
use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Pages;
/* @var $this yii\web\View */
$this->title = 'Добро пожаловать!';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?=$this->title?></h1>
     
    </div>

    <div class="body-content">
        <?= Pages::getContent()->content ?>
    </div>
</div>
