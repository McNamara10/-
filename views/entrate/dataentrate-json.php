<?php
use yii\web\View;
$this->title = 'Tabella Dati';
//$this->registerJsFile('@web/js/entrate-data.js', ['position' => View::POS_READY]);
$this->registerJsFile(
    '@web/js/entrate-data.js',
    ['depends' => [\yii\web\JqueryAsset::class]]
);

/* Aggiungi una sezione JavaScript per elaborare i dati JSON
$this->registerJs(<<<JS
$(document).ready(function() {
    $.ajax({
        url: 'get-entrate', // Sostituisci con il percorso effettivo del tuo controller e azione
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var tabellaCorpo = $('#tabella-corpo');

            data.forEach(function(item) {
                var row = $('<tr>');
                row.append($('<td>').text(item.descrizione));
                row.append($('<td>').text(item.importo));
                tabellaCorpo.append(row);
            });
        },
        error: function(error) {
            console.error(error);
        }
    });
});
JS, View::POS_READY);*/
?>
<div id="app">
    <table>
        <thead>
            <tr>
                <th>Descrizione</th>
                <th>Importo</th>
            </tr>
        </thead>
        <tbody id="tabella-corpo">
            <!-- I dati saranno inseriti qui tramite JavaScript -->
        </tbody>
    </table>
</div>



