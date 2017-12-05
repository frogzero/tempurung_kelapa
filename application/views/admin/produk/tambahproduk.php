 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Menu Produk</h2>
              </div>
              <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Tambah Produk baru</h2>
                        </div>
                        <div class="body">
                         <?php echo form_open_multipart('admin/produk/simpan', ['id'=>'form_validation'] ,['method'=>'post'])?>
                               <div class="form-group form-float"> <label class="form-label"><?php echo $kode ?></label>
                                    <div class="form-line">
                                   

                                        <input type="hidden" class="form-control" name="kode" required value="<?php echo $kode ?>">
                                       
                                    </div>
                                </div>

                               <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" required>
                                        <label class="form-label">Nama Produk</label>
                                    </div>
                                </div>
                                
                       
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select name="kategori" class="form-control show-tick">
                                        <option value="">-- Please select --</option>
                                        <?php foreach ($kategori as $row) {?>
                                        <option value="<?=($row->id_kategori)?>"><?=($row->nama_kategori)?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                </div>
                                  
                                <div class="form-group form-float">
                                
                                        <label class="form-label">Harga</label>
                                         <table class="table-common">
                                         
      <tr><th style="width:200px">Jumlah /liter</th><th style="width:200px">harga</th><th style="width:200px">stok</th></tr>
      <td> <input type="text" name="jumlah_barang[]"></td><td><input type="text" name="harga_barang[]"></td><td><input type="text" name="stok_harga[]"></td></tr>
 </table>
 
<a onclick="tambah()" style="cursor:pointer;text-decoration:underline;"><br>Tambah form</a>
  </div>


    <div class="form-group form-float input-group after-add-more form-group">
          <div class="control-group input-group" style="margin-top:10px">
            <div class="input-group-btn">    
      </table>
            
            </div>
          </div>
        </div>
                    


<script>
function tambah(){
$(".table-common").append('<tr class="ze" id="item"><td> <input type="text" name="jumlah_barang[]"></td><td><input type="text" name="harga_barang[]"></td><td><input type="text" name="stok_harga[]"></td><td><button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Hapus</button></td></tr>');
}        
function hapus(){
  $(this).parents(".ze").remove();
}

                      </script>      <!-- Copy Fields -->
                                  

                                <!---stok-->
                                <div class="row clearfix">
                                </div> 
                                <!---End Stock -->
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="deskripsi" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Description</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="produk_info" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Produk Info</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                   
                                        <label>Upload Gambar</label>
                                        <input type="file"  name="pic" />
                                 
                                </div>

                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                           <?php form_close() ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>