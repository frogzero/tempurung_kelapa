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
                                Tabel Ongkir
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
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th align="center">Kota Tujuan</th>    
                                        <th align="right">Ongkir</th>
                                        <th align="right">Aksi</th>                                     
                                    </tr>
                                </thead>
                       
                                <tbody>                            
                                     <tr><?php $i=0;
                       foreach ($ongkir as $row): $i++; 
                        ?>
                                        <td><?=($i)?></td>
                                        <td><?=($row->provinsi_tujuan)?></td>
                                        <td><?=($row->harga_ongkir)?></td>
                                        <td align="center">
                                            <a href="<?php echo site_url().'/admin/ongkir/Ubah/'.$row->id_ongkir; ?>" <button class="btn btn-danger waves-effect">Ubah</button></a>
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