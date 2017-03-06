<?php

use yii\helpers\Html;


$this->title = 'Blog';


?>
<div>

    <h1><?= Html::encode($this->title) ?></h1>

    
<?php 

foreach($projects as $project){
    echo $project->name;
    echo $project->date;
    echo $project->image;
    echo $project->body;
    echo $project->status."<br><br>";
}