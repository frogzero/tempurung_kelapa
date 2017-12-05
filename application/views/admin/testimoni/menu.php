 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Menu Testimoni</h2>
              </div>
              <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tabel Testimoni
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
                        <a href="<?php echo site_url(); ?>/admin/testimoni/tambahTestimoni"><button class="btn btn-success waves-effect">Tambah Testimoni</button></a>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Pekerjaan </th>
                                        <th>Isi</th>
                                        <th>gambar</th>
                                        <th align="center">Aksi</th>                                       
                                    </tr>
                                </thead>
                       
                                <tbody>
                                <?php 
                                $i=0;
                                foreach ($testimoni as $produk):  
                                $i++; 

                                  ?>                                  
                                     <tr>
                                        <td><?=$i ?></td>
                                        <td><?=$produk->nama ?></td>
                                        <td><?=$produk->pekerjaan ?></td>
                                        <td><?= substr($produk->isi_testimoni, 0,500)?></td>
                                        <td><img src="<?=base_url('upload/'.$produk->gambar)?>" width="50px"></td>
                                        <td align="center">
                                           
                                            <a href="<?php echo site_url(); ?>/admin/testimoni/hapus/<?=$produk->id_testimoni ?>"  onclick="return confirm('Yakin Hapus ?')"><button class="btn btn-danger waves-effect">Hapus</button></a>
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