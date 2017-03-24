<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form ActiveForm */
?>
<div class="project-view-header text-center">
    <div class="text-center"><h1>Inscriere</h1></div>
</div>
<div class="users container">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <div class="col-md-6"><?= $form->field($model, 'name') ?></div>
        <div class="col-md-6"><?= $form->field($model, 'surname') ?></div>
        <div class="col-md-6"><?= $form->field($model, 'phone') ?></div>
        <div class="col-md-6"><?= $form->field($model, 'email') ?></div>
        <div class="col-md-12"><?= $form->field($model, 'description')->textarea(['cols'=>8]) ?></div>
        <div class="col-md-12"><?= $form->field($model, 'reason')->textarea(['cols'=>8]) ?></div>
        <div class="col-md-12"><?= $form->field($model, 'position') ?></div>
        <div class="col-md-4"><?= $form->field($model, 'cv_file')->fileInput() ?></div>
        <div class="col-md-4"><?= $form->field($model, 'image_file')->fileInput() ?></div>
        <div class="col-md-4"><?= Html::submitButton('Submit', ['class' => 'btn btn-primary submit-register']) ?></div>

    <?php ActiveForm::end(); ?>

</div><!-- users -->
