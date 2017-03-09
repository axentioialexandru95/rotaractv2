<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Projects */

$this->title = 'Create Projects';
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];

?>
<div class="create-header text-center">
    <h1> Create Project</h1>
</div>
<div class="background-projects">
    <div class="projects-create container">

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>