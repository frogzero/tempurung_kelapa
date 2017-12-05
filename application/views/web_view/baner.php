<!--banner-->
<div class="banner">
	<div class="col-sm-3 banner-mat">
		<img class="img-responsive"	src="<?=base_url()?>assets/mitra1/web/images/slidekanan.png" alt="">
	</div>
	<div class="col-sm-6 matter-banner">
	 	<div class="slider">
	    	<div class="callbacks_container">
	      		<ul class="sa" id="slider" >
	        		<?php foreach ($slider as $key => $row) {?>
	        		<li style="display:none">
	          			<img src="<?=base_url()?>upload/<?=$row->gambar?>" alt="" height="350px" width="630px" >
	       			 </li>
	       			 
			 		 <?php } ?>
	      		</ul>
	 	 	</div>
		</div>
	</div>
	<div class="col-sm-3 banner-mat">
		<img class="img-responsive" src="<?=base_url()?>assets/mitra1/web/images/slidekiri.png" alt="">
	</div>
	<div class="clearfix"> </div>
</div>
<!--//banner-->