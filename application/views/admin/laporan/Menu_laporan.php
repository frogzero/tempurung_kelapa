 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Menu Laporan</h2>
              </div>
              <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <div class="row">
                        <div class="col-md-12">Laporan Pesanan</div><br>
                        <div class="col-md-2">
                        <a href="<?=site_url('admin/laporan/laporan_pesanan')?>"><button class="btn btn-success waves-effect">Cetak Semua Laporan</button></a></div>
                        
                        <form action="<?=site_url('admin/laporan/laporan_pesanan_per_periode')?>" method="POST">
                        <div class="col-md-3">
                            <input type="date" name="tgl_awal" class="form-control" required="" >
                        </div>
                            <div class="col-md-3">
                            <input type="date" name="tgl_akhir" class="form-control" required=""></div>   
                              <button type="submit" name="btn" class="btn btn-success waves-effect">Cetak Per Periode</button>    
                                  </form>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <div class="row">
                        <div class="col-md-12">Laporan Detail Pesan</div><br>
                        <div class="col-md-2">
                        <a href="<?=site_url('admin/laporan/laporan_detail_pesanan')?>"><button class="btn btn-success waves-effect">Cetak Semua Laporan</button></a></div>
                        
                        <form action="<?=site_url('admin/laporan/laporan_detail_pesanan_per_periode')?>" method="POST">
                        <div class="col-md-3">
                            <input type="date" name="tgl_awal" class="form-control" required="" >
                        </div>
                            <div class="col-md-3">
                            <input type="date" name="tgl_akhir" class="form-control" required=""></div>   
                              <button type="submit" name="btn" class="btn btn-success waves-effect">Cetak Per Periode</button>    
                                  </form>
                        </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <div class="row">
                        <div class="col-md-12">Laporan Konsumen</div><br>
                        <div class="col-md-2">
                        <a href="<?=site_url('admin/laporan/laporan_konsumen')?>"><button class="btn btn-success waves-effect">Cetak Semua Laporan</button></a></div>
                        </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <div class="row">
                        <div class="col-md-12">Laporan Produk</div><br>
                        <div class="col-md-2">
                        <a href="<?=site_url('admin/laporan/laporan_produk')?>"><button class="btn btn-success waves-effect">Cetak Semua Laporan</button></a></div>
                        </div>
                        </div>
                    </div>
                </div>



            </div>
            <!-- #END# Basic Examples -->
        </div>

 
    </section>