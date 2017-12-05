<!--content-->
<div class="content">
	<div class="container">			
			<div class="content-top1">
			<div class="row">
			 <?php foreach ($laris as  $a): ?>
				<div class="col-md-2">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="<?php site_url()?>index.php/home/detail/<?=$a->id_produk ?>">
							<img src="<?php echo base_url(); ?>upload/<?php echo $a->gambar; ?>" alt="" height="200" width="100%"/>
						</a>
						<h3><a href="<?php site_url()?>index.php/home/detail/<?=$a->id_produk ?>"></a></h3>
						<div class="price">
								
								<a href="<?php echo site_url()?>/home/produk_info/<?=$a->id_produk ?>" class="item_add">Detail</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
				<?php endforeach; ?>
				
				</div>	<br><div class="subjudul"> Produk Terlaris</div><hr>
			</div>
		</div>
	</div>
<!--Produk Terlaris-->