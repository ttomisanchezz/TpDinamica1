$(function () {
  // Solo letras (con tildes y ñ)
  $.validator.addMethod("soloLetras", function (value, element) {
    return this.optional(element) || /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/.test(value.trim());
  }, "Solo se permiten letras");

  $("#formEj6").validate({
    rules: {
      nombre:    { required: true, minlength: 2, soloLetras: true },
      apellido:  { required: true, minlength: 2, soloLetras: true },
      edad:      { required: true, number: true, min: 1, max: 120 },
      direccion: { required: true, minlength: 5 },
      estudios:  { required: true },          // radios
      sexo:      { required: true },          // radios
      "deportes[]": { required: true }        // checkboxes (al menos uno)
    },
    messages: {
      nombre:    { required: "Ingresá tu nombre", minlength: "Mínimo 2 caracteres" },
      apellido:  { required: "Ingresá tu apellido", minlength: "Mínimo 2 caracteres" },
      edad:      { required: "Ingresá tu edad", number: "Número válido", min: "≥ 1", max: "≤ 120" },
      direccion: { required: "Ingresá tu dirección", minlength: "Demasiado corta" },
      estudios:  { required: "Seleccioná una opción" },
      sexo:      { required: "Seleccioná una opción" },
      "deportes[]": { required: "Elegí al menos un deporte" }
    },

    errorElement: "small",
    errorClass: "error-text",
    highlight: el => $(el).addClass("is-invalid"),
    unhighlight: el => $(el).removeClass("is-invalid"),
    errorPlacement: function (error, element) {
      if (element.attr("type") === "radio" || element.attr("type") === "checkbox") {
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
