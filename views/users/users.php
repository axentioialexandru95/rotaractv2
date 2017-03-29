<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form ActiveForm */
?>
<div class="project-view-header text-center">
    <div class="text-center"><h1>Inscriere</h1></div>
</div>
<div class="users container">
    <h1 class="text-center">Vrei să te alături echiperi #Rotaract?</h1>
    <hr>
    <br>
    <br>
        <div class="row beneficii">
        <div class="col-md-6">
            <h3>Care sunt beneficiile?</h3>
            <p class="text-justify">Conectează-te cu lideri din comunitatea ta și din toată lumea pentru a acționa local și internațional prin proiecte pentru a genera o schimbare sustenabilă. Vei reuși să:</p>
            <ul>
                <li> îți dezvolți rețeaua profesională și să schimbi idei cu lideri din toate domeniile</li>
                <li> îți dezvolți abilitățile prin training de leadership</li>
                <li> economisești bani atunci când călătorești prin programe de beneficii Rotary</li>
                <li> te distrezi și să iți faci prieteni din țară și din lume</li>
                <li> te conectezi cu o comunitate globală și să participi la evenimente anuale deosebite</li>
            </ul>
        </div>
        <div class="col-md-6 register-image">
            <?= Html::img('images/right.jpeg') ?>
        </div>
        </div>
    <br>

    <div class="row">
    <div class="col-md-6 register-image-left">
        <?= Html::img('images/left.png') ?>
    </div>

    <div class="col-md-6 know">
        <h4>Uite ce trebuie să știi:</h4>
        <ol>
            <li>Clubul este destinat tinerilor între 18 și 30 de ani. Dacă ai sub 18 ani, verifică activitatea cluburilor Interact. Dacă ai peste 30, atunci Rotary este pentru tine.</li>
            <br>
            <li><ul id="ul-left">Procesul începe cu o perioadă de probă în care trebuie să:
                    <li>participi la minim 6 întâlniri și la 2 proiecte</li>
                    <li>propui un proiect, pe care să îl implementezi. Noi te vom ajuta în atingerea obiectivelor</li>
                </ul>
            </li>
            <br>
            <li>Dacă treci cu bine această etapă, membri existenți vor vota într-o ședință calitatea ta de membru</li>
            <br>
            <li>Odată ce se aprobă adeziunea, ai devenit membru și te înscriem în baza de date internațională și în cea națională. Plătești o taxă de adeziune și apoi lunar o cotizație modică, pentru administrarea clubului.</li>
        </ol>
    </div>
    </div>
    <br>
    <h3 class="text-center">Gata să trecem la fapte?<br>  <br></h3>
    <h4 class="text-center">Folosește formularul de înscriere de mai jos și te contactăm noi pentru a te invita la o ședință.</h4>
    <br>
</div><!-- users -->
<div class="container-fluid well-parallax">
    <div class="container">

        <div class="col-md-12 register-form well">

            <br><?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

            <div class="col-md-6"><?= $form->field($model, 'name') ?></div>
            <div class="col-md-6"><?= $form->field($model, 'surname') ?></div>
            <div class="col-md-6"><?= $form->field($model, 'phone') ?></div>
            <div class="col-md-6"><?= $form->field($model, 'email') ?></div>
            <div class="col-md-12"><?= $form->field($model, 'description')->textarea(['cols'=>8]) ?></div>
            <div class="col-md-12"><?= $form->field($model, 'reason')->textarea(['cols'=>8]) ?></div>
            <div class="col-md-4"><?= $form->field($model, 'cv_file')->fileInput() ?></div>
            <div class="col-md-4"><?= $form->field($model, 'image_file')->fileInput() ?></div>
            <div class="col-md-4"><?= Html::submitButton('Submit', ['class' => 'btn btn-primary submit-register']) ?></div>

            <?php ActiveForm::end(); ?>
        </div>
        <br>
    </div>
</div>