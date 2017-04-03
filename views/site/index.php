<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ListView;
$this->title = 'Rotaract';
?>
<div class="index-header">
    <div class="background"></div>
    <div class="header-content text-center">
        <h2>Hai să facem diferența!</h2>
        <div class="text-center line-height container"><h3>Clubul Rotaract Suceava Bucovina face parte din familia internațională a cluburilor Rotary unde vecini,
                <br> prieteni și liderii din fiecare domeniu își împart ideile și rezolvă probleme pentru a genera schimbare sustenabilă.</h3></div>
        <?= Html::a('Afla mai multe', ['/site/about'], ['class'=>'href btn btn-primary']) ?>
        <br>
    </div>
</div>

<div class="index-learning text-center">
    <div class="container">
        <h1>Cu ce ne ocupăm și ce poți învăța de la noi?</h1>
        <div class="col-md-4">
            <i class="fa fa-users"></i>
            <h3>Leadership</h3>
            <hr>
            <p>Suntem o platformă prin care membri și prietenii noști au acces la cele mai bune instrumente de dezvoltare personală și profesională. Acest lucru îl facem atât prin workshop-uri, seminare și conferințe, dar mai ales practic prin acțiuni și proiecte culturale, sociale sau umanitare.
            </p>

        </div>
        <div class="col-md-4">
            <i class="fa fa-handshake-o"></i>
            <h3>Proiecte</h3>
            <hr>
            <p>Proiectele realizate în serviciul comunității locale și internaționale reprezintă coloana vertebrală a organizației. Noi promovăm pacea și buna înțelegere la nivel mondial dar și rezolvarea unor probleme neglijate ale societății: ameliorarea vieții persoanelor cu dizabilități, campanii de ecologizare, acte caritabile sau programe educaționale.
            </p>
        </div>
        <div class="col-md-4">
            <i class="fa fa-sitemap"></i>
            <h3>Networking</h3>
            <hr>
            <p>Nu suntem singuri și tot ce vrem să facem iese mai bine dacă lucrăm împreună. Ne facem prieteni peste tot în țară și în lume, călătorim mai frumos și mai ieftin, putem apela la o rețea de profesioniști pentru proiectele noastre și ne conectăm cu alții care împărtășesc aceleași valori.</p>
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