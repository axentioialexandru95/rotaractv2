<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;



AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/favicon.png?=v2" type="image/x-icon" />
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
                ['label' => 'Logout',
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
                <?php
                $dirname = "parteneri/";
                $images = glob($dirname."*.png");

                foreach($images as $image) {
                    echo '<img src="'.$image.'" class="resized"/>';
                }
                ?>
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
            <p class="text-justify">
                Rotaract Suceava Bucovina este în primul rând un club de prietenie, o organizație destinată tinerilor din Suceava concentrată pe dezvoltarea calităților de lider și pe servicii aduse comunității locale. </p>
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
