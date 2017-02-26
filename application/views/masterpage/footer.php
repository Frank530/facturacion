	
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
            $("#formulario").click(function(){
                $.ajax({
                    url: $(this).attr("action"),
                    type: $(this).attr("method"),
                    data: $(this).serialize(),
                    beforeSend:function(){
                        $(".loader").show();
                    },
                    success:function(){
                        $(".loader").fadeOut("slow");
                    }
                });
 
            });
            return false;
        });

    </script>
</body>
</html>
