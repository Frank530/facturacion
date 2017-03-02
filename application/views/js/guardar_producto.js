$(document).ready(function(){

   $("#btn_regis").click(function(){
      
      title=$("#nombre").val();
      txt=$("#cantidad").val();
      if(title!="" && txt!=""){
      alert("aqui");
         $.ajax({url:"<?php echo site_url();?>/Producto_controller/guardar",
          type:'POST',
          data:{titulo:title,
                texto:txt
               },
          success:function(result){
          $("#respuesta").html(result);

        }});

      }else{

       $("#respuesta").html("No deje campos vacíos");

      }

   });

 });