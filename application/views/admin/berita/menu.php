 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Menu Artikel</h2>
              </div>
              <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tabel Berita
                            </h2>
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
                        <a href="<?php echo site_url(); ?>/admin/berita/tambahBerita"><button class="btn btn-success waves-effect">Tambah Berita</button></a>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Berita</th>
                                        <th>Tanggal Posting</th>
                                        <th>Isi Berita</th>
                                        <th align="center">Aksi</th>                                       
                                    </tr>
                                </thead>
                       
                                <tbody>
                                <?php 
                                $i=0;
                                foreach ($berita as $produk):  
                                $i++; 

                                  ?>                                  
                                     <tr>
                                        <td><?=$i ?></td>
                                        <td><?=$produk->judul_berita ?></td>
                                        <td><?=$produk->tgl_posting ?></td>
                                        <td><?= substr($produk->isi, 0,500)?></td>
                                        <td align="center">
                                            <a href="<?php echo site_url(); ?>/admin/berita/update/<?=$produk->id_berita ?>"><button class="btn btn-primary waves-effect">Edit</button></a> |
                                            <a href="<?php echo site_url(); ?>/admin/berita/hapus/<?=$produk->id_berita ?>"  onclick="return confirm('Yakin Hapus ?')"><button class="btn btn-danger waves-effect">Hapus</button></a>
                                        </td>
                                        
                                    </tr>
                                <?php endforeach; ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>

 
    </section>