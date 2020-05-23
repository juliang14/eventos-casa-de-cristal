<main>
				<!-----------------------   INICIO MODAL  ------------------------------------>
				<!-- Button trigger modal -->
				<!--
					$('#modalCenter').modal('show'); // abrir
					$('#modalCenter').modal('hide'); // cerrar
				-->
				<!--button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCenter">
				  Launch demo modal
				</button-->

				<!-- Modal -->
				<div class="modal fade" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" onclick="generales.refrescarPagina();">
				  <div class="modal-dialog modal-dialog-centered" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLongTitle">Importante</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        ...
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="generales.refrescarPagina();">Cerrar</button>
				        <!--button type="button" class="btn btn-primary">Save changes</button-->
				      </div>
				    </div>
				  </div>
				</div>
				<!-----------------------   FIN MODAL  ------------------------------------>
				<!-----------------------   INICIO TABLA EMPLEADOS  ------------------------------------>
				<section id="section_table">
					<h2>DATOS EMPLEADOS</h2>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="seccion_boton_crear_usuario">
						<div class="row">
							<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
							</div>
							<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
							</div>
							<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-right">
								<a href="?class=IndexHome&method=administradorEmpleadosCrear">
									<button type="button" class="btn btn-success">
										Crear empleado <i class="fas fa-plus-circle"></i>
									</button>

								</a>
							</div>
						</div>
					</div>
					<table id="tabla_empleados" class="display responsive nowrap tabla-jquery">
						<thead> 
							<tr style="color: #eb028b;">
								<th>ID</th>
		                        <th>NOMBRES</th>
		                        <th>APELLIDOS</th>
		                        <th>DOCUMENTO</th>
		                        <th>TELEFONO</th>
		                        <th>ROL</th>
		                        <th>CARGO</th>							                        
		                        <th>USUARIO_SISTEMA</th>
		                        <th>CLAVE</th>
		                        <th>ACCION</th>
		                    </tr>
						</thead>
						<tbody id="body_tabla_clientes">  
												                       
		                        <tr>
		                        	<td>1</td>
		                            <td>Maria Mireya</td>
		                            <td>Acevedo Manríquez</td>
		                            <td>CC-1354689712</td>
		                            <td>3157845689</td>
		                            <td>Empleado</td>		
		                            <td>Mesero</td>					                            
		                            <td>AcevedoMM</td>
		                            <td>AcevedoMM</td>
		                            <td>
		                            	<a href="?class=IndexHome&method=administradorEmpleadosVer&ID_EMPLEADO=1">
		                            		<i class="fas fa-info color_orange" title="Ver empleado 1"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<a href="?class=IndexHome&method=administradorEmpleadosEditar&ID_EMPLEADO=1">
		                            		<i class="fas fa-pencil-alt color_blue" title="Editar empleado 1"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<!--a href="?class=IndexHome&method=deleteUsuario&ID_EMPLEADO=1"-->
		                            	<i class="fas fa-trash-alt color_red btn-borrarEmpleado" title="Borrar empleado 1" data-control-user=1></i>
		                            	<!--/a-->
		                            </td>
		                        </tr>
					            
					        					                       
		                        <tr>
		                        	<td>2</td>
		                            <td>Enrique </td>
		                            <td>Acevedo Mejia</td>
		                            <td>CC-1512365874</td>
		                            <td>1023856989</td>
		                            <td>Empleado</td>		
		                            <td>Mesero</td>					                            
		                            <td>Mejia14</td>
		                            <td>Mejia14</td>
		                            <td>
		                            	<a href="?class=IndexHome&method=administradorEmpleadosVer&ID_EMPLEADO=2">
		                            		<i class="fas fa-info color_orange" title="Ver empleado 2"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<a href="?class=IndexHome&method=administradorEmpleadosEditar&ID_EMPLEADO=2">
		                            		<i class="fas fa-pencil-alt color_blue" title="Editar empleado 2"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<!--a href="?class=IndexHome&method=deleteUsuario&ID_EMPLEADO=2"-->
		                            	<i class="fas fa-trash-alt color_red btn-borrarEmpleado" title="Borrar empleado 2" data-control-user=2></i>
		                            	<!--/a-->
		                            </td>
		                        </tr>
					            
					        					                       
		                        <tr>
		                        	<td>3</td>
		                            <td>Carolina </td>
		                            <td>Acevedo Ruiz</td>
		                            <td>CC-1265328496</td>
		                            <td>3198745289</td>
		                            <td>Empleado</td>		
		                            <td>Cocinero</td>					                            
		                            <td>CarolinaRui</td>
		                            <td>CarolinaRui</td>
		                            <td>
		                            	<a href="?class=IndexHome&method=administradorEmpleadosVer&ID_EMPLEADO=3">
		                            		<i class="fas fa-info color_orange" title="Ver empleado 3"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<a href="?class=IndexHome&method=administradorEmpleadosEditar&ID_EMPLEADO=3">
		                            		<i class="fas fa-pencil-alt color_blue" title="Editar empleado 3"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<!--a href="?class=IndexHome&method=deleteUsuario&ID_EMPLEADO=3"-->
		                            	<i class="fas fa-trash-alt color_red btn-borrarEmpleado" title="Borrar empleado 3" data-control-user=3></i>
		                            	<!--/a-->
		                            </td>
		                        </tr>
					            
					        					                       
		                        <tr>
		                        	<td>4</td>
		                            <td>Tomas Jose</td>
		                            <td>Acosta Canto</td>
		                            <td>CC-745368791</td>
		                            <td>3125698745</td>
		                            <td>Empleado</td>		
		                            <td>Presidente</td>					                            
		                            <td>tomas59jose</td>
		                            <td>tomas59jose</td>
		                            <td>
		                            	<a href="?class=IndexHome&method=administradorEmpleadosVer&ID_EMPLEADO=4">
		                            		<i class="fas fa-info color_orange" title="Ver empleado 4"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<a href="?class=IndexHome&method=administradorEmpleadosEditar&ID_EMPLEADO=4">
		                            		<i class="fas fa-pencil-alt color_blue" title="Editar empleado 4"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<!--a href="?class=IndexHome&method=deleteUsuario&ID_EMPLEADO=4"-->
		                            	<i class="fas fa-trash-alt color_red btn-borrarEmpleado" title="Borrar empleado 4" data-control-user=4></i>
		                            	<!--/a-->
		                            </td>
		                        </tr>
					            
					        					                       
		                        <tr>
		                        	<td>5</td>
		                            <td>Celina </td>
		                            <td>Acosta Gomez</td>
		                            <td>CC-102356833</td>
		                            <td>312568974</td>
		                            <td>Empleado</td>		
		                            <td>Organizador</td>					                            
		                            <td>celina1111</td>
		                            <td>celina1111</td>
		                            <td>
		                            	<a href="?class=IndexHome&method=administradorEmpleadosVer&ID_EMPLEADO=5">
		                            		<i class="fas fa-info color_orange" title="Ver empleado 5"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<a href="?class=IndexHome&method=administradorEmpleadosEditar&ID_EMPLEADO=5">
		                            		<i class="fas fa-pencil-alt color_blue" title="Editar empleado 5"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<!--a href="?class=IndexHome&method=deleteUsuario&ID_EMPLEADO=5"-->
		                            	<i class="fas fa-trash-alt color_red btn-borrarEmpleado" title="Borrar empleado 5" data-control-user=5></i>
		                            	<!--/a-->
		                            </td>
		                        </tr>
					            
					        					                       
		                        <tr>
		                        	<td>6</td>
		                            <td>Irma </td>
		                            <td>Aguilar Dorantes</td>
		                            <td>CC-1027520041</td>
		                            <td>3102589663</td>
		                            <td>Empleado</td>		
		                            <td>Organizador</td>					                            
		                            <td>irma788</td>
		                            <td>irma788</td>
		                            <td>
		                            	<a href="?class=IndexHome&method=administradorEmpleadosVer&ID_EMPLEADO=6">
		                            		<i class="fas fa-info color_orange" title="Ver empleado 6"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<a href="?class=IndexHome&method=administradorEmpleadosEditar&ID_EMPLEADO=6">
		                            		<i class="fas fa-pencil-alt color_blue" title="Editar empleado 6"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<!--a href="?class=IndexHome&method=deleteUsuario&ID_EMPLEADO=6"-->
		                            	<i class="fas fa-trash-alt color_red btn-borrarEmpleado" title="Borrar empleado 6" data-control-user=6></i>
		                            	<!--/a-->
		                            </td>
		                        </tr>
					            
					        					                       
		                        <tr>
		                        	<td>7</td>
		                            <td>Maria celia</td>
		                            <td>Aguilar Lemus</td>
		                            <td>CC-1253458963</td>
		                            <td>3215896259</td>
		                            <td>Empleado</td>		
		                            <td>Dj</td>					                            
		                            <td>maria12</td>
		                            <td>maria12</td>
		                            <td>
		                            	<a href="?class=IndexHome&method=administradorEmpleadosVer&ID_EMPLEADO=7">
		                            		<i class="fas fa-info color_orange" title="Ver empleado 7"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<a href="?class=IndexHome&method=administradorEmpleadosEditar&ID_EMPLEADO=7">
		                            		<i class="fas fa-pencil-alt color_blue" title="Editar empleado 7"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<!--a href="?class=IndexHome&method=deleteUsuario&ID_EMPLEADO=7"-->
		                            	<i class="fas fa-trash-alt color_red btn-borrarEmpleado" title="Borrar empleado 7" data-control-user=7></i>
		                            	<!--/a-->
		                            </td>
		                        </tr>
					            
					        					                       
		                        <tr>
		                        	<td>8</td>
		                            <td>Marcela </td>
		                            <td>Aguilar Loranca</td>
		                            <td>CC-1065320855</td>
		                            <td>34589654878</td>
		                            <td>Empleado</td>		
		                            <td>Dj</td>					                            
		                            <td>marcelaaguil89</td>
		                            <td>marcelaaguil89</td>
		                            <td>
		                            	<a href="?class=IndexHome&method=administradorEmpleadosVer&ID_EMPLEADO=8">
		                            		<i class="fas fa-info color_orange" title="Ver empleado 8"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<a href="?class=IndexHome&method=administradorEmpleadosEditar&ID_EMPLEADO=8">
		                            		<i class="fas fa-pencil-alt color_blue" title="Editar empleado 8"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<!--a href="?class=IndexHome&method=deleteUsuario&ID_EMPLEADO=8"-->
		                            	<i class="fas fa-trash-alt color_red btn-borrarEmpleado" title="Borrar empleado 8" data-control-user=8></i>
		                            	<!--/a-->
		                            </td>
		                        </tr>
					            
					        					                       
		                        <tr>
		                        	<td>9</td>
		                            <td>Pascual Gerardo</td>
		                            <td>Alonso Ibarra</td>
		                            <td>CC-847982549</td>
		                            <td>3215896258</td>
		                            <td>Empleado</td>		
		                            <td>Cocinero</td>					                            
		                            <td>mendoza56</td>
		                            <td>mendoza56</td>
		                            <td>
		                            	<a href="?class=IndexHome&method=administradorEmpleadosVer&ID_EMPLEADO=9">
		                            		<i class="fas fa-info color_orange" title="Ver empleado 9"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<a href="?class=IndexHome&method=administradorEmpleadosEditar&ID_EMPLEADO=9">
		                            		<i class="fas fa-pencil-alt color_blue" title="Editar empleado 9"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<!--a href="?class=IndexHome&method=deleteUsuario&ID_EMPLEADO=9"-->
		                            	<i class="fas fa-trash-alt color_red btn-borrarEmpleado" title="Borrar empleado 9" data-control-user=9></i>
		                            	<!--/a-->
		                            </td>
		                        </tr>
					            
					        					                       
		                        <tr>
		                        	<td>10</td>
		                            <td>Oscar </td>
		                            <td>Alvarado Mendoza</td>
		                            <td>CC-1352087496</td>
		                            <td>3256985689</td>
		                            <td>Empleado</td>		
		                            <td>Organizador</td>					                            
		                            <td>felipe7</td>
		                            <td>felipe7</td>
		                            <td>
		                            	<a href="?class=IndexHome&method=administradorEmpleadosVer&ID_EMPLEADO=10">
		                            		<i class="fas fa-info color_orange" title="Ver empleado 10"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<a href="?class=IndexHome&method=administradorEmpleadosEditar&ID_EMPLEADO=10">
		                            		<i class="fas fa-pencil-alt color_blue" title="Editar empleado 10"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<!--a href="?class=IndexHome&method=deleteUsuario&ID_EMPLEADO=10"-->
		                            	<i class="fas fa-trash-alt color_red btn-borrarEmpleado" title="Borrar empleado 10" data-control-user=10></i>
		                            	<!--/a-->
		                            </td>
		                        </tr>
					            
					        					                       
		                        <tr>
		                        	<td>11</td>
		                            <td>Felipe </td>
		                            <td>Alvarez Medellin</td>
		                            <td>CC-1166335508</td>
		                            <td>3102568994</td>
		                            <td>Empleado</td>		
		                            <td>Animador</td>					                            
		                            <td>pascualger</td>
		                            <td>pascualger</td>
		                            <td>
		                            	<a href="?class=IndexHome&method=administradorEmpleadosVer&ID_EMPLEADO=11">
		                            		<i class="fas fa-info color_orange" title="Ver empleado 11"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<a href="?class=IndexHome&method=administradorEmpleadosEditar&ID_EMPLEADO=11">
		                            		<i class="fas fa-pencil-alt color_blue" title="Editar empleado 11"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<!--a href="?class=IndexHome&method=deleteUsuario&ID_EMPLEADO=11"-->
		                            	<i class="fas fa-trash-alt color_red btn-borrarEmpleado" title="Borrar empleado 11" data-control-user=11></i>
		                            	<!--/a-->
		                            </td>
		                        </tr>
					            
					        					                       
		                        <tr>
		                        	<td>12</td>
		                            <td>Oscar </td>
		                            <td>Alvarado Mendoza</td>
		                            <td>CC-1299852490</td>
		                            <td>3105895214</td>
		                            <td>Empleado</td>		
		                            <td>Director_de_Marketing</td>					                            
		                            <td>osalvarado65</td>
		                            <td>osalvarado65</td>
		                            <td>
		                            	<a href="?class=IndexHome&method=administradorEmpleadosVer&ID_EMPLEADO=12">
		                            		<i class="fas fa-info color_orange" title="Ver empleado 12"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<a href="?class=IndexHome&method=administradorEmpleadosEditar&ID_EMPLEADO=12">
		                            		<i class="fas fa-pencil-alt color_blue" title="Editar empleado 12"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<!--a href="?class=IndexHome&method=deleteUsuario&ID_EMPLEADO=12"-->
		                            	<i class="fas fa-trash-alt color_red btn-borrarEmpleado" title="Borrar empleado 12" data-control-user=12></i>
		                            	<!--/a-->
		                            </td>
		                        </tr>
					            
					        					                       
		                        <tr>
		                        	<td>13</td>
		                            <td>Gustavo </td>
		                            <td>Aquiles Caigo</td>
		                            <td>CC-1015879623</td>
		                            <td>3125689586</td>
		                            <td>Administrador</td>		
		                            <td>Fotografos</td>					                            
		                            <td>gustavo26</td>
		                            <td>gustavo26</td>
		                            <td>
		                            	<a href="?class=IndexHome&method=administradorEmpleadosVer&ID_EMPLEADO=13">
		                            		<i class="fas fa-info color_orange" title="Ver empleado 13"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<a href="?class=IndexHome&method=administradorEmpleadosEditar&ID_EMPLEADO=13">
		                            		<i class="fas fa-pencil-alt color_blue" title="Editar empleado 13"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<!--a href="?class=IndexHome&method=deleteUsuario&ID_EMPLEADO=13"-->
		                            	<i class="fas fa-trash-alt color_red btn-borrarEmpleado" title="Borrar empleado 13" data-control-user=13></i>
		                            	<!--/a-->
		                            </td>
		                        </tr>
					            
					        					                       
		                        <tr>
		                        	<td>14</td>
		                            <td>Socorro </td>
		                            <td>Arias Rodríguez</td>
		                            <td>CC-1004876948</td>
		                            <td>3112589632</td>
		                            <td>Administrador</td>		
		                            <td>Mesero</td>					                            
		                            <td>socorroar12</td>
		                            <td>socorroar12</td>
		                            <td>
		                            	<a href="?class=IndexHome&method=administradorEmpleadosVer&ID_EMPLEADO=14">
		                            		<i class="fas fa-info color_orange" title="Ver empleado 14"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<a href="?class=IndexHome&method=administradorEmpleadosEditar&ID_EMPLEADO=14">
		                            		<i class="fas fa-pencil-alt color_blue" title="Editar empleado 14"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<!--a href="?class=IndexHome&method=deleteUsuario&ID_EMPLEADO=14"-->
		                            	<i class="fas fa-trash-alt color_red btn-borrarEmpleado" title="Borrar empleado 14" data-control-user=14></i>
		                            	<!--/a-->
		                            </td>
		                        </tr>
					            
					                     
						</tbody>
					</table>
				</section>
				<!-----------------------   FIN TABLA EMPLEADOS  ------------------------------------>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="row">
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-right">
							<img src="views/img/izquierda.png">
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
							<a href="?class=IndexHome&method=administrador">
								<img src="views/img/casa.png">
							</a>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-left">
							<img src="views/img/derecha.png">
						</div>
					</div>
				</div>
			</main>