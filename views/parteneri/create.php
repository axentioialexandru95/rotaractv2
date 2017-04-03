<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Parteneri */

$this->title = 'Create Parteneri';
$this->params['breadcrumbs'][] = ['label' => 'Parteneri', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="create-header text-center">
    <h1> Create Partneri</h1>
</div>
<div class="background-projects">
    <div class="projects-create container">

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
