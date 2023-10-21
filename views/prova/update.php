<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Prova $model */

$this->title = 'Update Prova: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Provas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prova-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
