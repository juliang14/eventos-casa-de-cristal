/*AL CARGAR LA PAGINA*/
window.onload = function() {

    //INICIAR TABLAS JQUERY 
    generales.cargarDataTable();
    $(".inputDocumento").attr('maxlength','10');
    $('.inputDocumento').on('input', function () { 
      this.value = this.value.replace(/[^0-9]/g,'');
    });

    /* Habilitar maskmoney*/
    $(".valorNumerico").maskMoney();
    $(".valorNumerico").attr('maxlength','12');

}

/* FIN DE CARGAR PAGINA*/
var contador  = 0;

function menu(){

	var menu = document.getElementById('men'),
		Elemento = document.head.appendChild(document.createElement("style")),
        Elemento2 = document.head.appendChild(document.createElement("style"));

      if (menu.className == "men ocultar_menu") {

          menu.className = "men"
          Elemento.innerHTML = "#sliderbar{margin-top: 60%;}";
          Elemento2.innerHTML = ".men{margin-left: 0%;}";
      }
      else if (menu.className == "men") {

          menu.className = "men ocultar_menu"
          Elemento.innerHTML = "#sliderbar{margin-top: 0%;}";
          Elemento2.innerHTML = ".men{margin-left: -200%;}";
      }
};

function modal(){

  var fix = document.getElementById('tyc');

  if (fix.className == "fix ocultar") {

          fix.className = "fix"
      }
      else if (fix.className == "fix") {

          fix.className = "fix ocultar"
      }
};

function redirectPageController(page){

    if (page=='administradorPedidos'){
      location.href="?class=Pedidos&method=Index"
    }else if (page=='administradorInventarios'){
      location.href="?class=Inventarios&method=Index"
    }else{
      console.log('Pagina no configurada');
    }

  }
// CONTROL FORMULARIO GENIAL /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$('.formulario_genial').click(function(){
    var paso = $(this).attr('id');
    var id_control = $(this).attr('control-paso');
    var classPaso = $(this).attr('class');
    var datoSeleccionado = $(this).attr('data-seccion');

    if(id_control=1 && datoSeleccionado =="seleccionEvento"){
      $("#"+paso).removeClass();
      $("#"+datoSeleccionado).removeClass();
      if(classPaso=='fas fa-chevron-down formulario_genial'){
        $("#"+paso).addClass('fas fa-chevron-up formulario_genial');
        $("#"+datoSeleccionado).addClass('body-seccion');
      }else if(classPaso=='fas fa-chevron-up formulario_genial'){
        $("#"+paso).addClass('fas fa-chevron-down formulario_genial');
        $("#"+datoSeleccionado).addClass('body-seccion ocultar');
      }
    }else if(id_control=2 && datoSeleccionado =="seleccionPaquete" && contador > 0){
      $("#"+paso).removeClass();
      $("#"+datoSeleccionado).removeClass();
      if(classPaso=='fas fa-chevron-down formulario_genial'){
        $("#"+paso).addClass('fas fa-chevron-up formulario_genial');
        $("#"+datoSeleccionado).addClass('body-seccion');
      }else if(classPaso=='fas fa-chevron-up formulario_genial'){
        $("#"+paso).addClass('fas fa-chevron-down formulario_genial');
        $("#"+datoSeleccionado).addClass('body-seccion ocultar');
      }
    }else if(id_control=3 && datoSeleccionado =="seleccionUsuario" && contador > 1){
      $("#"+paso).removeClass();
      $("#"+datoSeleccionado).removeClass();
      if(classPaso=='fas fa-chevron-down formulario_genial'){
        $("#"+paso).addClass('fas fa-chevron-up formulario_genial');
        $("#"+datoSeleccionado).addClass('body-seccion');
      }else if(classPaso=='fas fa-chevron-up formulario_genial'){
        $("#"+paso).addClass('fas fa-chevron-down formulario_genial');
        $("#"+datoSeleccionado).addClass('body-seccion ocultar');
      }
    }
    
});

