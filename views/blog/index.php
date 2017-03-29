<?php

use yii\helpers\Html;
use yii\widgets\ListView;

$this->title = 'Proiecte';

/* @var $dataProvider yii\data\ArrayDataProvider */

?>

<div class="blog-header">
    <div class="blog-text text-center">
        <h1>Proiecte</h1> 
    </div>
</div>



<div class="projects">
    <div class="projects-text text-center">
        <h1>Proiecte Curente</h1>
        <hr>
    </div>
</div>

<div class="container-fluid projects-layouts ">

    <?php echo ListView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false,
        'itemView' => '_projects',
    ]); ?>

</div>

<div class="finished-projects">
    <div class="projects-text text-center">
        <h1>Proiecte Terminate</h1>
        <hr>
    </div>
</div>

<div class="container-fluid projects-layouts ">

    <?php echo ListView::widget([
        'dataProvider' => $seconddataProvider,
        'summary' => false,
        'itemView' => '_projects'
    ]); ?>

</div>