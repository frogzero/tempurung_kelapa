







<html>
<head>
	<title>Laporan Pesanan</title>
</head>
<body>

<h4 style="text-align: center;">Laporan Data Pesanan</h4>
<hr>
<p>Dibuat Tanggal : <?=date('Y-m-d');?></p>
<style>
body{
	width:793px;
}
table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
}
</style>

<table border="1" align="center" width="auto" >
 <tr>
    <td width="25" height="19" align="center" style="text-align: left"><strong>No </strong></td>
    <td width="77" align="center" style="text-align: left"><strong>Id Konsumen</strong></td>
    <td width="79" align="center" style="text-align: left"><strong>Id Pesan </strong></td>
    <td width="103" align="center" style="text-align: left"><strong>Nama Konsumen</strong></td>
    <td width="83" align="center" style="text-align: left"><strong>Nama Penerima</strong></td>
    <td width="140" align="center" style="text-align: left"><strong>Alamat Penerima</strong></td>
    <td width="68" align="center" style="text-align: left"><strong>Total Pesan</strong></td>
    <td width="77" align="center" style="text-align: left"><strong>Tanggal Pesan</strong></td>
    <td width="81" align="center" style="text-align: left"><strong>Status</strong></td>
  </tr>
<?php
if( ! empty($pesanan)){
	$no = 1;
	foreach($pesanan as $data){
		echo "<tr>";
		echo "<td>".$no."</td>";
		echo "<td>".$data->id_konsumen."</td>";
		echo "<td>".$data->idPesan."</td>";
		echo "<td>".$data->namaKonsumen."</td>";
		echo "<td>".$data->nama_penerima."</td>";
		echo "<td>".$data->alamat_penerima.",<br>
		".$data->kota_penerima.",".$data->provinsi_penerima.",".$data->no_hp_penerima."
		</td>";
		echo "<td>".$data->totalBayar."</td>";
		echo "<td>".$data->tanggalPesan."</td>";
		echo "<td>".$data->status_bayar."</td>";
		echo "</tr>";
		$no++;
	}
}
?>
</table>

</body>
</html>



