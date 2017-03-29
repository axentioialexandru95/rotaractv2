<?php

use yii\helpers\Html;
use yii\widgets\ListView;


$this->title = 'Post';

/* @var $postProvider yii\data\ArrayDataProvider */

?>

<div class="post-header">

</div>

<div class="post-body container text-center">       
    <div class="row">
        <div class="col-md-12">
        <h3 class="text-center"><?= $model['name'] ?></h3>
        <hr>
        <img src="<?= $model['image']?>" alt="<?= $model['name']?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <p class="text-muted"><i class="fa fa-calendar"></i> <?= $model['date']?>  <i class="fa fa-circle"></i> <?= $model['status']?></p>
        
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <p class="post-text"><?= $model['body']?></p>
            </div>
        </div>
    </div>
</div>

