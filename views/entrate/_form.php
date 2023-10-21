<?php
use yii\web\View;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;

Pjax::begin([
    'id' => 'pjax-entrate-create',
    'enablePushState' => false,
]);
?>

<div class="admin-form">
    <?php $form = ActiveForm::begin(['id' => 'entrate-modal']); ?>

    <?= $form->field($model, 'descrizione')->textInput() ?>
    <?= $form->field($model, 'importo')->textInput() ?>
    <?= $form->field($model, 'data')->textInput() ?>
    <?= $form->field($model, 'fk_categorie')->dropDownList($categorieList) ?>

    <div class="form-group">
        <?= Html::submitButton('Salva', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

<?php




