<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>

<?php if(Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-danger" role="alert">
            <?= Yii::$app->session->getFlash('success') ?>
        </div>
    <?php endif; ?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name'); ?>
<?= $form->field($model, 'surname'); ?>
<?= $form->field($model, 'phoneNumber'); ?>
<?= $form->field($model, 'emailAddress'); ?>
<?= $form->field($model, 'message')->textarea(); ?>
<?php  // className captcha unsure ?>
<?= $form->field($model, 'captcha')->widget(Captcha::className()); ?>
<?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>