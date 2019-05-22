$('.delete').click(function() {
    var button = document.getElementById('suppr');

    $.ajax({
        type: 'POST',
        url: 'public/ajax/avis.php',
        data: { 'idAvis': button.dataset.idAvis },
        dataType: 'JSON',
        success: function(data) {
            alert('Avis supprimé !');
            window.location.reload();
        }
    });
});