<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=rotaract',
    'username' => 'root',
    'password' => 'lifewarrior95',
    'charset' => 'utf8',
];

$sql  = 'SELECT * FROM `projects` WHERE STATUS = \'active\'';