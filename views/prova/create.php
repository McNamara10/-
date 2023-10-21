<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Prova $model */

$this->title = 'Create Prova';
$this->params['breadcrumbs'][] = ['label' => 'Provas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prova-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
