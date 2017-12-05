 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Menu Berita / Artikel</h2>
              </div>
              <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Tambah Artikel</h2>
                        </div>
                        <div class="body">
                        
                         <?php echo form_open_multipart('admin/berita/simpanBerita', ['id'=>'form_validation'] ,['method'=>'post'])?>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul" required>
                                        <label class="form-label">Judul Berita</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tgl" required value="<?=date('Y-m-d')?>" readonly>
                                        
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">

                                            <?php $this->load->view('admin/editor') ?>
                                           
                                           <textarea name="isi" class="form-control"  palaceholder="Isi Berita"></textarea>
                                        </div>
                                </div>
                                <div class="form-group form-float">
                                      <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="pic">
                                        </div>
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