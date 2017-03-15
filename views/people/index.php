<?php

use yii\helpers\Html;


$this->title = 'Vrei sa ajuti?';


?>

<div class="members-header text-center">
    <h1>Members</h1>
</div>

<div class="members">
    <?php foreach ($members as $member): ?>
    <div class="image">
    <img src="<?= $member->image ?>"  alt="<?= $member->name ?>">
    <h3><?= $member->name ?> <?= $member->surname ?></h3>
    <h4><?= $member->position ?></h4>
    </div>
    <div class="member-overlay">
            <div class="modal text-center">
                <img src="<?= $member->image ?>"  alt="<?= $member->name ?>">
                <h1><?= $member->name ?> <?= $member->surname ?></h1>
                <div class="modal-position"><?= $member->position ?></div>
                <hr>
                <div class="close-btn fa fa-times"></div>
                <div class="text-box"><?= $member->CV ?>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum iste autem maxime dolor id fuga harum fugiat soluta. Voluptate deserunt harum nihil dolores sed explicabo, praesentium labore a impedit modi.</div>
                
            </div>
    </div>
    <?php endforeach; ?>
</div>

