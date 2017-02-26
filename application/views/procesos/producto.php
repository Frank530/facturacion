<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Productos</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Productos</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-primary " data-toggle="modal" data-target="#myModal"> Agregar Producto <span class="fa fa-plus-square-o "></span></button>
							<?php $this->load->view('procesos/ventana_producto',$categoria); ?>

							<?php if(isset($mensaje)){ ?>
								<?php $this->load->view('mensajes/mensaje_view'); ?>
							<?php } ?>

                        </div>
                        <div class="container">
							<table class="table">
								<thead>
									<tr>
										<td>
											Titulo
										</td>
									
										<td>
											Descripcion
										</td>
									</tr>	
								</thead>
								<tbody>
								
								</tbody>

							</table>

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
