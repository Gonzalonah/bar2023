$(buscarDatos());

function buscarDatos(consulta){
    $.ajax({
        url: 'filtro.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta:consulta},
    })
    .done(function(respuesta){
        $("#root").html(respuesta);
    })
}

$(document).on('keyup','#consulta',function(){
    var valor=$(this).val();
    if(valor!=""){
        buscarDatos(valor);
    }else{
        buscarDatos();
    }
});