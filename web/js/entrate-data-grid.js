$(document).ready(function() {
    var gridId = 'entry-grid';
    var url = 'gridata'; // Assicurati di sostituire con il percorso corretto per l'azione nel tuo controller

    $.ajax({
        url: url,
        dataType: 'json',
        success: function(data) {
            // Popola la GridView con i dati JSON
            $('#' + gridId).yiiGridView({
                data: data,
            });
        }
    });
});