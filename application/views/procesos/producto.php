<div id="page-wrapper" >
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Productos</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Productos</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                        	<div class="row">
                        		
	                        	<div class="form-group col-lg-5">
		                            <button class="btn btn-primary " id="btn_guardarP"data-toggle="modal" data-target="#myModal"> Agregar Producto <span class="fa fa-plus-square-o "></span></button>
									<?php $this->load->view('procesos/ventana_producto',$categoria); ?>
	                        	</div>
                          	<div class="form-group col-lg-5">
							    <input type="text" class="form-control col-lg-8" id="exampleInputName2" placeholder="Buscar">
							</div>
							<div class="col-lg-2">
								<button class="btn btn-primary">Buscar</button>
							</div>
                        	</div>
							
						</div>
						
                        <div class="col-lg-12">
	                        <table class="table table-responsive table-bordered table-striped"" id="tablaProducto">
								<thead>
									<tr class="info">
										<th>Codigo</th>
										<th>Nombre</th>
										<th>Precio</th>
										<th>Stock</th>
										<th>Categoria</th>
										<th>Opciones</th>
									</tr>	
								</thead>
								<tbody>
								<?php foreach($productos as $row):  ?>	
									<tr>
										<td>
											<?php echo $row->id_producto; ?>
										</td>
										<td>
											<?php echo $row->nombre_producto; ?>
										</td>
										<td>
											<?php echo $row->precio_producto; ?>
										</td>
										<td>
											<?php echo $row->stock_producto; ?>
										</td>
										<td>
											<?php echo $row->id_categoria; ?>
										</td>
										<td>
											<button class="btn btn-success">Editar</button>
											<button class="btn btn-danger">Eliminar</button>
										</td>
									</tr>	

								<?php endforeach; ?>
								</tbody>

							</table>
							<nav aria-label="Page navigation" id="nav_paginacion">
	                        	<input type="hidden" name="posicion" id="posicion" value="1">
								<ul class="pagination">
									<li>
										<a href="javascript:void(0)" onclick="listarLibrosAnt();" aria-label="Previous" >
									    	<span aria-hidden="true">&laquo; Anterior</span>
									  	</a>
									</li>
									<?php for ($i=0; $i < $numPaginas; $i++) { ?>

										<li><a href="javascript:void(0)" onclick="listarLibros(<?php echo $i+1; ?>);"><?php echo $i+1; ?></a></li>
									<?php } ?>
									<li>
										<a href="#" aria-label="Next">
											<span aria-hidden="true" onclick="listarLibrosSig(<?php echo $numPaginas; ?>);" >Siguiente &raquo;</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
