<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url()."assets/admin/"; ?>images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Halaman Admin</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?=site_url('akun/logout')?>"><i class="material-icons">input</i>Sign Out</a></li>
                            <li><a href="<?=site_url('akun/ubah_passwortd')?>"><i class="material-icons">lock_open</i>Ubah Password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?php echo site_url()."/admin/homeAdmin" ?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                      <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">reorder</i>
                            <span>Artikel</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                               <a href="<?php echo site_url() .'/admin/berita/tampil_berita' ?>">Berita</a> 
                            </li>
                            
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo site_url() .'/admin/testimoni/tampil_testimoni' ?>">
                            <i class="material-icons">label</i>
                            <span>Testimoni</span>
                        </a>

                    <li>

                                     
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">reorder</i>
                            <span>Produk</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                               <a href="<?php echo site_url() .'/admin/produk/tampil_produk' ?>">Produk</a> 
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/kategori_produk/tampil_kategori'); ?>">Kategori Produk</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/stok/ketersediaanStok/'); ?>">Lihat Stok</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">shopping_cart</i>
                            <span>Pesanan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo site_url('admin/pesanan/pesananBelumKonfirmasi'); ?>">Pesanan Belum Konfirmasi</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/pesanan/pesananSudahKonfirmasi'); ?>">Pesanan Sudah Konfirmasi</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/pesanan/pesananSudahProses'); ?>">Pesanan Yang sudah Di Proses</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/pesanan/semuaPesanan'); ?>">Semua Pesanan</a>
                            </li>
                        </ul>
                    </li>

                     <li>
                        <a href="<?php echo site_url() .'/admin/ongkir/' ?>">
                            <i class="material-icons">airport_shuttle</i>
                            <span>Ongkir</span>
                        </a>
                        
                    </li>


                     <li>
                        <a href="<?php echo site_url() .'/admin/resi_pengiriman/resi/' ?>">
                            <i class="material-icons">done</i>
                            <span>Resi Pengiriman</span>
                        </a>
                        
                    </li>


                   <li>
                        <a href="<?php echo site_url() .'/admin/konsumen'?>">
                            <i class="material-icons">supervisor_account</i>
                            <span>Konsumen</span>
                        </a>
                    </li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">label</i>
                            <span>Review</span>
                        </a>
                        <ul class="ml-menu">
                               <li>
                                <a href="<?php echo site_url() .'/admin/review/semuaReview'?>">Semua Review</a>
                            </li>
                        </ul>
                    </li>

                     <li>
                        <a href="<?php echo site_url() .'/admin/Menu_laporan' ?>">
                            <i class="material-icons">print</i>
                            <span>Laporan</span>
                        </a>
                        
                    </li>

                     <li>
                        <a href="<?=site_url().'/admin/rekening'?>">
                            <i class="material-icons">account_balance</i>
                            <span>Rekening</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?=site_url().'/admin/slider'?>">
                            <i class="material-icons">settings</i>
                            <span>Slider</span>
                        </a>
                    </li>

                                   </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="javascript:void(0);">Admin</a>.
                </div>
                
            </div>
            <!-- #Footer -->
        </aside>