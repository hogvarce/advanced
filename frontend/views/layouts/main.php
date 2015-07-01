<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use backend\models\Pages;


/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
$page = Pages::getContent();
$this->title = $page->title;
include "/../site/index.html";
?>
