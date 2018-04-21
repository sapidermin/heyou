$(document).ready(function() {
    $.ajax({
        url: 'load_data.php',
        type: 'get',
        dataType: 'json',
        processData: false,
        success: function( data, textStatus, jQxhr ){
            $.each(data, function(index, item) {
                $(".card-columns.result").append('<div class="card item"><figure class="img-wrap"><img class="card-img-top" data-toggle="modal" data-target="#detailModal" src="./files/img/'+item[3]+'" alt="Card image top" /></figure><div class="card-body"><span class="label">'+item[0]+'</span><h4 class="card-subtitle">'+item[2]+'</h4></div></div>');
            });
        },
        error: function( jqXhr, textStatus, errorThrown ){
            console.log( errorThrown );
        }
    });
});