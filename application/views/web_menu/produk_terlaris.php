		<!-- content-section-starts-here -->
		<div class="container">
			<div class="main-content">
				<div class="online-strip">
					<div class="col-md-4 follow-us">
						<h3>follow us : <a class="twitter" href="#"></a><a class="facebook" href="#"></a></h3>
					</div>
					<div class="col-md-4 shipping-grid">
						<div class="shipping">
							<img src="<?=base_url()?>assets/delarosa/web/images/shipping.png" alt="" />
						</div>
						<div class="shipping-text">
							<h3>Gratis Ongkir</h3>
							<p>on orders over $ 199</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 online-order">
						<p>Order online</p>
						<h3>Telp:14045</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="products-grid">
				<header>
					<h3 class="head text-center">Best Seller</h3>
				</header>
				<?php foreach ($laris as $num_rows => $row) {?>
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<a href="<?=site_url()?>/home/produk_info/<?=$row->id_produk?>"><img src="<?=base_url()?>upload/<?=$row->gambar?>" alt="" height="350px"/></a>
						<div class="mask">
							<a href="single.html">Quick View</a>
						</div>
						<a class="product_name" href="<?=site_url()?>/home/produk_info/<?=$row->id_produk?>"><?=$row->nama?></a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">Rp. <?= number_format($row->harga,0,',','.'); ?></span></a></p>
					</div>
				<?php } ?>
					<div class="clearfix"></div>
				</div>
			</div>

		</div