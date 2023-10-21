<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Entrate';
$this->params['breadcrumbs'][] = $this->title;

$gridViewId = 'entry-grid';

$ajaxUrl = Url::to(['get-datagrid']);

$js = <<< JS
   // Function to load data via AJAX
   function loadData() {
       $.ajax({
           url: '$ajaxUrl',
           type: 'GET',
           success: function(data) {
               $('#$gridViewId').yiiGridView('update', {
                   data: data
               });
           }
       });
   }

   // Reload the GridView via AJAX when the page loads
   $(document).ready(function() {
       loadData();
   });

   // Reload the GridView via AJAX when a button is clicked (for example)
   $('#reload-button').on('click', function(event) {
       loadData();
   });
JS;

$this->registerJs($js);

?>

<h1><?= Html::encode($this->title) ?></h1>

<?= GridView::widget([
    'id' => $gridViewId,
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'descrizione',
        'importo',
        // altre colonne, se necessario
    ],
]); ?>

<button id="reload-button" class="btn btn-primary">Reload GridView via AJAX</button>