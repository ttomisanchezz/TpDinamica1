$(function () {
  // Regla opcional: total semanal > 0 (para evitar enviar todo en 0)
  $.validator.addMethod("totalSemanaPositivo", function (value, element) {
    // Sumamos todos los inputs de clase .horas-dia
    let total = 0;
    $(".horas-dia").each(function () {
      const v = $(this).val();
      if (v !== "") total += parseFloat(v);
    });
    // Si el campo actual es opcional, this.optional(element) devuelve true
    // Nosotros queremos que el total sea > 0
    return total > 0;
  }, "Cargá al menos alguna hora en la semana");

  $("#formHoras").validate({
    // Asignamos las mismas reglas a todos los inputs con la clase .horas-dia
    rules: {
      lunes:     { required: true, number: true, min: 0, max: 24 },
      martes:    { required: true, number: true, min: 0, max: 24 },
      miercoles: { required: true, number: true, min: 0, max: 24 },
      jueves:    { required: true, number: true, min: 0, max: 24 },
      viernes:   { required: true, number: true, min: 0, max: 24 },
      // La regla de total corre sobre cualquiera (elegimos viernes)
      // para no repetir mensajes. Se evalúa al enviar.
      viernes_total: { totalSemanaPositivo: true }
    },
    messages: {
      lunes:     { required: "Completá lunes", min: "No puede ser negativo", max: "Máximo 24" },
      martes:    { required: "Completá martes", min: "No puede ser negativo", max: "Máximo 24" },
      miercoles: { required: "Completá miércoles", min: "No puede ser negativo", max: "Máximo 24" },
      jueves:    { required: "Completá jueves", min: "No puede ser negativo", max: "Máximo 24" },
      viernes:   { required: "Completá viernes", min: "No puede ser negativo", max: "Máximo 24" }
    },

    // Estilos/ubicación de errores
    errorElement: "small",
    errorClass: "error-text",
    highlight: (el) => $(el).addClass("is-invalid"),
    unhighlight: (el) => $(el).removeClass("is-invalid"),
    errorPlacement: function (error, element) {
      error.insertAfter(element);
    },

    // Truco: ejecutar la regla "totalSemanaPositivo" al enviar
    // agregando un campo virtual
    invalidHandler: function () {},
    submitHandler: function (form) {
      // Forzamos la verificación del total
      if (!$("#formHoras").valid()) return;
      // OK → enviar a PHP
      form.submit();
    }
  });

  // Disparar re-validación del total al cambiar cualquier día
  $(".horas-dia").on("input change", function () {
    $("#formHoras").valid();
  });
});
