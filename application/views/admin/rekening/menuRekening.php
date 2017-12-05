 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Menu Ongkir</h2>
              </div>
              <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tabel Rekening
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
                        <a href="<?php echo site_url().'/admin/rekening/tambah/'?>" <button class="btn btn-danger waves-effect">Tambah</button></a>
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th align="center">Nama Rekening</th>    
                                        <th align="right">Atas Nama</th>  
                                        <th align="right">No Rekening</th>
                                        <th align="right">Aksi</th>                                     
                                    </tr>
                                </thead>
                       
                                <tbody>                            
                                     <tr><?php $i=0;
                       foreach ($rekening as $row): $i++; 
                        ?>
                                        <td><?=($i)?></td>
                                        <td><?=($row->nama)?></td>
                                         <td><?=($row->atas_nama)?></td>
                                        <td><?=($row->no_rekening)?></td>
                                        <td align="center">
                                            <a href="<?php echo site_url(); ?>/admin/ongkir/hapusRekening/<?=$row->id_rekening ?>"  onclick="return confirm('Yakin Hapus ?')"><button class="btn btn-danger waves-effect">Hapus</button></a>
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