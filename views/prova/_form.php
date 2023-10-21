<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Prova $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="prova-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titolo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descrizione')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
