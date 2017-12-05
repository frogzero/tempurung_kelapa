 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Menu Tambah Ongkir</h2>
              </div>
              <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Tambah Ongkir</h2>
                        </div>
                        <div class="body">
                        <form action="<?=site_url()?>/admin/ongkir/SimpanRekening/" method="POST">
                               <div class="form-group form-float">
                                <label class="form-label">Nama Bank</label>
                                    <div class="form-line">                                   
                                        <input type="text" class="form-control" name="nama_bank"  required>                                       
                                        
                                    </div>
                                </div>
                                  <div class="form-group form-float">
                                <label class="form-label">Atas Nama</label>
                                    <div class="form-line">                                   
                                        <input type="text" class="form-control" name="atas_nama"  required>    
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                <label class="form-label">Nomer Rekening</label>
                                    <div class="form-line">                                   
                                        <input type="text" class="form-control" name="no_rekening"  required>                                       
                                        
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                          </form> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>