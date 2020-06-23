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
    }else if(id_control=4 && datoSeleccionado =="seleccionFecha" && contador > 2){
      $("#"+paso).removeClass();
      $("#"+datoSeleccionado).removeClass();
      if(classPaso=='fas fa-chevron-down formulario_genial'){
        $("#"+paso).addClass('fas fa-chevron-up formulario_genial');
        $("#"+datoSeleccionado).addClass('body-seccion');
      }else if(classPaso=='fas fa-chevron-up formulario_genial'){
        $("#"+paso).addClass('fas fa-chevron-down formulario_genial');
        $("#"+datoSeleccionado).addClass('body-seccion ocultar');
      }
    }else if(id_control=5 && datoSeleccionado =="seleccionUbicacion" && contador > 3){
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

//Consultar usuario desde crear pedido
$('.formularioGenialBotonBuscar').click(function(){
  var tDocumento = $("#inputTipoDocumento").val();
  var documento = $("#inputBuscarCliente").val();
  
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
          seleccionarFechaEvento();
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

function seleccionarFechaEvento(){
  if(contador==2){
    contador = 3;
    $('#p4').click();
  }
  $('.contenCajaFecha').removeClass('ocultar');
  $('#inputFechaInicioEvento').focus();
}
$('.validacionFechas').blur(function(){
  var fechaInicio   = $('#inputFechaInicioEvento').val(),
      fechaFin      = $('#inputFechaFinEvento').val(),
      botonCrear    = `<button class="btn verde crearPedido" type="submit">Crear Pedido</button>`;

  if(fechaInicio.length >2 && fechaFin.length >2){
    if(contador==3){
      contador = 4;
      $('#p5').click();
    }
    $('.contenCajaUbicacion').removeClass('ocultar');
    $('#inputCiudadEvento').focus();
    $('#botonesMenuGenial').append(botonCrear);
  }
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
    window.location.href="?class=Turnos&method=Index";
});
$('#num-Reportes').click(function(){
    window.location.href="?class=Reportes&method=Index";
});
$('#num-Paquetes').click(function(){
    window.location.href="?class=Eventos&method=Index";
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
    var id_control = $(this).attr('data-control-user');
    var actualizarCiudad    = $('#inputCiudadEvento').val();
    var actualizarBarrio    = $('#inputBarrioEvento').val();
    var actualizarDireccion = $('#inputDireccionEvento').val();
    var actualizarDato      = $('#actualizar_Estado_Pedido').val();
    var actualizarFechaIni  = $('#inputFechaInicioEvento').val();
    var actualizarFechaFin  = $('#inputFechaFinEvento').val();
    //alert(actualizarDato);

     $.ajax({
        type: 'GET',
        url : '?class=Pedidos&method=updatePedido',
        data: { userId: id_control, userCiudad: actualizarCiudad, userBarrio: actualizarBarrio, userDireccion: actualizarDireccion, userData: actualizarDato, userDateIni: actualizarFechaIni, userDateFin: actualizarFechaFin},
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


/* FIN EJECUCION BOTON CON AJAX */

//-------------------------------- SECCION TURNOS -----------------------------------
$('.boton-desplegable').click(function(){
  var control = $(this).attr('control');
  if($('#'+control).hasClass("ocultar") == true){
    $(this).addClass('bordeInferior');
    $('#'+control).removeClass("ocultar");
  }else if($('#'+control).hasClass("ocultar") == false){
    $(this).removeClass('bordeInferior');
    $('#'+control).addClass("ocultar");
  }
});

//Consultar pedido para generar turno
$('#inputIdPedidoTurno').blur(function(){
  var Id_pedido     = $("#inputIdPedidoTurno").val();

  $('#fechasDelPedido').addClass('ocultar');
  $('#contenedorMensajeError').addClass('ocultar');
 
  if(Id_pedido !=''){
    $.ajax({
      type: 'GET',
      url : '?class=Turnos&method=getPedido',
      data: { userPedido: Id_pedido},
      success(response){
        if(response.indexOf('No se encontraron') != 0){
          var datosRespuesta  = response.split('_'),
              IdPedido        = datosRespuesta[0],
              Ciudad          = datosRespuesta[1],
              Barrio          = datosRespuesta[2],
              Direccion       = datosRespuesta[3],
              FechaInicio     = datosRespuesta[4],
              fechaFin        = datosRespuesta[5];

          $('#inputCiudadEvento').val(Ciudad);
          $('#inputBarrioEvento').val(Barrio);
          $('#inputDireccionEvento').val(Direccion);
          $('#inputFechaInicioEvento').val(FechaInicio);
          $('#inputFechaFinEvento').val(fechaFin);  
          $('#fechasDelPedido').removeClass('ocultar');
        }else{
          $('#inputFechaInicioEvento').val('');
          $('#mensajeError').val(response);
          $('#contenedorMensajeError').removeClass('ocultar');
          
        }
        generarBotonTurnos();
      }
    });
  }else{
    $('.modal-body').html('Verifica el campo id pedido.');
    $('#modalCenter').modal('show');
  }
});
//Consultar empleado para generar turno
$('#inputEmpleadoTurno').blur(function(){
    var tipoDocumento     = $("#inputTipoDocumento").val(),
        documentoEmpleado = $("#inputEmpleadoTurno").val();

  $('#contenedorMensaje').addClass('ocultar');
 
  if(tipoDocumento !='' && documentoEmpleado !=''){
    $.ajax({
      type: 'GET',
      url : '?class=Turnos&method=getEmpleado',
      data: { userTipoDocumento: tipoDocumento, userDocumento: documentoEmpleado},
      success(response){
        if(response.indexOf('No se encontraron') != 0){
          $('#mensaje').val('Empleado: '+response); 
          $('#contenedorMensaje').removeClass('ocultar');      
        }else{
          $('#mensaje').val(response);
          $('#contenedorMensaje').removeClass('ocultar');
        }
        generarBotonTurnos();
      }
    });
  }else{
    $('.modal-body').html('Verifica los campos Tipo documento y número documento.');
    $('#modalCenter').modal('show');
  }
});

function generarBotonTurnos(){
  var boton     = `<button class="btn verde" id="crearTurno" onClick="crearTurnoAdmin();"> Crear turno </button>`,
      pedido    = $('#inputFechaInicioEvento').val(),
      empleado  = $('#mensaje').val();

  $('#botonCrearTurno').html('');
  if(pedido.length > 5 && empleado.indexOf('No se encontraron') != 0 && empleado.length >5){
    $('#botonCrearTurno').html(boton);
  }
}

//CREAR turno
function crearTurnoAdmin(){
  console.log('respondiendo desde crear turno');
    var idPedido          = $("#inputIdPedidoTurno").val(),
        tipoDocumento     = $("#inputTipoDocumento").val(),
        documentoEmpleado = $("#inputEmpleadoTurno").val();
  console.log(idPedido+' '+tipoDocumento+' '+documentoEmpleado);
  if(idPedido!='' && tipoDocumento !='' && documentoEmpleado !=''){
    $.ajax({
      type: 'GET',
      url : '?class=Turnos&method=insertCrearTurno',
      data: { userIdPedido: idPedido, userTipoDocumento: tipoDocumento, userDocumento: documentoEmpleado},
      success: function (response) {
        $('.modal-body').html('Se creo el turno exitosamente.');
        $('.refrescarPagina').attr('onClick', "window.location.href='?class=turnos&method=index'");
        $('#modalCenter').modal('show');
        //console.log('Responde el ajax con Exito!!!');
        //console.log('rta:' + response);
      },
      error: function (response) {
          console.log('Responde el ajax con Error!!!');
          console.log(response);
      }
  });
  /**/

  }else{
    $('.modal-body').html('Verifica todos los campos del formulario.');
    $('#modalCenter').modal('show');
  }
};

// BORRAR TURNO
function borrarTurno(accion, id_empleado, id_turno){
  var id_control = $(this).attr('data-control-user'),
      botones=` <button type="button" class="btn btn-primary" onClick="borrarTurno(0,`+id_empleado+`,`+id_turno+`);">Borrar</button>
                <button type="button" class="btn btn-secondary accionEvento" data-dismiss="modal" onclick="">Cerrar</button>`,
      boton  =` <button type="button" class="btn btn-secondary accionEvento" data-dismiss="modal" onclick="">Cerrar</button>`;

  if(accion==1 && id_empleado > 0 && id_turno > 0){
    $('.modal-body').html('Estas seguro de que deseas quitar el empleado del turno.');
    $('.modal-footer').html(botones);
    $('#modalCenter').modal('show');
  }else if(accion ==0 && id_empleado > 0 && id_turno > 0){
    console.log('borrando usuario '+id_empleado+' del turno '+id_turno);
    $.ajax({
      type: 'GET',
      url : '?class=Turnos&method=borrarTurno',
      data: { userIdEmpleado: id_empleado, userIdTurno: id_turno},
      success(response){
        $('.modal-footer').html(boton);
        $('.accionEvento').attr('onClick','generales.refrescarPagina();');
        $('.modal-body').html(response);
        $('#modalCenter').modal('show');
      },
      error(){
        $('.modal-body').html('Error al eliminar el turno.');
        $('#modalCenter').modal('show');
      }
    });
    //$('.accionEvento').attr('onClick','generales.refrescarPagina();');
  }

};


//-----------------------------------------------------------------------------------

//------------------------- SECCION EVENTOS ----------------------------------------------

// BORRAR EVENTO
function borrarEvento(accion, nombreEvento){
  var botones=` <button type="button" class="btn btn-danger" onClick="borrarEvento(0,'`+nombreEvento+`');">Borrar</button>
                <button type="button" class="btn btn-secondary accionEvento" data-dismiss="modal" onclick="">Cerrar</button>`,
      boton  =` <button type="button" class="btn btn-secondary accionEvento" data-dismiss="modal" onclick="">Cerrar</button>`;
  if(accion==1 && nombreEvento !='' ){
    $('.modal-body').html('Estas seguro de que deseas eliminar el evento <b>'+nombreEvento+'</b>.');
    $('.modal-footer').html(botones);
    $('#modalCenter').modal('show');
  }else if(accion ==0 && nombreEvento !=''){
    console.log('borrando evento '+nombreEvento);
    $.ajax({
      type: 'POST',
      url : '?class=Eventos&method=delete_store',
      data: { nombreEvento: nombreEvento},
      success(response){
        $('.modal-footer').html(boton);
        $('.accionEvento').attr('onClick','generales.refrescarPagina();');
        $('.modal-body').html(response);
        $('#modalCenter').modal('show');
      },
      error(){
        $('.modal-body').html('Error al eliminar el turno.');
        $('#modalCenter').modal('show');
      }
    });
    //$('.accionEvento').attr('onClick','generales.refrescarPagina();');
  }

};

//-----------------------------------------------------------------------------------
/***************INICIO DATEPICKER **********************************/
$('.datepicker').datetimepicker({
    timepicker: true,
    datepicker: true,
    format: 'Y-m-d H:i:s', // formatTime
    //value: '2020-6-13 09:45:00', //defaultTime
    hours12: false, //false for 24 hours
    step:  30,
    yearStart: 2020,
    yearEnd: 2025//,
    //language: 'es'
});
/***************** FIN DATEPICKER **********************************/


/***************INICIO BOTON ESPARCIDO **********************************/
var animateButton = function(e) {
  e.preventDefault;
  //reset animation
  e.target.classList.remove('animate');
  e.target.classList.add('animate');
  setTimeout(function(){
    e.target.classList.remove('animate');
  },700);
};
var bubblyButtons = document.getElementsByClassName("bubbly-button");
for (var i = 0; i < bubblyButtons.length; i++) {
  bubblyButtons[i].addEventListener('click', animateButton, false);
}
/***************** FIN BOTON ESPARCIDO **********************************/


/*************************************************************************************************************************************** */
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