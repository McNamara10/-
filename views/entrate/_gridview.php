<?php
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\web\View;
echo GridView::widget([
    'id'=> 'gridview-id',
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'descrizione',
        'importo',
        'data',
        'fk_categorie'
        // Altri campi se necessario
    ],
]);