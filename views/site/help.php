<?php

use yii\helpers\Html;


$this->title = 'Vrei sa ajuti?';


?>

<div class="help-header">
    <h1 class="text-center">Vrei sa ajuti?</h1>
</div>

<div class="help-methods">
    <div class="container-flex text-center">
          <div class="col-md-4">
            <h3><i class="fa fa-black-tie"> Esti salariat?</i></h3>
            <hr>
            <p class="text-left">Și tu poți ajuta prin redirecționarea unei părticele din impozitul pe care îl plătești către noi. Mai exact, depui la ANAF o cerere privind destinația sumei reprezentând până 2% din impozitul anual. Nu te costă nimic! Și ca să facem lucrurile cât mai ușoare, am completat noi formularul 230 cu datele asociației. Trebuie doar completat și semnat de tine. Dacă nu ai timp să mergi la ANAF, trimite-o nouă prin poștă sau personal printr-un membru și o ducem noi.</p>
            <?= Html::a('Download',['site/download'], ['class'=> 'btn btn-primary']);?>
        </div>
        <div class="col-md-4">
            <h3><i class="fa fa-building"> Ai o firmă?</i></h3>
            <hr>
            <p class="text-left">Este foarte simplu, poți să beneficiezi de facilitățile din codul fiscal și legea sponsorizării. Dacă ne ajuți cu o sponsorizare, legea îți permite să obții credit fiscal, adică să reduci impozitul pe profit de plată cu cât ne-ai ajutat. Trebuie doar să ții cont de câteva limite atunci când bugetezi sponsorizările pe un an (minimul dintre):
- 20% din impozitul pe profit de plată
- 0,5% din cifra de afaceri
<br>Astfel, în loc să plătești o bucățică din impozit statului, o faci direct în contul nostru și ne susții în ce ne-am propus!
<br>Ca să facem lucrurile mai simple, am pregătit mai jos un formular pe care îl completezi și generezi automat contractul de sponsorizare de care ai nevoie la contabilitate. Faci un print, ne trimiți și nouă pe email o copie cu semnătura ta si asta e tot.</p>
            <button class="btn btn-primary">Completeaza formularul</button>
        </div>
        <div class="col-md-4 last">
            <h3><i class="fa fa-user"> Obții venituri din activități independente?</i></h3>
            <hr>
            <p class="text-left">Când completezi declarație 200, pe care oricum trebuie să o depui, include datele asociației noastre și 2% din impozitul va merge către noi. Ai datele mai jos:
Denumire entitate nonprofit: ASOCIATIA ROTARACT CLUB SUCEAVA BUCOVINA
Cod de identificare fiscală: 33026414
Cont bancar (IBAN): RO34UGBI0000332009221RON</p>
            
       </div>
    </div>
    <div class="container other-methods text-center">
        <h3><i class="fa fa-percent"> Ajută-ne altfel!</i></h3>
        <hr>
        <p class="text-left">Mai sunt moduri în care poți să contribui la proiectele și activitățile noastre. Ai o jucărie veche? Noi putem să-i găsim o nouă casă. Niște haine sau cărți de care nu mai ai nevoie? Vom găsi noi cineva care are nevoie și va aprecia gestul. Ai o idee despre un proiect benefic pentru comunitatea locală? O așteptăm cu drag.</p>
        
    </div>
</div>
<hr>