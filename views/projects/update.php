<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Projects */

$this->title = 'Update Projects: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="create-header text-center">
        <h1><?= Html::encode($this->title) ?></h1>
</div>
<div class="projects-update container">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
