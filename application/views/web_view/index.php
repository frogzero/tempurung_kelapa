<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Selamat Datang</title>
<link href="<?=base_url('assets/mitra1/web')?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url('assets/mitra1/web')?>/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?=base_url('assets/mitra1/web')?>/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Mania Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?=base_url('assets/mitra1/web')?>/js/bootstrap.min.js"></script>

<!-- start menu -->
<link href="<?=base_url('assets/mitra1/web/')?>/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?=base_url('assets/mitra1/web/')?>/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="<?=base_url('assets/mitra1/web/')?>/js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="<?=base_url('assets/mitra1/web/')?>/js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>

  <script>
$(document).ready(function(){

    $("#propinsi_asal").click(function(){
        $.post("<?php echo base_url(); ?>index.php/rajaongkir/getCity/"+$('#propinsi_asal').val(),function(obj){
            $('#origin').html(obj);
        });
            
    });

    $("#propinsi_tujuan").click(function(){
        $.post("<?php echo base_url(); ?>index.php/rajaongkir/getCity/"+$('#propinsi_tujuan').val(),function(obj){
            $('#destination').html(obj);
        });
            
    });

    /*
    $("#cari").click(function(){
        $.post("<?php echo base_url(); ?>index.php/rajaongkir/getCost/"+$('#origin').val()+'&dest='+$('#destination').val()+'&berat='+$('#berat').val()+'&courier='+$('#courier').val(),function(obj){
            $('#hasil').html(obj);
        });
    });

    */

    
});



</script>
</head>
<body>