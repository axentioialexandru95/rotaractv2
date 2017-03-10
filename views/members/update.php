<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Members */

$this->title = 'Update Members: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="create-header text-center">
        <h1><?= Html::encode($this->title) ?></h1>
</div>
<div class="members-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
