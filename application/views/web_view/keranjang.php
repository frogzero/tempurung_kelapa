<!--content-->
		<div class="container">
	<div class="row">
	<div class="col-md-12">
	<div class="tabela">						
<table class="table table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Produk</th>
					<th>Jumlah yang di pilih</th>
					<th>Jumlah pesanan</th>
					<th style="text-align: left;">Harga</th>
					<th style="text-align: right;">Subtotal</th>
					<th style="text-align: right;"></th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$i=0;
					foreach ($this->cart->contents() as $items) : 
					$i++;
				?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $items['name'] ?></td>
					<td><?= $items['size'] ?> liter</td>
					<td><?= $items['qty'] ?></td>
					<td>Rp. <?= number_format($items['price'],0,',','.') ?></td>
					<td align="right">Rp. <?= number_format($items['subtotal'],0,',','.') ?></td>
					<td></td>
					<td><a href="<?=site_url()?>/home/hapus_cart/<?=$items['rowid']?>">Hapus</a></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>
				<tr><td></td>
					<td align="right" colspan="4"><b>Total</b> </td>
					<td align="right">Rp. <?= number_format($this->cart->total(),0,',','.'); ?></td>
				</tr>
			</tfoot>
		</table>
		<div align="center">
			
			<?= anchor(site_url('home/all_produk'),'Lanjutkan Belanja',['class'=>'btn btn-primary']) ?> 
			<?= anchor('pesanan/bersih/','Bersihkan Keranjang',['class'=>'btn btn-danger']) ?> 
			<?= anchor('pesanan/checkout/','Check Out',['class'=>'btn btn-success']) ?>
		</div>
			   <div class="clearfix"> </div>
			 <br><br>
						
		
</div>
</div>
	</div>
	</div>
<!--Produk Terlaris-->