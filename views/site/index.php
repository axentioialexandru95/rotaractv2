<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ListView;
$this->title = 'Rotaract';
?>
<div class="index-header">
    <div class="background"></div>
    <div class="header-content text-center">
        <h1>We are</h1>
        <div class="text-center"><h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dolorum, eveniet voluptatem vitae tenetur dolor nesciunt. Qui inventore autem libero, laboriosam tempore fugit, obcaecati dignissimos consequatur eligendi in aut, nihil.</h3></div>
        <?= Html::a('Afla mai multe', ['/site/about'], ['class'=>'href btn btn-primary']) ?>
        <br>
    </div>
</div>

<div class="index-learning text-center">
    <div class="container">
        <h1>Ce poti invata de la noi</h1>
        <div class="col-md-4">
            <i class="fa fa-handshake-o"></i>
            <h3>Comunicare</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, vel ipsam veritatis officia, perspiciatis fugiat minima, molestiae quas suscipit ipsum similique reprehenderit sit. Nam ipsa nobis cum, earum rem atque?</p>
        </div>
        <div class="col-md-4">
            <i class="fa fa-users"></i>
            <h3>Leadership</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, vel ipsam veritatis officia, perspiciatis fugiat minima, molestiae quas suscipit ipsum similique reprehenderit sit. Nam ipsa nobis cum, earum rem atque?</p>

        </div>
        <div class="col-md-4">
            <i class="fa fa-black-tie"></i>
            <h3>Self-esteem</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, vel ipsam veritatis officia, perspiciatis fugiat minima, molestiae quas suscipit ipsum similique reprehenderit sit. Nam ipsa nobis cum, earum rem atque?</p>
        </div>
    </div>
</div>

<div class="index-projects text-center">
    <div class="container-fluid">
        <h1>Projects</h1>
        <div class="container-fluid projects-layouts ">

    <?php echo ListView::widget([
        'dataProvider' => $limitProvider,
        'summary' => false,
        'itemView' => '_limit'

    ]); ?>

</div>





    </div>
</div>

<div class="index-signup text-center">
    <?= Html::a('Inscriere', ['/users/users'], ['class'=>'btn btn-primary']) ?>
</div>