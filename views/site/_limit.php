<?php 

use yii\helpers\Html;

?>


<div class="image">
    <div class="overlay"></div>
    <img src="<?= $model['image']?>" alt="<?= $model['name']?>">
    <h3><?= Html::a('label', ['/controller/action'], ['class'=>'href']) ?></h3>
</div>
