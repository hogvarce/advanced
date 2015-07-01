<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pages */
/* @var $form ActiveForm */
?>
<div class="NavBar">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title') ?>
        <?= $form->field($model, 'link') ?>
        <?= $form->field($model, 'keywords') ?>
        <?= $form->field($model, 'descr') ?>
        <?= $form->field($model, 'content') ?>
        <?= $form->field($model, 'h1') ?>
        <?= $form->field($model, 'preview') ?>
        <?= $form->field($model, 'parent_id') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- NavBar -->
