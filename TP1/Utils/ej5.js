$(function () {
  // Método custom: solo letras
  $.validator.addMethod("soloLetras", function (value, element) {
    return this.optional(element) || /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/.test(value.trim());
  }, "Solo se permiten letras");

  $("#formEj5").validate({
    rules: {
      nombre: { required: true, minlength: 2, soloLetras: true },
      apellido: { required: true, minlength: 2, soloLetras: true },
      edad: { required: true, number: true, min: 1, max: 120 },
      direccion: { required: true, minlength: 5 },
      estudios: { required: true },
      sexo: { required: true }
    },
    messages: {
      nombre: {
        required: "Ingresá tu nombre",
        minlength: "Mínimo 2 caracteres"
      },
      apellido: {
        required: "Ingresá tu apellido",
        minlength: "Mínimo 2 caracteres"
      },
      edad: {
        required: "Ingresá tu edad",
        number: "Debe ser un número válido",
        min: "La edad mínima es 1",
        max: "La edad máxima es 120"
      },
      direccion: {
        required: "Ingresá tu dirección",
        minlength: "Demasiado corta"
      },
      estudios: { required: "Seleccioná una opción" },
      sexo: { required: "Seleccioná una opción" }
    },
    errorElement: "small",
    errorClass: "error-text",
    highlight: el => $(el).addClass("is-invalid"),
    unhighlight: el => $(el).removeClass("is-invalid"),
    errorPlacement: function (error, element) {
      if (element.attr("type") === "radio") {
        error.appendTo(element.closest("fieldset"));
      } else {
        error.insertAfter(element);
      }
    },
    submitHandler: function (form) {
      form.submit();
    }
  });
});
