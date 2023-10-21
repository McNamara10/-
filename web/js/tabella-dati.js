$(document).ready(function() {
    $.ajax({
        url: '', // Sostituisci con il percorso effettivo del tuo controller e azione
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