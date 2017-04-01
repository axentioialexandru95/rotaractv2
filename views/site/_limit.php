<?php 

use yii\helpers\Html;

?>


<div class="image">
    <div class="overlay"></div>
    <img src="<?= $model['image']?>" alt="<?= $model['name']?>">
    <h3><?= Html::a($model['name'], ['/blog/post', 'id'=> $model['id'] ], ['class'=>'href']) ?></h3>
</div>
