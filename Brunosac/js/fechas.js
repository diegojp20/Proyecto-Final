function saludame() {
    let entrada = $('#entrada').val();
    let salida = $('#salida').val();
    var parametros = {
        "fechaEntrada": entrada,
        "fechaSalida": salida,

    };

    $.ajax({
        data: parametros,
        url: 'consulta.php',
        type: 'POST',

        beforesend: function () {
            $('#mostrarContenido').html("Mensaje antes de Enviar");
        },

        success: function (mensaje) {
            $('#mostrarContenido').html(mensaje);
        }
    });
}