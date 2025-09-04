// TP1/EJ1/funciones/libreria.js
$(document).ready(function () {
  $("#registroForm").validate({
    // Reglas de validación (clave = name del input)
    rules: {
      numero: {
        required: true,
        digits: true   // solo 0-9 (sin signos ni decimales)
      }
    },

    // Mensajes personalizados
    messages: {
      numero: {
        required: "Este campo es obligatorio",
        digits: "Solo se aceptan números enteros positivos (0-9)"
      }
    },

    // Opcional: estética y ubicación del error
    errorElement: "small",
    errorClass: "error-text",
    highlight: function (el) { $(el).addClass("is-invalid"); },
    unhighlight: function (el) { $(el).removeClass("is-invalid"); },
    errorPlacement: function (error, element) {
      error.insertAfter(element); // coloca el error debajo del campo
    },

    // Si todo valida OK, recién enviamos el form
    submitHandler: function (form) {
      form.submit();
    }
  });
});
