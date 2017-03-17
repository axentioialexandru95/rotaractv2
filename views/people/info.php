<?php

use yii\helpers\Html;


?>

<div class="member-overlay">
    <div class="modal text-center">
        <img src="<?= $model['image'] ?>"  alt="<?= $model['name'] ?>">
        <h1><?= $model['name'] ?> <?= $model['surname']?></h1>
        <div class="modal-position"><?= $model['position']?></div>
        <hr>
        <div class="close-btn fa fa-times"></div>
        <div class="text-box"><?= $model['CV']?>
    </div>
</div> 