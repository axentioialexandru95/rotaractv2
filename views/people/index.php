<?php

use yii\helpers\Html;


$this->title = 'Members';


?>
<div>

    <h1><?= Html::encode($this->title) ?></h1>

    
<?php 

foreach($members as $member){
    echo $member->name;
    echo $member->surname;
    echo $member->position;
    echo $member->image;
    echo $member->CV."<br><br>";
}