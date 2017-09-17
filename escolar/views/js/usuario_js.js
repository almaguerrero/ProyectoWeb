
$(document).ready(function () {
    $('#alerta').hide();
    $('#formulario').submit(function (event) {
        event.preventDefault();
        if ($('#pwd').val() !== $('#pwd2').val()) {
            $('#alerta').show();
            $('#alerta').text('Las contraseñas no considen');
            $('#pwd').focus();
            return;
        }
        var ope = 'insert';
        var id_u = '';
        if ($('#id_user').length > 0) {
            if ($('#id_user').val() !== '') {
                ope = 'update';
                id_u = $('#id_user').val();

            }
        }
        $.ajax({
            type: "POST",
            url: "../usuarios/Cud_usuario.php",
            data: {nombre: $('#nombre').val(), apellido: $('#apellido').val(), carrera: $('#carrera').val(), correo: $('#correo').val(), 
            	proyectos_id: $('#proyectos_id').val(), date_registro: $('#date_registro'),  rol: $('#rol').val(), telefono: $('#telefono').val(), catalogo_user_id: $('#catalogo_user_id').val(),
            	pwd: $('#pwd').val(), nivel:$('#nivel').val(), operacion: ope, id_user: id_u}
        }).done(function (msg) {
            alert(msg);
            if (msg == 'Usuario Actualizado') {
                $.ajax({
                    url: "../usuarios/usuarios.php"
                }).done(function (html) {
                    $('#contenido').html(html);
                }).fail(function () {
                    alert('Error al cargar modulo');
                });
            } else {
                $('#alerta').hide();
                $('#nombre').val('');
                $('#apellido').val('');
                $('#carrera').val('');
                $('#correo').val('');
                $('#proyectos_id').val('');
                $('#date_registro').val('');
                $('#rol').val('');
                $('#telefono').val('');
                $('#catalogo_user_id').val('');
                $('#pwd').val('');
                $('#pwd2').val('');
            }
        }).fail(function () {
            alert("Error enviando los datos. Intente nuevamente");
        });
    });
});