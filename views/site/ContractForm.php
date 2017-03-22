<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contracts */
/* @var $form ActiveForm */
?>

<h1><?=$model['company_name']?></h1>
    <div class="site-ContractForm">

        <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'company_name') ?>
            <?= $form->field($model, 'company_address') ?>
            <?= $form->field($model, 'company_nr') ?>
            <?= $form->field($model, 'CUI') ?>
            <?= $form->field($model, 'company_representative') ?>
            <?= $form->field($model, 'representative_function') ?>
            <?= $form->field($model, 'payment') ?>
        
            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>
        <?php ActiveForm::end(); ?>

    </div><!-- site-ContractForm -->
</div>