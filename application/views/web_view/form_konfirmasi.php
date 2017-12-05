<?php
$kodeBayar = $bayar->id_bayar;
if($this->input->post('submitupdate')){
$catatan = set_value('catatan');
}
?>

<!--content-->
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="tabela">						
		<?php echo validation_errors();?>
     <?php echo form_open_multipart('konfirmasi_pesanan/konfirmasi/'. $kodeBayar, ['id'=>'form_validation'] ,['method'=>'post'])?>
       <div class="row" >
           <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Kode Pesanan</label><br>
      <input type="text" hidden="true" placeholder="nama" name="nama" value="<?php echo $kodeBayar; ?>" >
       <label for="exampleInputEmail1"><u><?php echo $kodeBayar; ?></u></label>
          </div>
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Transfer Atas Nama</label>
            <input type="text" class="form-control" name="atas_nama" required>
          </div> 
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Catatan Pengiriman</label>
            <textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Catatan Pengiriman. etc. Mohon Packing Yang rapi" name="catatan" required></textarea>
          </div>  
           <div class="form-group form-float col-md-12">
                                   
                                        <label>Upload Gambar</label>
                                        <input type="file"  name="pic" />
                                 
                                </div>
          <div class="form-group col-md-12" >
           <input type="hidden" name="submitupdate" value="1"/>
          <button type="submit"  class="btn btn-primary col-md-12" >Konfirmasi Pesanan</button>
          </div>
         </div>
         <?php form_close() ?>

			 <br><br>
						
		
</div>
</div>
</div>
</div>
<!--Produk Terlaris-->


