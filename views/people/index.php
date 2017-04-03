<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;

$this->title = 'Membri';

?>



<div class="members-header text-center">
    <h1>Membri</h1>
</div>

<div class="members container" id="members">

    </p>
    <?php foreach ($members as $member): ?>
    <div class="image">

        <?= Html::a(Html::img($member->image,['alt'=>$member->name]), ['/people/info', 'id'=> $member->id],['class'=>'href']) ?>

    <h3><?= $member->name.' '.$member->surname ?></h3>
    <h4><?= $member->position ?></h4>
    </div>
    </a>

    <?php endforeach; ?>

</div>

