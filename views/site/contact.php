<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="contact-header container-fluid">
        <div class="background"></div>
        <div class="container">
            <div class="header-text text-center">
                <h1><?= Html::encode($this->title) ?></h1>
            </div>
        </div>
    </div>
    
<div class="container">
    <div class="contact-info text-center">
        <div class="col-md-6">
            <i class="fa fa-phone"> 0751 333 999</i>
            <br>
            <i class="fa fa-envelope"> contact@rotaract.com </i>
        </div>
        <div class="col-md-6">
            <i class="fa fa-user"> Radu Bores</i>
            <br>
            <i class="fa fa-black-tie"> Manager </i>
        </div>
    </div>
</div>


    <div class="container contact-form">
        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <div class="alert alert-success">
                Thank you for contacting us. We will respond to you as soon as possible.
            </div>


        <?php else: ?>

            <div class="row container">
                <div class="col-md-6">

                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'subject') ?>

                </div>        
                <div class="col-md-6">
                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>
                </div>
                    <?php ActiveForm::end(); ?>

                </div>
            </div>

        <?php endif; ?>

<div class="map container-fluid">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1130.0001313154107!2d26.24695616818386!3d47.65317631827691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4734fc2741ff5d8d%3A0xd05e0a2934b58a!2sGenesis+Management+Consulting+SRL!5e0!3m2!1sro!2sro!4v1488888635391" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>
        
        
    </div>