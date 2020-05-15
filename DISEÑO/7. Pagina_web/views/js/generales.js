
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