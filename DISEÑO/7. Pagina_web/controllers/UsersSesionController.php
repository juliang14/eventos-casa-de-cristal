<?php

class UserSesionController  extends UserSesion{

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
	//Pagina usuario paquetes 15 años
	public function usuarioPaquetes15Anos(){
		require_once('views/usuarios/usuario_paquetes_15_anos.php');
	}
	//Pagina usuario paquetes Bautizo
	public function usuarioPaquetesbautizo(){
		require_once('views/usuarios/usuario_paquetes_bautizo.php');
	}
	//Pagina usuario paquetes Grados
	public function usuarioPaquetesGrados(){
		require_once('views/usuarios/usuario_paquetes_Grados.php');
	}
	//Pagina usuario paquetes Primera counion
	public function usuarioPaquetesPrimeracounion(){
		require_once('views/usuarios/usuario_paquetes_Primera_comunion.php');
	}
	//Pagina usuario paquetes Despedida de solteros
	public function usuarioPaquetesdespedidadesolteros(){
		require_once('views/usuarios/usuario_paquetes_despedida_de _solteros.php');
	}
	//Pagina usuario pedido generado
	public function usuarioPedidoGenerado(){
		require_once('views/usuarios/usuario_pedido_generado.php');
	}
	//Pagina usuario pedidos
	public function usuarioPedidos(){
		require_once('views/usuarios/usuario_pedidos.php');
	}
    
}

?>