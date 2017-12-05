 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Menu Stok Produk</h2>
              </div>
              <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>STOK PRODUK</h2>
                        </div>
                        <div class="body">
              
                        <form action="<?=site_url().'/admin/stok/simpanStok/'.$produk->id_harga ?>" method="post">  
                              
                               <div class="form-group form-float"> <label class="form-label"></label>
                                </div>

                                <!---stok-->
                                <div class="row clearfix">
                                           <div class="col-sm-3">
                                <div class="form-group form-float">
                                 <label class="form-label">stok</label>
                                    <div class="form-line">
                                    <?php foreach ($size as $ukuran) {?>
                                        <input type="text" class="form-control" name="stok" placeholder="0" value="<?=$ukuran->stok?>">
                                        <?php } ?>

                                        </div>
                                </div>     
                                </div> 

                                </div> 
                                <!---End Stock -->

                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                          </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>