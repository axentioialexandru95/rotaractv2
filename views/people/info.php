<?php

use yii\helpers\Html;


?>

<div class="container-fluid members-header text-center">

</div>


<div class="container text-center" id="infoppl">
    <div class="member-image" id="infoppl1" >
        <button id="goBack">X</button>
        <img src="<?= $model['image'] ?>"  alt="<?= $model['name'] ?>">
        <h1 ><?= $model['name'] ?> <?= $model['surname']?></h1>
        <div class="position modal-body"><?= $model['position']?></div>
        <hr>
        <div class="text-box"><?= $model['CV']?>
    </div>
</div>