<?php

use yii\helpers\Html;


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



    <div class="project-post">

    </div>

</div>
