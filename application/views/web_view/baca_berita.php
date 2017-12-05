<!--content-->
<br>
<br><!--content-->

		<div class="container">
	<div class="row">
	<div class="col-md-8">
	<div class="tabela">	
	<div class="categories">
						
  <?php foreach ($baca as $num_rows => $row) {?>

<h3>Artikel Berita -> <?=$row->judul_berita?> </h3></div>
		<div class="media">

    <a href="<?=site_url()?>/home/baca/<?=$row->id_berita?>">
      <img class="media-object" src="<?=base_url()?>upload/<?=$row->gambar?>" alt="..." width="230px">
    </a>
<br>
  
   <a href="<?=site_url()?>/home/baca/<?=$row->id_berita?>">
    <h3 class="media-heading"><b><?=$row->judul_berita?></b></h3></a> <br> <?=$row->tgl_posting?><br><br>

    <div class="isi" style="text-align: left;"><?=$row->isi?></div>
  <hr>
</div>	
<?php } ?>

						
		
</div>
</div>

<div class="col-md-4">
<!--seller-->
				<div class="product-bottom">
						<div class="categories">
						<h3>Produk Laris</h3>
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

					<div class="product-bottom">
						<div class="categories">
						<h3>Link Terkait</h3>
	
					<div class="product-go">
						<div class=" fashion-grid">
							<a href=""><img class="img-responsive " src="" alt=""></a>	
						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
						
				</div>

<!--//seller-->
	
</div>

</div>
</div>
<!--Produk Terlaris-->