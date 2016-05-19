$(document).ready(function () {


});
$(document).on("click", ".modificarUsuario", function () {
    id=$(this).data("id");
    $("#nombre").val($(this).data('nombre'));
    $("#apellido").val($(this).data('apellido'));
    $("#email").val($(this).data('email'));
    $("#tipousuario_id").val($(this).data('tipousuario_id'));
    //---------------
    modificar(id);
});


$(document).on("click", ".modificarAsignatura", function () {
    id=$(this).data("id");
    $("#nombre").val($(this).data('nombre'));
    $("#valor").val($(this).data('valor'));
    //---------------
    modificar(id);
});

function modificar(id){
    $("#operacion").val('MODIFICA');
    $("#id").val(id);
    $('.usuarios_registrados').css({
        'display': 'none'
    });
    $('.aceptar').css({
        'display': 'none'
    });
    $('.modificar').show();
}


$(document).on("click", ".inscribirMaterias", function () {
    id=$(this).data("id");

    //---------------
    $('#materias').modal('show');
});

