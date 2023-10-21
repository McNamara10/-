<?php
use yii\web\View;
$this->title = 'Tabella Dati';
//$this->registerJsFile('@web/js/entrate-data.js', ['position' => View::POS_READY]);
$this->registerJsFile(
    '@web/js/entrate-data-grid.js',
    ['depends' => [\yii\web\JqueryAsset::class]]
);
?>