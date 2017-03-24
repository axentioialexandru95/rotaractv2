<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="about-header">
    <div class="background"></div>
    <div class="header-text text-center">
        <h1>Despre noi</h1>
    </div>
</div>

<div class="container">
    <div class="about-text">

        <h1>Cine suntem?</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt minima animi aliquam harum voluptatem soluta rem corrupti tempora quis, optio tenetur necessitatibus minus culpa amet temporibus fugit ducimus, at voluptatum!</p>
        <hr>
    </div>
</div>
<div class="about-members text-center">
    <?= Html::a('Membri', ['/people/index'], ['class'=>'btn btn-primary']) ?>
</div>
