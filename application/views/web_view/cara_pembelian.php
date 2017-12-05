<!--content-->
<br>
<br><!--content-->

		<div class="container">
	<div class="row">
	<div class="col-md-8">
	<div class="tabela">	
	<div class="categories">
		<h3>Cara Pembelian </h3></div>
		<div class="media">

    <div class="isi" style="text-align: left;">


    <h4><b>Cara Order produk<b></h4>
            <br>
            <p>1. Buka website</p>
            <img src="<?=base_url().'/upload/mitra/halamanutama.png'?>" width="50%"><br><br>
            <p>2. Lalu tentukan produk apa yang akan anda pesan .</p>
            <p>3. Jika anda menginginkan informasi lebih lanjut (detail) mengenai produk yang akan anda pesan, klik tombol Detail</p>
            <img src="<?=base_url().'/upload/mitra/detatil.png'?>" width="50%"><br><br>
            <p>4. Di halaman detail produk, anda dapat memperoleh informasi tentang harga produk, jumlah stok yang tersedia, ukuran yang tersedia, dan lain-lain.</p>
            <img src="<?=base_url().'/upload/mitra/belidetail.png'?>" width="50%"><br><br>
            <p>5. Setelah anda yakin akan memesan produk, klik tombol Beli.</p>
            <p>6. apabila stok yang anda pesan habis maka akan muncul peringatan seperti dibawah ini</p>
            <img src="<?=base_url().'/upload/mitra/stokhabis.png'?>" width="50%"><br><br>
            <p>7. Tetapi bila produk benar akan muncul pesan seperti di bawah ini</p>
            <img src="<?=base_url().'/web/berhasil.png'?>" width="50%"><br><br>
            <p>8. setelah itu anda dapat memilih produk lagi atau melihat keranjang belanja, klik menu keranjang belanja</p>
              <img src="<?=base_url().'/upload/mitra/keranjangbelanjauser.png'?>" width="50%"><br><br>
            <p>9. jika anda ingin checkout produk, silahkan klik menu checkout nanti akan muncul tampilan seperti dibawah ini</p>
            <img src="<?=base_url().'/upload/mitra/isidatapenerima.png'?>" width="50%"><br><br>
            <p>10.Isikan Data penerima, selanjutnya klik tambah penerima baru jika anda ingin mengganti penerima pesanan yang sudah ada</p>
            <p>11. akan muncul invoice pesanan seperti dibawah ini</p>
             <img src="<?=base_url().'/upload/mitra/invoicepesananuser.png'?>" width="50%"><br><br>
           <b> <p>12. silahkan transfer ke nomor rekening kami dengan total transfer sebanyak total harga pesanan anda</p>
            <p>13. JANGAN LUPA, setelah transfer, konfirmasi pesanan anda. inputkan data konfirmasi seperti dibawah ini</p>
             <img src="<?=base_url().'/web/wqe.png'?>" width="50%"><br><br>
            <p>14. setelah anda mengkonfirmasi pesanan anda. kami akan memproses pesanan anda. cek ke menu histori pesanan untuk melihat pesanan yang sudah di proses</p>
            <br><br><br>
            TERIMAKASIH
            <br><br><br>
 </div>
  <hr>
</div>					
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