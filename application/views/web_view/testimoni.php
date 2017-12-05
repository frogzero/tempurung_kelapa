<!--content-->
<br>
<!--content-->
<div class="container">
	<div class="row">
<div class="categories"><h3>Testimoni</h3></div>
<!--content-->
<br>
<br><!--content-->
<br>
	<div class="col-md-12">
	 <?php foreach ($testimoni as  $num_rows => $row) {?>
  <div class=" col-md-3"><div class="thumbnail">
    <a href="<?=site_url('home/baca_testimoni')?>/<?=$row->id_testimoni?>">
      <img src="<?=base_url()?>upload/<?=$row->gambar?>" alt="..." width="230px"" alt="...">   </a><hr>
      <?=$row->nama?><br>
      <i><?=$row->pekerjaan?></i></div>
 

  </div><?php } ?>
	</div>
</div>
</div>


<!--Produk Terlaris-->