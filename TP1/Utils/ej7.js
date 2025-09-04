$(function () {
  $("#formEj7").validate({
    rules: {
      operando1: { required: true, number: true },
      operando2: { required: true, number: true },
      instruccion: { required: true }
    },
    messages: {
      operando1: {
        required: "Ingresá el primer número",
        number: "Debe ser un número válido"
      },
      operando2: {
        required: "Ingresá el segundo número",
        number: "Debe ser un número válido"
      },
      instruccion: {
        required: "Seleccioná una operación"
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
