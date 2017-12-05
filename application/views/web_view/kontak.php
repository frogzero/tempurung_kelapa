<!--content-->
<br>
<br><!--content-->

		<div class="container">
	<div class="row">
	<div class="col-md-8">
	<div class="tabela">	
	<div class="categories">
		<h3>KONTAK KAMI </h3></div>
		<div class="media">

    <div class="isi" style="text-align: left;">
 <h3>Agus Winarno</h3><br>
No KTP  : 3404011601720002<p>
No Telp : 085728491701</p>
<address><strong>Kami
Alamat Di jalan	Murangan 7 RT 04 RW 22 Triharjo Sleman Yogyakarta</address></strong>
<p>No Rekening : </p>
<?php 
	$sql="SELECT * from rekening";
	$query = $this->db->query($sql);			
	foreach ($query->result() as $data){
				?>
				<br> <?=$data->nama?> :  <?=$data->atas_nama?>, No rek :  <?=$data->no_rekening?>  <br>
				<?php } ?>

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