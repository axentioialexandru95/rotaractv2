<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form ActiveForm */
?>
<div class="project-view-header text-center">
    <h1><?= Html::encode($this->title) ?></h1>
</div>
<div class="users container">
    
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'surname') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'description')->textarea(['cols'=>8]) ?>
        <?= $form->field($model, 'reason')->textarea(['cols'=>8]) ?>
        <?= $form->field($model, 'position') ?>
        <?= $form->field($model, 'cv_file')->fileInput() ?>
        <?= $form->field($model, 'image_file')->fileInput() ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- users -->
