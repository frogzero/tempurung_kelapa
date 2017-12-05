<!--content-->
    <div class="container">
  <div class="row">
  <div class="col-md-12">
  <div class="tabela">    

   <table class="table table-striped">
      <thead>
        <tr>
         <th>No</th>
          <th>Produk</th>
          <th>Jumlah yang di pilih</th>
          <th>Jumlah pesanan</th>
          <th style="text-align: left;">Harga</th>
          <th style="text-align: right;">Subtotal</th>
          <th style="text-align: right;"></th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $i=0;
          foreach ($this->cart->contents() as $items) : 
          $i++;
        ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $items['name'] ?></td>
          <td><?= $items['size'] ?> liter</td>
          <td><?= $items['qty'] ?></td>
          <td align="right"><?= number_format($items['price'],0,',','.') ?></td>
          <td align="right"><?= number_format($items['subtotal'],0,',','.') ?></td>
          <td></td>
          <td><a href="<?=site_url()?>/home/hapus_cart/<?=$items['rowid']?>">Hapus</a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
            <tfoot>
                <tr>
                    <td align="right" colspan="5"><b>Total</b> </td>
                    <td align="right"><?= number_format($this->cart->total(),0,',','.'); ?></td>
                </tr>                                 
                 <tr>
                    <td align="right" colspan="5"><b>Biaya Ongkir</b> </td> <?php foreach ($ongkir as $num_rows => $ongkir_data) { $total_biaya='';
                    $total_biaya=$ongkir->harga_ongkir+$this->cart->total();
                    ?>
                    <td align="right"><?=number_format($ongkir->harga_ongkir,0,',','.')?></td><?php } ?>
                </tr>
                <tr>
          <form action="<?=site_url('Order/') ?>" method="POST" >
                     <td align="right" colspan="5"><b>Total Biaya</b> </td>
                    <td align="right"><input type="text" name="total_biaya" value="<?=$total_biaya?>"  hidden> <?=number_format($total_biaya,0,',','.')?></td>
                </tr>
                <tr>
                </tr>                                     
                  <tr><td></td>
                    
                </tr>
            </tfoot>

        </table>
        <div class="col-md-12"><button class="form-group btn btn-success col-md-12" type="submit" onclick="myFunction()" />ORDER</button></div>	
        </form>
        <br><br>
       </a>
        </div>
        </div>
        </div>
        </div>



<script>
function myFunction() {
    window.open("<?php echo site_url('home'); ?>");
}

</script>