<script>
document.getElementById("BtnAgregar").addEventListener("click", function() {
  modoFormulario('Agregar');
});
document.getElementById("BtnModificar").addEventListener("click", function() {
  modoFormulario('Modificar');
});
document.getElementById("BtnAceptar").addEventListener("click", function() {
  var descripcion = document.getElementById("DescripcionForm").value;
  var stock = document.getElementById("StockForm").value;
  if (descripcion === "" || stock === "")
  {
    alert("Por favor llene la descripción de producto y el stock muchas gracias jeje");
  } else {
    let vec = beforeEnviar();
    request = $.ajax({
      url: "<?php echo URL; ?>producto/agregarModificarElemento/Productos",
      type: "post",
      data: "data=" + JSON.stringify(vec),
    });
    request.done(function (respuesta){
      afterEnviar();
    });

  }
});
document.getElementById("BtnEliminar").addEventListener("click", function() {
  var r = confirm("Estás muy recontra segurísima/o que querés borrar este producto?");
  if (r == true) {
    request = $.ajax({
      url: "<?php echo URL; ?>producto/eliminarElemento/Productos",
      type: "post",
      data: "data=" + document.getElementById("idProductos").innerHTML,
    });
    request.done(function (respuesta){
      eliminarError(respuesta);
    });
  }
});
$('#Tabla').on('click-row.bs.table', function (row, $element, field) {
  $('.success').removeClass('success');
  $(field).addClass('success');
  var request = $.ajax({
    url: "<?php echo URL; ?>producto/traerElemento/Productos",
    type: "post",
    data: "data=" + $element.idProductos,
  });
  request.done(function (respuesta){
    clickFila(JSON.parse(respuesta)[0]);
  });
});
var request = $.ajax({
  url: "<?php echo URL; ?>producto/listadoDropdowns",
  type: "post"
});
request.done(function (respuesta){
  llenarDropdowns(JSON.parse(respuesta));
});
</script>
