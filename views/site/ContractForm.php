<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contracts */
/* @var $form ActiveForm */
?>

    <div class="site-ContractForm">
        <?php $form = ActiveForm::begin(); ?>

            <div class="col-md-12"><?= $form->field($model, 'company_name') ?></div>
            <div class="col-md-12"><?= $form->field($model, 'company_email') ?></div>
            <div class="col-md-12"><?= $form->field($model, 'company_address') ?></div>
             <div class="col-md-12"><?= $form->field($model, 'company_nr') ?></div>
             <div class="col-md-12"><?= $form->field($model, 'CUI') ?></div>
             <div class="col-md-12"><?= $form->field($model, 'company_representative') ?></div>
             <div class="col-md-12"><?= $form->field($model, 'representative_function') ?></div>
             <div class="col-md-12"><?= $form->field($model, 'payment') ?></div>

            <div class="form-group text-center">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary submit-register']) ?>
            </div>
        <?php ActiveForm::end(); ?>

    </div><!-- site-ContractForm -->
</div>