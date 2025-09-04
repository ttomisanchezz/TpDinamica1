$(document).ready(function() {

    // Validación personalizada de contraseña segura
    $.validator.addMethod("contrasenaSegura", function(value, element) {
        const usuario = $("#usuario").val();
        const tieneLetras = /[a-zA-Z]/.test(value);
        const tieneNumeros = /\d/.test(value);
        const longitudOK = value.length >= 8;
        const distintoUsuario = value !== usuario;

        return this.optional(element) || (tieneLetras && tieneNumeros && longitudOK && distintoUsuario);
    }, "La contraseña debe tener al menos 8 caracteres, contener letras y números, y no ser igual al usuario.");

    // Configuración del validador
    $("#formLogin").validate({
        rules: {
            usuario: { required: true },
            contrasena: { required: true, contrasenaSegura: true }
        },
        messages: {
            usuario: { required: "Ingrese su usuario" },
            contrasena: { required: "Ingrese su contraseña" }
        },
        errorElement: "small",
        errorClass: "error-text",
        highlight: function(element) { $(element).addClass("is-invalid"); },
        unhighlight: function(element) { $(element).removeClass("is-invalid"); },
        errorPlacement: function(error, element) { error.insertAfter(element); },
        submitHandler: function(form) { form.submit(); }
    });

});
