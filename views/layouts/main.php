<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap animsition">

    <?php
    
    NavBar::begin([
        'brandLabel' => Html::img('images/logo2.png'),
        'brandUrl' => Yii::$app->homeUrl,
        'innerContainerOptions' => ['class' => 'container-fluid'],
        'options' => [
            'class' => 'navbar-inverse navbar-fluid navbar-fixed-top',
        ],
    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Acasa', 'url' => ['/site/index']],
            ['label' => 'Despre Noi', 'url' => ['/site/about']],
            ['label' => 'Proiecte', 'url' => ['/blog/index']],
            ['label' => 'Membri', 'url' => ['/people/index']],
            ['label' => 'Inscriere', 'url' => ['/users/users']],
            ['label' => 'Vrei sa ajuti?', 'url' => ['/site/help']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ?
                ['label' => '', 'url' => ['/site/login'],'options'=>['class'=>'login-muted']] :
                ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']],
        ],

    ]);

    NavBar::end();
    ?>

    <div class="container-fluid">
        <?= $content ?>
        <div class="container">
            <h1 class="text-center">Parteneri</h1>
            <div class="partners">
                <img src="images/partner1.png" alt="partner-name" class="resized">
                <img src="images/partner2.png" alt="partner-name" class="resized">
                <img src="images/partner3.png" alt="partner-name" class="resized">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid footer-details text-center">
        <div class="col-md-4">
            <img src="images/logo.png" alt="partner-name" class="resized">
        </div>
        <div class="col-md-4">
            <h3 class="text-center">Despre</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, obcaecati, officia. Minima natus sapiente saepe velit debitis, qui, explicabo nobis temporibus numquam alias, nesciunt fugiat. Eius labore blanditiis quidem vel.</p>
        </div>
        <div class="col-md-4">
            <h3>Social</h3>
            <hr>
            <a href="https://www.facebook.com/rotaractsuceava/" target="_blank"><i class="fa fa-facebook"></i></a>
        </div>
    </div>
<a href="#" class="go-top"> <i class="fa fa-arrow-up"></i></a>
<footer class="footer">
    
    <div class="container">
        <p class="text-center">&copy; The Mojo Studio SRL <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
