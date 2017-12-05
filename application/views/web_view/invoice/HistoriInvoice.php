<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Checkout</title>
    
    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="6">
            <table>
                        <tr>
                           <?php foreach ($invoice as $row) { ?>
                            <td>
                                Invoice #: <?=$row->idPesan; ?><br>
                            </td>
                            
                     
                        </tr>
                    </table>
                </td>
            </tr>
         
            <tr class="information">
                <td colspan="6">
                    <table>
                        <tr>
                            <td>
                                <b>Data Penerima </b> <br>
                                Nama : <?=$row->namaPem; ?> <br>
                                Alamat :<?=$row->alamatPem; ?> <br>
                                Kota : <?=$row->kotaPem; ?><br>
                                Provinsi :<?=$row->provinsiPem; ?> <br>
                                Kode Pos :<?=$row->kodeposPem; ?> <br>
                                No Hp :<?=$row->noHpPem; ?> <br>
                            </td>
                            
                            <td>
                            <?php } ?>
                             
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>            
            <tr class="heading">
                <td>No</td>
                <td>Nama</td>
                <td align="center">Jumlah Literan</td>
                <td>Jumlah Yang di Pesan</td>
                <td align="right">harga</td>
                <td align="right">Total</td>
            </tr>
            <?php 
                    $i=0;
                    $total=0;

                    foreach($dataaa as $num_row=>$keranjang) : 
                        $subtotal=$keranjang->jumlah*$keranjang->harga_barang;
                    $total+=$subtotal;
                    $totBayar=$keranjang->totBayar;
                    $i++;
                   
                ?>
            <tr class="item">
              
                    <td><?= $i ?></td>
                    <td><?=$keranjang->namaProduk ?></td>
                    <td align="center"><?=$keranjang->size ?> Liter</td>
                     <td align="center"><?=$keranjang->jumlah ?></td>
                    <td align="right">Rp.<?=$keranjang->harga_barang ?></td>
                    <td align="right">Rp.
                   <?php echo $subtotal; ?>
                </td>
                    
               
                <?php 
                

                endforeach; ?>
                </tr>
            
            
            <tr class="total" >
                
                <td align="right" colspan="6">
                   Total : Rp. <?php echo $total; ?><br>
                   Total Keseluruhan + Ongkir :Rp. <?php echo $totBayar; ?>
                </td>               
            </tr>
        </table>
        <hr>
       <p>
                                Silahkan transfer ke Salah Satu nomor rekening Kami : <br>
                               <?php foreach ($rekening as $num_row => $rekening) {?> 
                               <b><?=$rekening->nama?></b>
                               <b><u><?=$rekening->no_rekening?> </u></b>-Atas nama:  <b><?=$rekening->atas_nama?></b><br>
                               <?php } ?>
                               
                               Dengan total transfer
                               Rp.<?php echo $totBayar; ?></p>
                               <hr>
    </div>
    <div align="center"><a href="#" onclick="return myFunction();">Print</a></div>
   

    <script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>
