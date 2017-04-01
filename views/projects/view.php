<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Projects */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="project-view-header text-center">
    <h1><?= Html::encode($this->title) ?></h1>
</div>

<div class="projects-view container">
   
    <?php if (Yii::$app->user->isGuest) {
            echo 'Its a guest';
    }?>

    <p class="buttons text-center">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="project-post">




        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'name',
                'date',
                'image',
                'body:ntext',
                'status',
            ],
        ]) ?>



    </div>

</div>
