
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/node-waves/waves.js"></script>

       <!-- Jquery Validation Plugin Css -->
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/sweetalert/sweetalert.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()."assets/admin/"; ?>plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>


    <!-- Custom Js -->
    <script src="<?php echo base_url()."assets/admin/"; ?>js/admin.js"></script>
    <script src="<?php echo base_url()."assets/admin/"; ?>js/pages/tables/jquery-datatable.js"></script>
    <script src="<?php echo base_url()."assets/admin/"; ?>pages/forms/form-validation.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url()."assets/admin/"; ?>js/demo.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").before(html);
      });
      $("body").on("click",".remove",function(){ 
          $(this).parents(".ze").remove();
      });
    });
</script>


<script>
// assumes you're using jQuery
$(document).ready(function() {
$('.confirm-div').hide();
<?php if($this->session->flashdata('msg')){ ?>
$('.confirm-div').html('<?php echo $this->session->flashdata('msg'); ?>').show();
});
<?php } ?>
</script>
</body>

</html>