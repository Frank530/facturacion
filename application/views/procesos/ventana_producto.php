<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
	<div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Formulario De Producto</h4>
		</div>
  		<div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label>Nombre</label>
                  <input class="form-control" placeholder="Nombre del producto" name="nombre" id="nombre">
              </div>
              <div class="form-group">
                  <label>Cantidad</label>
                  <input class="form-control" placeholder="Cantidad del producto" name="cantidad" id="cantidad">
              </div>
            </div>
            <div class="col-md-6 ">
              <div class="form-group">
                  <label>Precio</label>
                  <div class="input-group">
                  <div class="input-group-addon">$</div>
                  <input type="number" class="form-control" name="precio" placeholder="Precio del producto" id="precio">
                  <div class="input-group-addon">.00</div>
                  </div>
              </div>
              <div class="form-group">
                  <label>Categoria</label>
                  <select class="form-control" name="categoria" id="categoria">
                  <option value="0">Seleccione...</option>
                  <?php foreach($categoria as $row):  ?>  
                      <option value="<?php echo $row->id_categoria; ?>">
                        <?php echo $row->nombre_categoria; ?>
                      </option>
                  <?php endforeach; ?>
                  </select>
              </div>
            </div>
            <div class="form-group"  id="respuesta" role="alert">
            </div>
          </div>
          
  		</div>
      
		  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button class="btn btn-primary" id="btn_regis" >Guardar</button>
	  	</div>
    </div>
  </div>
</div>
