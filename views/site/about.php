<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Despre Noi';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="about-header">
    <div class="background"></div>
    <div class="header-text text-center">
        <h1>Despre noi</h1>
    </div>
</div>

<div class="container ">
    <div class="about-text row">
        <div class="col-md-6 text-positioning">
        <h1>Cine suntem?</h1>
        <p class="text-justify">Rotaract Suceava Bucovina este în primul rând un club de prietenie, o organizație destinată tinerilor din Suceava concentrată pe dezvoltarea calităților de lider și pe servicii aduse comunității locale. br Clubul a fost fondat în anul 2001 iar misiunea noastră este să atragem pe viitorii lideri și împreună să adresăm diferite nevoi materiale sau sociale ale comunității.
        <br><br> Ne întâlnim în fiecare joi la o ședință unde ne cunoaștem mai bine și discutăm idei de proiecte, participăm la diverse evenimente și activități. Chiar dacă acționăm local, nu suntem singuri ci suntem afiliați la familia internațională Rotary. Fiecare club Rotaract din lume are un club Rotary sponsor. Al nostru este Rotary Suceava Bucovina. http://www.rotarysuceava.ro/ De asemenea, facem parte dintr-o organizație regională: Districtul 2241 care reunește toate cluburile din România și Republica Moldova. rotaract.ro
        </p>
        </div>
        <div class="col-md-6 text-positioning">
            <?= Html::img('images/1.jpg', ['class' => 'image-resized']) ?>
        </div>
    </div>
    <div class="about-text row">
        <div class="col-md-6 text-positioning hidden-sm hidden-xs">
            <?= Html::img('images/1.jpg', ['class' => 'image-resized']) ?>
        </div>
        <div class="col-md-6 text-positioning text-center">
            <h1>Despre Cluburile Rotaract și Districtul 2241?</h1>
            <p class="text-justify">Rotaract a început în 1968 ca un proiect al Rotary Internațional în Charlotte, Carolina de Nord dar s-a dezvoltat într-un organizație importantă cu peste 9.500 de cluburi în toată lumea și aproape 300.000 membri.
                <br> Denumirea vine de la „Rotary in Action” și reflectă misiunea organizației: de a oferi oportunitatea tinerilor profesioniști să își dezvolte abilitățile, să adreseze diferite nevoi ale societății și să promoveze relații de bună înțelegere între tineri din toate țările printr-o rețea globală de prietenie.
                <br> Fiecare club decide cum se administrează, cum își organizează activitățile și cum se finanțează
                <br> Structura de conducere a cluburilor includ de regulă un președinte, un secretar și un trezorier, funcții care se schimbă anual prin rotație. Vrei să afli mai mult descarca Rotaract Handbook aici:
            </p>
            <?= Html::a('Descarca Rotaract Handbook', ['site/handbook'], ['class' => 'btn btn-primary download-button ']) ?>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <h1>Despre Rotary Internațional</h1>
            <p class="text-justify">
                Rotary Internațional este o comunitate globală de profesioniști din toate domeniile care lucrează pentru a deservi comunitatea și pentru a promova pacea și rezolvarea unor probleme globale. Are mai mult de 1.2 milioane de membri în peste 35.000 cluburi care și-au propus să promoveze pacea în lume, să lupte împotriva sărăciei, a bolilor să promoveze educația și creșterea calității vieții celor defavorizați.
            </p>
            <p>Pentru a testa dacă o activitate ajută obiectivele Rotary și este în spiritul organizației, ne putem ghida după testul celor 4 că, care consideră următoarele întrebări:
            </p>
            <ul>
                <li>Este adevărat?</li>
                <li>Este corect pentru toți cei implicați?</li>
                <li>Va construi bunăvoință și prietenie?</li>
                <li>Va fi în beneficiul tuturor celor implicați?</li>
            </ul>
            <p>Dacă ideile pe care vreți să le implementați trec acest test cu răspunsuri afirmative, atunci Rotary este organizația potrivită pentru voi.</p>
            <div class="text-center">
                <h3 id="blockquote">Service Above Self</h3>
            </div>
        </div>
    </div>

</div>
<div class="about-members text-center">
    <?= Html::a('Membri', ['/people/index'], ['class'=>'btn btn-primary']) ?>
</div>
