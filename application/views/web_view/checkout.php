<!--content-->
		<div class="container">
	<div class="row">
	<div class="col-md-12">
	<div class="tabela">	


         <hr>
         <h3>Data konsumen</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Provinsi</th>
                    <th>Kota</th>
                    <th>Email</th>
                    <th>No Hp</th>
                 </tr>
            </thead>

            <?php foreach($result_detail_konsumen as $num_row=>$row){?>
    <tbody>
      <tr>
        <td><?=($row->nama)?></td>
        <td><?=($row->alamat)?></td>
        <td><?=($row->provinsi)?></td>
        <td><?=($row->kota)?></td>
        <td><?=($row->email)?></td>
        <td><?=($row->nohp)?></td>

      </tr>
     
     <?php }?> 
             </tbody>
        </table>					
                 <hr>
        <h3>Data Penerima</h3>
       <form action="<?php echo site_url(); ?>/pesanan/simpanPenerima/" method="POST"  >
       <div class="row" >
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Atas Nama : </label>
             <label for="exampleInputEmail1"></label>
           </div>
           <div class="form-group col-md-12">
           <button class="form-group btn btn-success"  onclick="ClearFields()">Tambah Baru </button><br><br>  Klik Tombol di atas jika ingin menambahkan Alamat baru<br>
           </div>
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Nama Penerima</label>
            <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="<?php echo $row->nama; ?>" required >
          </div>
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Alamat</label>
            <textarea name="alamat"  class="form-control" id="alamat"  placeholder="Masukan alamat pengiriman" ><?php echo $row->alamat; ?></textarea>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Kota</label>
            <input type="text" class="form-control" id="kota" placeholder="kota" name="kota" value="<?php echo $row->kota; ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Provinsi</label>

            <select class="form-control" name="provinsi" >
            
            <option value="<?php echo $row->provinsi; ?>" selected="" ><?php echo $row->provinsi; ?></option>
            <?php foreach ($ongkir as $num_row => $ongkir) { ?>
            <option value="<?=$ongkir->provinsi_tujuan?>" ><?=$ongkir->provinsi_tujuan?></option>
            <?php } ?>
          </select>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Kode pos</label>
            <input type="text" class="form-control" id="kodepos" placeholder="kode pos" name="kodepos"  value="<?php echo $row->kodepos; ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">No hp</label>
            <input type="text" class="form-control" id="nohp" placeholder="No Hp" name="nohp" value="<?php echo $row->nohp; ?>" required>
          </div>
         </div>      
            <button class="form-group btn btn-success col-md-12" type="submit" >Simpan</button> <br>



<script>
function ClearFields() {
     document.getElementById("nama").value = "";
     document.getElementById("alamat").value = "";
     document.getElementById("kota").value = "";
     document.getElementById("provinsi").value = "";
     document.getElementById("kodepos").value = "";
     document.getElementById("nohp").value = "";


}
</script>

                </form>



			   <div class="clearfix"> </div>
			   <br><br>
						
		
</div>
</div>
	</div>
	</div>
<!--Produk Terlaris-->