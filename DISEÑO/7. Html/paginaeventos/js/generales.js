
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
  location.href="../index.html"
}

$('#num-empleados').click(function(){
    window.location.href="../administrador/administrador_empleados.html";
});
$('#num-usuarios').click(function(){
    window.location.href="../administrador/administrador_usuarios.html";
});
$('#num-pedidos').click(function(){
    window.location.href="../administrador/administrador_pedidos.html";
});
$('#inventario').click(function(){
    window.location.href="../administrador/administrador_inventarios.html";
});
$('#turno').click(function(){
    window.location.href="../administrador/administrador_turnos.html";
});
$('#num-Reportes').click(function(){
    window.location.href="../administrador/administrador_reportes.html";
});
$('#num-Paquetes').click(function(){
    window.location.href="../administrador/administrador_paquetes.html";
});