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
                            <h2>Tambah Testimoni</h2>
                        </div>
                        <div class="body">
                        
                         <?php echo form_open_multipart('admin/testimoni/simpanTestimoni', ['id'=>'form_validation'] ,['method'=>'post'])?>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="pekerjaan" required>
                                        <label class="form-label">Pekerjaan</label>
                                    </div>
                                </div>                               
                                <div class="form-group form-float">
                                    <div class="form-line">                                           
                                           <textarea name="isi" class="form-control"  palaceholder="Isi Berita" placeholder="Isi"></textarea>
                                        </div>
                                </div>
                                <div class="form-group form-float">
                                      <div class="form-group">
                                            <label>Foto</label>
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