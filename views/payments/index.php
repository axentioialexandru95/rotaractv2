<?php

use yii\helpers\Html;


$this->title = 'Vrei sa ajuti?';


?>

<div class="blog-header">
    <div class="blog-text text-center">
        <h1>Vrei sa ajuti?</h1> 
    </div>
</div>




<div class="projects">
    <div class="projects-text text-center">
        <h1>Proiecte Curente</h1>
        <hr>
    </div>
</div>

<div class="container-fluid projects-layouts">



    <?php foreach ($projects as $project): ?>


        <div class="image">
        <img src="<?= $project->image ?>">
        <h3 class="overlay text-center"><?= $project->name?> </h3>
        </div>
    <?php endforeach; ?>

</div>

<div class="finished-projects">
    <div class="projects-text text-center">
        <h1>Proiecte Terminate</h1>
        <hr>
    </div>
</div>

<div class="container-fluid projects-layouts">

    <?php foreach ($projects as $project): ?>
        <div class="image">
        <img src="<?= $project->image ?>">
        <h3 class="overlay text-center"><?= $project->name?> </h3>
        </div>
    <?php endforeach; ?>

</div>
