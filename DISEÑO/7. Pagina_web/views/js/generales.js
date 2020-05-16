window.onload = function() {

    //INICIAR TABLAS JQUERY 
    generales.cargarDataTable();
      
    }


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


function cerrarSesion(){
  location.href="?class=IndexHome&method=index"
}

$('#num-empleados').click(function(){
    window.location.href="?class=IndexHome&method=administradorEmpleados";
});
$('#num-usuarios').click(function(){
    window.location.href="?class=IndexHome&method=administradorUsuarios";
});
$('#num-pedidos').click(function(){
    window.location.href="?class=IndexHome&method=administradorPedidos";
});
$('#inventario').click(function(){
    window.location.href="?class=IndexHome&method=administradorInventarios";
});
$('#turno').click(function(){
    window.location.href="?class=IndexHome&method=administradorTurnos";
});
$('#num-Reportes').click(function(){
    window.location.href="?class=IndexHome&method=administradorReportes";
});
$('#num-Paquetes').click(function(){
    window.location.href="?class=IndexHome&method=administradorPaquetes";
});


var generales = {

  cargarDataTable: function(){    
      //$('#table-Fac').DataTable();
      //$('#tabla-facturas').DataTable();
      $('#tabla_clientes').DataTable({
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