<?php 
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\web\View;

$this->title = 'Entrate';
?>
Caricamento Dati con Gridview
<?= $this->render('_gridview', [
        'dataProvider' => $dataProvider,
    ]) ?>


Caricamento Dati Manuale su Tabella
<div style="padding-left: 0px;padding-right: 0px;" class="col-md-12">
                  <div class="table-responsive">
                      <table class="table table-bordered">
                          <thead>
                          <tr>
                              <th>Descrizione</th>
                              <th>Importo</th>
                              <th>Data</th>
                           
                          </tr>
                          </thead>
                          <tbody>
                        
                          <?php foreach ($dataProvider->getModels() as $key ) { ?>
                              <tr>
                                  <td><?php echo $key['descrizione'] ?></td>
                                  <td><?php echo $key['importo'] ?></td>
                                  <td><?php echo $key['data'] ?></td>
                                  

                              </tr>
                          <?php } ?>
                          </tbody>
                      </table>
                  </div><!--table-- responsive-->

                 
              </div>
<?php
echo Html::button('Aggiorna GridView', ['id' => 'refresh-button', 'class' => 'btn btn-primary']);
echo Html::a('Aggiungi Entrata', ['entrate/create'], ['class' => 'btn btn-primary', 'id' => 'open-entrate-modal']);

$script = <<< JS
$(document).ready(function() {
   
    $.ajax({
        url: 'load-data', // Sostituisci "controller-name" con il nome del tuo controller
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            $('#gridview-id').html(data);
            console.log("si ajax all'avvio");
        }
    });

    $('#refresh-button').click(function () {
    $.ajax({
        url: 'load-data', 
        type: 'GET',
        dataType: 'html', 
        success: function(data) {
            $('#gridview-id').html(data);
            console.log("si ajax al button");
        }
    });
});

});

JS;
$this->registerJs($script);

