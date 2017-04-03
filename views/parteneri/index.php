<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ParteneriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parteneri';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="bg-projects">
        <div class="background-projects">
            <h1><?= Html::encode($this->title) ?></h1>
            <div class="projects-index text-center">
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?= Html::a('Create Parteneri', ['create'], ['class' => 'btn btn-success']) ?>
                </p>
                <div class="table-responsive projects-admin-body">
                    <?php Pjax::begin(); ?>    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'name',
                            'image',
                            'body:ntext',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>

                    <?php Pjax::end(); ?>
                </div>
            </div>
        </div>
    </div>
