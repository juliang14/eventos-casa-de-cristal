<?php

/**
 * 
 */
class IndexHomeController extends indexConection{
	//Pagina de inicio
	public function index(){
		require_once('views/index.php');
	}
	//Pagina acerca de nosotros
	public function acercaDeNosotros(){
		require_once('views/inicio/acerca_de_nosotros.php');
	}
	//Pagina de contactos
	public function contactos(){
		require_once('views/inicio/contactos.php');
	}
	//Pagina de eventos
	public function eventos(){
		require_once('views/inicio/eventos.php');
	}
	//Pagina de formulario de registro
	public function formularioRegistro(){
		require_once('views/inicio/formulario_registro.php');
	}
	//Pagina de login administrador
	public function loginAdministrador(){
		require_once('views/inicio/login_administrador.php');
	}
	//Pagina de login empleados
	public function loginEmpleados(){
		require_once('views/inicio/login_empleados.php');
	}
	//Pagina de login usuario
	public function loginUsuario(){
		require_once('views/inicio/login_usuario.php');
	}
	//Pagina de paquetes matrimonio
	public function paquetesMatrimonio(){
		require_once('views/inicio/paquetes_matrimonio.php');
	}
	//Pagina de registro exitoso
	public function registroExitoso(){
		require_once('views/inicio/registro_exitoso.php');
	}
	//Pagina de restablecer contraseña
	public function restablecerContrasena(){
		require_once('views/inicio/restablecer_contraseña.php');
	}

	// *******************  SECCION USUARIOS  **********************************************//

	//Pagina inicio usuario
	public function usuario(){
		require_once('views/usuarios/usuario.php');
	}
	//Pagina usuario acerca de nosotros
	public function usuarioAcercaDeNosotros(){
		require_once('views/usuarios/usuario_acerca_de_nosotros.php');
	}
	//Pagina usuario carrito de compras
	public function usuarioCarritoDeCompras(){
		require_once('views/usuarios/usuario_carrito_de_compras.php');
	}
	//Pagina usuario contactos
	public function usuarioContactos(){
		require_once('views/usuarios/usuario_contactos.php');
	}
	//Pagina usuario detalle factura
	public function usuarioDetalleFactura(){
		require_once('views/usuarios/usuario_detalle_factura.php');
	}
	//Pagina usuario detalle factura compra
	public function usuarioDetalleFacturaCompra(){
		require_once('views/usuarios/usuario_detalle_factura_compra.php');
	}
	//Pagina usuario eventos
	public function usuarioEventos(){
		require_once('views/usuarios/usuario_eventos.php');
	}
	//Pagina usuario pago
	public function usuarioPago(){
		require_once('views/usuarios/usuario_pago.php');
	}
	//Pagina usuario pago exitoso
	public function usuarioPagoExitoso(){
		require_once('views/usuarios/usuario_pago_exitoso.php');
	}
	//Pagina usuario paquetes matrimonio
	public function usuarioPaquetesMatrimonio(){
		require_once('views/usuarios/usuario_paquetes_matrimonio.php');
	}
	//Pagina usuario pedido generado
	public function usuarioPedidoGenerado(){
		require_once('views/usuarios/usuario_pedido_generado.php');
	}
	//Pagina usuario pedidos
	public function usuarioPedidos(){
		require_once('views/usuarios/usuario_pedidos.php');
	}

	// *******************  SECCION ADMINISTRADOR  **********************************************//
	//Pagina inicio administrador
	public function administrador(){
		require_once('views/administrador/administrador.php');
	}
	//Pagina administrador empleados
	public function administradorEmpleados(){
		require_once('views/administrador/administrador_empleados.php');
	}
	//Pagina administrador empleados crear
	public function administradorEmpleadosCrear(){
		require_once('views/administrador/administrador_empleados_crear.php');
	}
	//Pagina administrador empleados editar
	public function administradorEmpleadosEditar(){
		require_once('views/administrador/administrador_empleados_editar.php');
	}
	//Pagina administrador empleados eliminar
	public function administradorEmpleadosEliminar(){
		require_once('views/administrador/administrador_empleados_eliminar.php');
	}
	//Pagina administrador factura editar
	public function administradorFacturaEditar(){
		require_once('views/administrador/administrador_factura_editar.php');
	}
	//Pagina administrador factura eliminar
	public function administradorFacturaEliminar(){
		require_once('views/administrador/administrador_factura_eliminar.php');
	}
	//Pagina administrador inventarios
	public function administradorInventarios(){
		require_once('views/administrador/administrador_inventarios.php');
	}
	//Pagina administrador inventarios crear
	public function administradorInventariosCrear(){
		require_once('views/administrador/administrador_inventarios_crear.php');
	}
	//Pagina administrador inventarios editar eliminar
	public function administradorInventariosEditarEliminar(){
		require_once('views/administrador/administrador_inventarios_editar_eliminar.php');
	}
	//Pagina administrador paquetes
	public function administradorPaquetes(){
		require_once('views/administrador/administrador_paquetes.php');
	}
	//Pagina administrador paquetes crear
	public function administradorPaquetesCrear(){
		require_once('views/administrador/administrador_paquetes_crear.php');
	}
	//Pagina administrador paquetes editar
	public function administradorPaquetesEditar(){
		require_once('views/administrador/administrador_paquetes_editar.php');
	}
	//Pagina administrador pedidos
	public function administradorPedidos(){
		require_once('views/administrador/administrador_pedidos.php');
	}
	//Pagina administrador reportes
	public function administradorReportes(){
		require_once('views/administrador/administrador_reportes.php');
	}
	//Pagina administrador turno crear
	public function administradorTurnoCrear(){
		require_once('views/administrador/administrador_turno_crear.php');
	}
	//Pagina administrador turno editar eliminar
	public function administradorTurnoEditarEliminar(){
		require_once('views/administrador/administrador_turno_editar_eliminar.php');
	}
	//Pagina administrador turnos
	public function administradorTurnos(){
		require_once('views/administrador/administrador_turnos.php');
	}
	//Pagina administrador usuarios
	public function administradorUsuarios(){
		require_once('views/administrador/administrador_usuarios.php');
	}
	//Pagina administrador usuarios crear
	public function administradorUsuariosCrear(){
		require_once('views/administrador/administrador_usuarios_crear.php');
	}
	//Pagina administrador usuarios editar
	public function administradorUsuariosEditar(){
		require_once('views/administrador/administrador_usuarios_editar.php');
	}
	//Pagina administrador usuarios eliminar
	public function administradorUsuariosEliminar(){
		require_once('views/administrador/administrador_usuarios_eliminar.php');
	}

	// *******************  SECCION EMPLEADOS  **********************************************//
	//Pagina inicio empleados
	public function empleados(){
		require_once('views/empleados/empleados.php');
	}
	//Pagina inicio empleados turno
	public function empleadosTurnos(){
		require_once('views/empleados/empleados_turnos.php');
	}
}

 ?>