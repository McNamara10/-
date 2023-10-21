<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
$this->title = 'Visualizza JSON';


// Aggiungi una sezione JavaScript per elaborare i dati JSON
$this->registerJs(<<<JS
    $(document).ready(function(){
        
        $.ajax({
            url: 'get-data' ,
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                alert('ciao');
                // Elabora i dati JSON
                var message = data.message;
                var timestamp = data.timestamp;

                // Visualizza i dati nella pagina
                $('#message').text('Messaggio: ' + message);
                $('#timestamp').text('Timestamp: ' + timestamp);
            },
            error: function(xhr, status, error) {
                console.error('Si è verificato un errore:', error);
            }
        });
    });
JS, View::POS_READY);
?>

<div id="message"></div>
<div id="timestamp"></div>