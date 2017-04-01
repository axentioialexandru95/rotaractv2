<?php 

use yii\helpers\Html;

?>


<div class="image">

    <img src="<?= $model['image']?>" alt="<?= $model['name']?>" >
    <h3 class="text-center"><?= Html::a($model['name'], ['/blog/post', 'id'=> $model['id'] ], ['class'=>'href']) ?></h3>

</div>
