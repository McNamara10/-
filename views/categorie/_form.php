<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $model app\models\Categorie */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-form">
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descrizione')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>