//Menu para seleccionar los paquetes segun tipo de evento
$('.seleccionarEvento').click(function(){
  var evento    = $(this).attr('evento'),
      idevento  = $(this).attr('idevento');

  $('.seleccionarEvento').removeClass('active');
  $('.seleccionarEvento').addClass('nav-item nav-link seleccionarEvento');
  $(this).removeClass();
  $(this).addClass('nav-item nav-link seleccionarEvento active');
  $('#valorEvento').val(evento);
  if(contador==0){
    contador = 1;
    $('#p2').click();
  }
  seleccionarPaquetes(idevento);
});

// Mostrar paquetes segun evento seleccionado
function seleccionarPaquetes(evento){
$('.contenedorPaquetes').removeClass('resaltar');
$('.contenCajaEvento').addClass('ocultar');
$('#'+evento).removeClass('ocultar');
//$('#valorPaqueteGenerar').attr('disabled', false);
$('#valorPaqueteGenerar').focus();
//$('#valorPaqueteGenerar').attr('disabled', true);
};

$('.contenedorPaquetes').click(function(){
  var idPaquete    = $(this).attr('id-paquete');

  $('.contenedorPaquetes').removeClass('resaltar');
  $(this).addClass('resaltar');
  $('#valorPaqueteGenerar').val(idPaquete);

  if(contador==1){
    contador = 2;
    $('#p3').click();
  }
  $('.contenCajaPedido').removeClass('ocultar');
  //$('#IdUsuarioGenerar').attr('disabled', false);
  $('#IdUsuarioGenerar').focus();
  //$('#IdUsuarioGenerar').attr('disabled', true);

});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//********************************************************************************************** */
function cerrarSesion(){
  location.href="?class=Security&method=closeSesion"
}

/* INICIO REDIRECCION BOTONES MENU INICIO ADMINISTRADOR */
$('#num-empleados').click(function(){
    window.location.href="?class=Empleado&method=Index";
});
$('#num-usuarios').click(function(){
    window.location.href="?class=Usuario&method=Index";
});
$('#num-pedidos').click(function(){
    window.location.href="?class=Pedidos&method=Index";
});
$('#inventario').click(function(){
    window.location.href="?class=Inventarios&method=Index";
});
$('#turno').click(function(){
    window.location.href="?class=IndexHome&method=administradorTurnos";
});
$('#num-Reportes').click(function(){
    window.location.href="?class=Reportes&method=Index";
});
$('#num-Paquetes').click(function(){
    window.location.href="?class=IndexHome&method=administradorPaquetes";
});
/* FIN REDIRECCION BOTONES MENU INICIO ADMINISTRADOR */

/* INICIO EJECUCION BOTON CON AJAX */
$('.btn-borrarUsuario').click(function(){

  var id_control = $(this).attr('data-control-user');

  $.ajax({
      type: 'GET',
      url : '?class=Usuario&method=deleteUsuario',
      data: { userId: id_control},
      success(response){
        $('.modal-body').html(response);
        $('#modalCenter').modal('show');
      }
  });

});

$('.btn-borrarEmpleado').click(function(){

  var id_control = $(this).attr('data-control-user');

  $.ajax({
      type: 'GET',
      url : '?class=empleado&method=deleteEmpleado',
      data: { userId: id_control},
      success(response){
        $('.modal-body').html(response);
        $('#modalCenter').modal('show');
      }
  });

});

// ACTUALIZAR PEDIDOS
$('.actualizacion_datos').click(function(){
    var actualizarDato = $('#actualizar_Estado_Pedido').val();
    var id_control = $(this).attr('data-control-user');
    //alert(actualizarDato);

     $.ajax({
        type: 'GET',
        url : '?class=Pedidos&method=updatePedido',
        data: { userId: id_control, userData: actualizarDato},
        success(response){
          $('.modal-body').html(response);
          $('#modalCenter').modal('show');
        }
      });
});
//ACTUALIZAR INVENTARIO
$('.actualizacion_inventario').click(function(){
  var inventario  = $('#VerInventario').val();
  var cantidad    = $('#Cantidad').val();
  var valorSinIva = $('#Valor_sin_iva').val();
  var categoria   = $('#Categoria').val();
  var id_control  = $(this).attr('data-control-user');
  //alert(actualizarDato);

   $.ajax({
      type: 'GET',
      url : '?class=Inventarios&method=updateInventario',
      data: { userId: id_control, inventario: inventario, cantidad: cantidad, valorSinIva: valorSinIva, categoria: categoria},
      success(response){
        $('.modal-body').html(response);
        $('#modalCenter').modal('show');
      }
    });
});
$('.btn-borrarinventario').click(function(){

  var id_control = $(this).attr('data-control-user');

  $.ajax({
      type: 'GET',
      url : '?class=Inventarios&method=deleteInventario',
      data: { userId: id_control},
      success(response){
        $('.modal-body').html(response);
        $('#modalCenter').modal('show');
      }
  });

});
/////////////////////////////////////


