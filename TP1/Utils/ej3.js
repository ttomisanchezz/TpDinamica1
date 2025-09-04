$(function () {
  // Método custom para letras
  $.validator.addMethod("soloLetras", function(value, element) {
    return this.optional(element) || /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/.test(value);
  }, "Solo se permiten letras");

  $("#formPersona").validate({
    rules: {
      nombre: { required: true, minlength: 2, soloLetras: true },
      apellido: { required: true, minlength: 2, soloLetras: true },
      edad: { required: true, number: true, min: 1, max: 120 },
      direccion: { required: true, minlength: 5 }
    },
    messages: {
      nombre: {
        required: "Ingresá tu nombre",
        minlength: "Debe tener al menos 2 caracteres"
      },
      apellido: {
        required: "Ingresá tu apellido",
        minlength: "Debe tener al menos 2 caracteres"
      },
      edad: {
        required: "Ingresá tu edad",
        min: "La edad mínima es 1",
        max: "La edad máxima es 120"
      },
      direccion: {
        required: "Ingresá tu dirección",
        minlength: "La dirección es muy corta"
      }
    },
    errorElement: "small",
    errorClass: "error-text",
    highlight: el => $(el).addClass("is-invalid"),
    unhighlight: el => $(el).removeClass("is-invalid"),
    errorPlacement: function (error, element) {
      error.insertAfter(element);
    },
    submitHandler: function (form) {
      form.submit();
    }
  });
});
