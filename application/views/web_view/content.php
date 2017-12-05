
<!--content-->
<div class="container">
  <div class="row">

  <div class="col-md-9">
    <?php $j=0 ; foreach ($produk as $produk): $j++;  ?>
      <div class="col-md-3">    
      <div class="thumbnail"><div class="img-thumbnail" >
         <img src="<?php echo base_url(); ?>upload/<?php echo $produk->gambar; ?>" alt="..." height="200" width="100%"></div>
            <div class="font-content"><?=$produk->nama?></div>
            <div class="deksripsi"><?= substr($produk->deskripsi, 0,50)?>...</div>
              <div class="caption" style="text-align: center;">
              <a href="<?php echo site_url()?>/home/produk_info/<?=$produk->id_produk ?>"> <input type="button" value="Detail" name="" class="btn btn-warning"> </a><a href="#"  data-toggle="modal" data-target="#<?=$produk->id_produk ?>" class="btn btn-danger" role="button">Beli</a>
            </div>
      </div>
    </div>

      <!-- Modal -->
  <div id="<?=$produk->id_produk ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Beli Produk Ini</h4>
        </div>
        <div class="modal-body col-md-12">
         
              <div class="col-md-4">
          <form action="<?php echo site_url(); ?>/pesanan/simpan_keranjang/<?=$produk->id_produk ?>" method="post">             
                        <div class="thumbnail">
                          <img src="<?php echo base_url(); ?>upload/<?php echo $produk->gambar; ?>" height="300" width="300">
                            <div class="caption">
                                <h4><a href="#"><?=$produk->nama ?></a> </h4>
                                
                            </div>
                         </div>
              </div> 
            <?php $i=0;
            $sql="SELECT * FROM harga WHERE id_produk='$produk->id_produk'";

            $query = $this->db->query($sql); ?>  
       

          <div class="col-md-8">
        
          <hr>
            <b>Deskripsi</b> : <br><i><?=$produk->deskripsi ?> </i>
          <hr> 
         <b>Produk Info</b> : <br><i><?=$produk->produk_info ?>  </i>   
         <hr>  
            <b>Jumlah</b> : 


                  <select class="form-control" name="jumlahPerLiter" id="country<?=$j?>" required="">
                        <option value="">Pilih Jumlah</option>
                     <?php foreach ($query->result() as $data) {?>
                            <option value="<?=$data->id_harga?>"><?=$data->jumlah?> liter</option>
                         <?php }?>

                    </select>
               <hr>
               <table>
                 <tr>
                   <th>as</th>
                 </tr>
                 <td>
                 <th>asas</th>
                   
                 </td>
               </table>
              <b>Harga</b> : 
                    <div name="hargaa" id="province<?=$j?>" >
                        <input type="text" name="hargaa" id="province<?=$j?>" readonly=""    >
                    </div>
              <b>Stok</b> :
                    <div name="stok1" id="stok<?=$j?>" >
                        <input type="text" name="stok1" id="stok<?=$j?>" readonly="" >
                    </div>

 <script type="text/javascript">
        $(document).ready(function(){
           $('#country<?=$j?>').on('change', function(){
                var country_id = $(this).val();
                if(country_id == '')
                {
                    $('#province<?=$j?>').prop('disabled', true);
                }
                else
                {
                    $('#province<?=$j?>').prop('readonly', true);
                    $.ajax({
                        url:"<?php echo site_url() ?>/harga/get_province",
                        type: "POST",
                        data: {'country_id' : country_id},
                        dataType: 'json',
                        success: function(data){
                           $('#province<?=$j?>').html(data);

                        },
                        error: function(){
                            alert('Error occur...!!');
                        }
                    });
                    $('#province<?=$j?>').prop('readonly', true);
                    $.ajax({
                        url:"<?php echo site_url() ?>/harga/get_stok",
                        type: "POST",
                        data: {'country_id' : country_id},
                        dataType: 'json',
                        success: function(data){
                           $('#stok<?=$j?>').html(data);
                           
                        },
                        error: function(){
                            alert('Error occur...!!');
                        }
                    });
                    $('#jumlah_perbarang<?=$j?>').prop('readonly', true);
                    $.ajax({
                        url:"<?php echo site_url() ?>/harga/jumlah_perbarang",
                        type: "POST",
                        data: {'country_id' : country_id},
                        dataType: 'json',
                        success: function(data){
                           $('#jumlah_perbarang<?=$j?>').html(data);
                           
                        },
                        error: function(){
                            alert('Error occur...!!');
                        }
                    });
                }
           }); 
        });
    </script>
          <hr>
                  <label for="exampleInputEmail1">Jumlah Pesan</label>
                  <input type="number" name="jumlah" class="form-group" required="">
                <button type="submit" class="btn btn-success col-md-12 ">Beli</button>
          </form>
        </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



     <?php endforeach; ?>
  </div>

    <div class="col-md-3">
    <div class="categories">
            <ul>  
                <h3>Kategori Produk</h3>               
                          <?php foreach ($kategori as $row) {?>
              <li><a href="<?php echo site_url().'/home/Perkategori/'.$row->id_kategori ?>"><?=($row->nama_kategori)?></a></li>
              <?php } ?>
             </ul>
    <br>
    </div>
    </div>  
    <div class="col-md-3">
    <div class="categories">
            <ul>  
            <h3>Berita Terbaru</h3>               
            <?php foreach ($berita as $row) {?>
             <li><a href="<?php echo site_url().'/home/baca/'.$row->id_berita ?>"><?=($row->judul_berita)?></a></li>
            <?php } ?>                 
            </ul>
    <br>
    </div>
    </div>  

    <div class="col-md-3">
    <div class="categories">
            <ul> 
           <h3>Sosial Media</h3>               
              <br><a href=""><img src="<?=base_url()?>upload/fb.png" width="265px"></a>
                <br><hr>
                  <a href=""><img src="<?=base_url()?>upload/instagram.png" width="265px"></a>                        
          </ul>
    <br>
    </div>
    </div>  

     <div class="col-md-3">
    <div class="categories">
            <ul>  
            <h3>Cek Resi Pengiriman</h3>               
      <div class="foot-links">
       <form method="get" action="http://www.cekresi.com" target="_BLANK">
      <input type="text" placeholder="Masukkan no resi..." name="noresi" style="color: black;" />
      <input type="submit" value="cek resi" style="color: black;" />
      <br />
     <a href="http://www.cekresi.com" target="_BLANK"></a>
      </form>
      </div>             
            </ul>
    <br>
    </div>
    </div> 




</div>
</div>
<!--//content-->