//Consultar usuario desde crear pedido
$('.formularioGenialBotonBuscar').click(function(){
    var tDocumento = $("#inputTipoDocumento").val();
    var documento = $("#inputBuscarCliente").val();
    var botonCrear   = `<button class="btn verde crearPedido" type="submit">Crear Pedido</button>`;

    if(tDocumento !='' && documento !=''){
      $.ajax({
        type: 'GET',
        url : '?class=Pedidos&method=getUsuario',
        data: { userTDocument: tDocumento, userDocument: documento},
        success(response){
          $('#responseGetUsuario').html();
          if(response.indexOf('No se encontraron') != 0){
            var datosRespuesta  = response.split('-'),
                IdUsuarioGenerar= datosRespuesta[0],
                nombreUsuario   = datosRespuesta[1],
                tDocumento      = datosRespuesta[2],
                documento       = datosRespuesta[3],
                textoRespuesta  = nombreUsuario+' con '+tDocumento+' '+documento;   
            $('#responseGetUsuario').html(textoRespuesta);
            $('#IdUsuarioGenerar').val(IdUsuarioGenerar);
            $('#personaPedido').removeClass('ocultar');
            $('#responseGetUsuario').removeClass('ocultar');
            $('#botonesMenuGenial').append(botonCrear);
          }else{
            $('#responseGetUsuario').html(response);
            $('#personaPedido').removeClass('ocultar');
            $('#responseGetUsuario').removeClass('ocultar');
          }
        }
      });
    }else{
      $('.modal-body').html('Verifica el campo tipo de documento y numero de documento.');
      $('#modalCenter').modal('show');
    }
});


/* FIN EJECUCION BOTON CON AJAX */


/*  INICIO CONSULTAS GENERALES*/
var generales = {

  validarEdad: function(){

    var edad = $('#Edad').val();

    if (edad >=18) {
      $('#botonCrearUsuario').attr('disabled', false);
    }else{
      $('#botonCrearUsuario').attr('disabled', true);
      alert('No eres mayor de edad, no es posible crear el usuario.');
    }
    
  },
  refrescarPagina: function(){
    location.reload();
  },
  cargarDataTable: function(){    
      //$('#table-Fac').DataTable();
      //$('#tabla-facturas').DataTable();
      $('.tabla-jquery').DataTable({
          "language":{
          "empyTable":  "<i>No hay datos disponibles en la tabla.</i>",
          "info":  "Del _START_ al _END_ de _TOTAL_ ",
          "infoEmpty": "Mostrando 0 registros de un total de 0.",
          "infoFiltered":  "(filtrados de un total de _MAX_ registros)",
          "infoPostFix":  "(actualizados)",
          "lengthMenu":  "Mostrar _MENU_ registros",
          "loadingRecords":  "Cargando...",
          "processing":  "Procesando...",
          "search":  "<span style='font-size:15px;'>Buscar:</span>",
          "searchPlaceholder":  "Dato para buscar",
          "zeroRecords":  "No se han encontrado registros",
          "paginate": { 
            "first":  "Primera",
            "last":  "Última",
            "next":  "Siguiente", 
            "previous":  "Anterior"
          },
          "aria":  {
            "sortAscending":  "Ordenación ascendente",
            "sortDescending":  "Ordenación descendente"
          }
        },
        "lengthMenu": [[5, 10, 20, 50],[5, 10, 20, 50,"Todos"]],
        "iDisplayLenght": 5,

      });
  }


}