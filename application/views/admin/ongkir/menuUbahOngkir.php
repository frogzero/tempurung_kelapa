<?php
$id_ongkir = $ongkir->id_ongkir;
if($this->input->post('submitupdate')){
$harga_ongkir = set_value('harga_ongkir');
}else{
$harga_ongkir =$ongkir->harga_ongkir;
}
?>


 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Menu ongkir</h2>
              </div>
              <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Ongkir</h2>
                        </div>
                        <div class="body">
                        <?php echo validation_errors();?>
                         <?php echo form_open_multipart('admin/ongkir/UbahOngkir/'. $id_ongkir, ['id'=>'form_validation'] ,['method'=>'post'])?>
                               <div class="form-group form-float">
                                <label class="form-label">Judul Berita</label>
                                    <div class="form-line">                                   
                                        <input type="text" class="form-control" name="harga_ongkir" value="<?php echo $harga_ongkir; ?>" required>                                       
                                        
                                    </div>
                                </div>
                                <input type="hidden" name="submitupdate" value="1"/>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                           <?php form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>