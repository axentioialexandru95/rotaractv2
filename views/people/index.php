<?php

use yii\helpers\Html;


$this->title = 'Vrei sa ajuti?';


?>

<div class="members-header text-center">
    <h1>Membri</h1>
</div>

<div class="members">

    <?php foreach ($members as $member): ?>
    <div class="image">
    
    <img src="<?= $member->image ?>"  alt="<?= $member->name ?>">
    
    <h3><?= $member->name ?> <?= $member->surname ?></h3>
    <?= Html::a('Touch Me', ['/people/info', 'id'=> $member->id ], ['class'=>'href']) ?>
    <h4><?= $member->position ?></h4>
    </div>
    </a>

    <?php endforeach; ?>
</div>

