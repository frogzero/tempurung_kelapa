<?php
$id_berita = $berita->id_berita;
if($this->input->post('submitupdate')){
$judul_berita = set_value('judul_berita');
$isi = set_value('isi');
}else{
$judul_berita =$berita->judul_berita;
$isi =$berita->isi;
}
?>


 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Menu Kategori</h2>
              </div>
              <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Kategori baru</h2>
                        </div>
                        <div class="body">
                        <?php echo validation_errors();?>
                         <?php echo form_open_multipart('admin/berita/update/'. $id_berita, ['id'=>'form_validation'] ,['method'=>'post'])?>
                               <div class="form-group form-float">
                                <label class="form-label">Judul Berita</label>
                                    <div class="form-line">                                   
                                        <input type="text" class="form-control" name="judul_berita" value="<?php echo $judul_berita; ?>" required>                                       
                                        
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">

                                            <?php $this->load->view('admin/editor') ?>
                                           
                                           <textarea name="isi" class="form-control"  palaceholder="Isi Berita"><?=$isi?></textarea>
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