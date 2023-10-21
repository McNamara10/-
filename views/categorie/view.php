<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $categories->id;
$this->params['breadcrumbs'][] = ['label' => 'Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


// Mostra il messaggio di conferma se presente
$successMessage = Yii::$app->session->getFlash('success');
if ($successMessage) {
    echo '<div class="alert alert-success">' . $successMessage . '</div>';
}

?>




<div class="admin-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $categories->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $categories->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $categories,
        'attributes' => [
            'id',
            'descrizione'
            
        ],
    ]) ?>

</div>