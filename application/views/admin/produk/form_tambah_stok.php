 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Menu stok</h2>
              </div>
              <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Tambah Stok baru</h2>
                        </div>
                        <div class="body">
                         <?php echo form_open_multipart('admin/stok/simpan_stok_baru', ['id'=>'form_validation'] ,['method'=>'post'])?>


                               <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="id_produk" value="<?=$produk->id_produk?>"  > 
                                        <input type="text" class="form-control" name="nama" value="<?=$produk->nama?>" readonly>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                
                                        <label class="form-label">Stok Baru</label>
                                         <table class="table-common">
                                         
      <tr><th style="width:200px">Jumlah /liter</th><th style="width:200px">harga</th><th style="width:200px">stok</th></tr>
      <td> <input type="text" name="jumlah_barang"></td><td><input type="text" name="harga_barang"></td><td><input type="text" name="stok_harga"></td></tr>
 </table>
 
  </div>


    <div class="form-group form-float input-group after-add-more form-group">
          <div class="control-group input-group" style="margin-top:10px">
            <div class="input-group-btn">    
      </table>
            
            </div>
          </div>
        </div>
                    



                      </script>      <!-- Copy Fields -->

                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                           <?php form_close() ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>