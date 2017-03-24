<?php

use yii\helpers\Html;


?>

<div class="container-fluid members-header text-center">

</div>


<div class="container text-center">
    <div class="member-image">
        <img src="<?= $model['image'] ?>"  alt="<?= $model['name'] ?>">
        <h1><?= $model['name'] ?> <?= $model['surname']?></h1>
        <div class="position"><?= $model['position']?></div>
        <hr>
        <div class="text-box"><?= $model['CV']?>
    </div>
</div>