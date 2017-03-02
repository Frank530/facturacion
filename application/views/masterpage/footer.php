	
  	<!-- jQuery -->
    <script src="<?php echo base_url();?>plantilla/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>plantilla/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>plantilla/vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>plantilla/dist/js/sb-admin-2.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>plantilla/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>plantilla/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url();?>plantilla/data/morris-data.js"></script>
     

    <script type="text/javascript">
      $(document).ready(function(){

       $("#btn_regis").click(function(){
          
          nombre=$("#nombre").val();
          cantidad=$("#cantidad").val();
          precio=$("#precio").val();
          categoria=$("#categoria").val();
          
         if(nombre!="" && cantidad!="" && precio!="" && categoria!=0){
            $.ajax({url:"<?php echo site_url();?>/Producto_controller/guardar",
            type:'POST',
            data:{nom:nombre,
                cant:cantidad,
                pre:precio,
                cat:categoria
            },
            success:function(result){
              $("#respuesta").removeClass('alert-danger');
              $("#respuesta").addClass('col-md-12');
              $("#respuesta").html(result);
              $("#respuesta").addClass('alert');
              $("#respuesta").addClass('alert-success');
              $("#nombre").val("");
              $("#cantidad").val("");
              $("#precio").val("");
              $("#categoria").val("");
              //location.reload();
            }
        });

          }else{
            $("#respuesta").addClass('col-md-12');
            $("#respuesta").addClass('alert');
            $("#respuesta").addClass('alert-danger');
            $("#respuesta").html("Todos los campos son obligatorios");
          }

       });

     });

    $(document).ready(function(){

       $("#btn_guardarP").click(function(){
            $("#respuesta").removeClass('col-md-12');
            $("#respuesta").removeClass('alert');
            $("#respuesta").removeClass('alert-danger');
            $("#respuesta").html("");
        });
     });

    function listarLibros(inicio){
        var inicio=Number(inicio);  
          $.ajax({
            url:"<?php echo site_url();?>/Producto_controller/listar",
            type:'POST',
            data:{lote:inicio}
        }).done(function(resp){
            var datos = JSON.parse(resp);
            //alert(datos[3].id_producto);
            $("#tablaProducto tr").remove();
            titulos="<tr><th>Codigo</th><th>Nombre</th><th>Precio</th><th>Stock</th><th>Categoria</th></tr>";
            $("#tablaProducto").append(titulos);
            data="";
            for (var i = 0; i < datos.length; i++) {
                data+="<tr><td>"+datos[i].id_producto+"</td><td>"+datos[i].nombre_producto+"</td><td>"+datos[i].precio_producto+"</td><td>"+datos[i].stock_producto+"</td><td>"+datos[i].id_categoria+"</td><tr>";
            }
            $("#tablaProducto").append(data);
            $("#posicion").val(inicio);               
        });
    }

    function listarLibrosSig(limite){
        var limite=Number(limite);
        var posicion=Number($("#posicion").val());
        posicion=posicion+1;
        if(posicion<=limite){
            $.ajax({
                url:"<?php echo site_url();?>/Producto_controller/listar",
                type:'POST',
                data:{lote:posicion}
            }).done(function(resp){
                var datos = JSON.parse(resp);
                //alert(datos[3].id_producto);
                $("#tablaProducto tr").remove();
                titulos="<tr><th>Codigo</th><th>Nombre</th><th>Precio</th><th>Stock</th><th>Categoria</th></tr>";
                $("#tablaProducto").append(titulos);
                data="";

                for (var i = 0; i < datos.length; i++) {
                    data+="<tr><td>"+datos[i].id_producto+"</td><td>"+datos[i].nombre_producto+"</td><td>"+datos[i].precio_producto+"</td><td>"+datos[i].stock_producto+"</td><td>"+datos[i].id_categoria+"</td><tr>";
                }
                
                $("#tablaProducto").append(data);
                $("#posicion").val(posicion);               
            });
        }    
    }
    
    function listarLibrosAnt(){
        var limite=0;
        var posicion=Number($("#posicion").val());
        posicion=posicion-1;
        if(posicion>=limite){
            $.ajax({
                url:"<?php echo site_url();?>/Producto_controller/listar",
                type:'POST',
                data:{lote:posicion}
            }).done(function(resp){
                var datos = JSON.parse(resp);
                //alert(datos[3].id_producto);
                $("#tablaProducto tr").remove();
                titulos="<tr><th>Codigo</th><th>Nombre</th><th>Precio</th><th>Stock</th><th>Categoria</th></tr>";
                $("#tablaProducto").append(titulos);
                data="";

                for (var i = 0; i < datos.length; i++) {
                    data+="<tr><td>"+datos[i].id_producto+"</td><td>"+datos[i].nombre_producto+"</td><td>"+datos[i].precio_producto+"</td><td>"+datos[i].stock_producto+"</td><td>"+datos[i].id_categoria+"</td><tr>";
                }
                $("#tablaProducto").append(data);
                $("#posicion").val(posicion);               
            });
        }    
    }      

        
    </script>
</body>
</html>
