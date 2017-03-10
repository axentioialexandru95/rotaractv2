<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Members */

$this->title = 'Create Members';
$this->params['breadcrumbs'][] = ['label' => 'Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="create-header text-center">
        <h1><?= Html::encode($this->title) ?></h1>
</div>
<div class="members-create container">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
