<!---->
<div class="single">

<div class="container">
<div class="col-md-9">
	<div class="col-md-5 grid">		
		<div class="flexslider">
					<?php foreach ($produk as $row) { ?>
					<form action="<?php echo site_url(); ?>/pesanan/simpan_keranjang/<?=$row->id_produk ?>" method="post">
			  <ul class="slides">
			    <li data-thumb="images/si.jpg">
			        <div class="thumb-image"> <img src="<?=base_url()?>upload/<?=$row->gambar?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			  </ul>

		</div>		
	</div>	
<div class="col-md-7 single-top-in">
						<div class="single-para simpleCart_shelfItem">
							<h1><?=$row->nama?></h1></p>
							<br>
							<hr>
							<p>
							<?=$row->deskripsi?></p><hr>
							<p><br>							<?=$row->produk_info?></p>			
							</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-6">
			<?php $i=0;
            $sql="SELECT * FROM harga WHERE id_produk='$row->id_produk' ";
            $query = $this->db->query($sql); ?>  

             <b>Jumlah</b> : 


                  <select class="form-control" name="jumlahPerLiter" id="country" required="">
                        <option value="">Pilih Jumlah</option>
                     <?php foreach ($query->result() as $data) {?>
                            <option value="<?=$data->id_harga?>"><?=$data->jumlah?> liter</option>
                         <?php }?>

                    </select>
                     <b>Harga</b> : 
                    <div name="hargaa" id="province1" >
                        <input type="text" name="hargaa" id="province1" readonly=""    >
                    </div>
                     <b>Stok</b> :
                    <div name="stok1" id="stok1" >
                        <input type="text" name="stok1" id="stok1" readonly="" >
                    </div>
                    <br>

                    <script type="text/javascript">
        $(document).ready(function(){
           $('#country').on('change', function(){
                var country_id = $(this).val();
                if(country_id == '')
                {
                    $('#province1').prop('disabled', true);
                }
                else
                {
                    $('#province1').prop('readonly', true);
                    $.ajax({
                        url:"<?php echo site_url() ?>/harga/get_province",
                        type: "POST",
                        data: {'country_id' : country_id},
                        dataType: 'json',
                        success: function(data){
                           $('#province1').html(data);

                        },
                        error: function(){
                            alert('Error occur...!!');
                        }
                    });
                    $('#province1').prop('readonly', true);
                    $.ajax({
                        url:"<?php echo site_url() ?>/harga/get_stok",
                        type: "POST",
                        data: {'country_id' : country_id},
                        dataType: 'json',
                        success: function(data){
                           $('#stok1').html(data);
                           
                        },
                        error: function(){
                            alert('Error occur...!!');
                        }
                    });
                    $('#jumlah_perbarang').prop('readonly', true);
                    $.ajax({
                        url:"<?php echo site_url() ?>/harga/jumlah_perbarang",
                        type: "POST",
                        data: {'country_id' : country_id},
                        dataType: 'json',
                        success: function(data){
                           $('#jumlah_perbarang').html(data);
                           
                        },
                        error: function(){
                            alert('Error occur...!!');
                        }
                    });
                }
           }); 
        });
    </script>
		<label for="exampleInputEmail1">Jumlah Pesan : </label><input type="number" name="jumlah" class="form-group" required="">

		<button type="submit" class="btn btn-success col-md-4 ">Beli</button>
		</div>
		<div class="col-md-6">
		<br>
		<br>
		
		</div>
					</div>

					</form>
			<div class="clearfix"> </div>
			<div class="content-top1">
				<div class="col-md-12 col-md3">

								<ul id="myTab" class="nav nav-tabs nav_tabs">
						
						<li class="active"><a href="#service-two" data-toggle="tab">PRODUK INFO</a></li>
						
						<li><a href="#service-three" data-toggle="tab">REVIEW</a></li>
						<li><a href="#service-4" data-toggle="tab">TULIS KOMENTAR</a></li>
						
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">
						 
							<section class="container product-info">
							<?php echo $row->produk_info; ?>
							</section>
										  
						</div>
					<div class="tab-pane fade" id="service-two">
						
						<section class="container">
								<?php echo $row->produk_info; ?>
						</section>
						
					</div>
					<div class="tab-pane fade" id="service-three">
					<br>
          <?php foreach ($review as $key ) {?>
					<div class="media">
						  <div class="media-body">
						    <h4 class="media-heading"><b><?php echo $key->nama; ?></b></h4>
						    <p><?php echo $key->komentar; ?>
						    </p>
						     </div>
						</div>	
            </hr>
            <?php  } ?>											
					</div>
					<div class="tab-pane fade" id="service-4">
		 <form action="<?php echo site_url()."/review";?>" method="post">
       <div class="row" >
       <div class="form-group col-md-12">
            <input type="hidden" class="form-control"  value="<?php echo $row->id_produk; ?>" name="id_produk" >
          </div>
           <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Nama</label>
            
            
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nama" name="nama" required>
          </div>
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" required>
          </div>
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Komentar</label>
            <textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="komentar" name="komentar" required></textarea>
          </div>
          <div class="form-group col-md-12" >
          <button type="submit"  class="btn btn-primary col-md-12" >Kirim Komentar</button>
          </div>
         </div>
         <?php } ?>
			
         </form>	
			</div>

					
</div>

				</div>	
			
			
			<div class="clearfix"> </div>
			</div>		
</div>
<!----->
<div class="col-md-3 product-bottom">
			<!--categories-->
				<div class=" rsidebar span_1_of_left">
						<div class="categories">
		<ul>	<h3>Kategori Produk</h3>					  	 
	  						    <?php foreach ($kategori as $row) {?>
      <li><a href="<?php echo site_url().'/home/Perkategori/'.$row->id_kategori ?>"><?=($row->nama_kategori)?></a></li>
      <?php } ?>
							      
						  	 </ul>
						  	 </div>
					</div>


				<!--initiate accordion-->

<!--//menu-->
<!--seller-->
				<div class="product-bottom">
						<div class="categories">
						<h3>Produk Terkait</h3>
						<?php  foreach ($laris as $rows => $row) {?>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="<?=site_url('home/produk_info')?>/<?=$row->id_produk?>"><img class="img-responsive " src="<?=base_url()?>upload/<?=$row->gambar?>" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="<?=site_url('home/produk_info')?>/<?=$row->id_produk?>" ><?=$row->nama?></a></h6>
							 Rp. <?=$row->harga?></span>
						</div>	
						<div class="clearfix"> </div>
					</div>
					<?php } ?>
					</div>
						
				</div>

<!--//seller-->
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
<!--footer-->


<script src="<?=base_url()?>assets/mitra1/web/js/imagezoom.js"></script>
<!-- start menu -->
<link href="<?=base_url()?>assets/mitra1/web/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?=base_url()?>assets/mitra1/web/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="<?=base_url()?>assets/mitra1/web/js/simpleCart.min.js"> </script>
<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
						<!-- FlexSlider -->
  <script defer src="<?=base_url()?>assets/mitra1/web/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="<?=base_url()?>assets/mitra1/web/css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!---pop-up-box---->
					<link href="<?=base_url()?>assets/mitra1/web/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="<?=base_url()?>assets/mitra1/web/js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>	