$(function () {
  $("#formEj8").validate({
    rules: {
      edad: { required: true, number: true, min: 0, max: 120 },
      estudios: { required: true }
    },
    messages: {
      edad: {
        required: "Ingresá tu edad",
        number: "Debe ser un número válido",
        min: "La edad no puede ser negativa",
        max: "La edad máxima permitida es 120"
      },
      estudios: {
        required: "Seleccioná una opción"
      }
    },
    errorElement: "small",
    errorClass: "error-text",
    highlight: el => $(el).addClass("is-invalid"),
    unhighlight: el => $(el).removeClass("is-invalid"),
    errorPlacement: function (error, element) {
      if (element.attr("type") === "radio") {
        error.appendTo(element.closest("form"));
      } else {
        error.insertAfter(element);
      }
    },
    submitHandler: function (form) {
      form.submit();
    }
  });
});
