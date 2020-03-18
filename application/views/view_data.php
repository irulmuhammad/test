<!DOCTYPE html>
<html>
<head>
	<title>Data Order</title>
</head>
<body>

<table>
<tr>
	<th>nama</th>
	<th>email</th>
	<th>no_telepon</th>
	<th>paket_wisata</th>
	<th>jumlah_orang</th>
	<th>tgl trip</th>
	<th>lama trip</th>
	<th>alamat</th>
	<th>atas_nama</th>
</tr>

<?php foreach($data as $list) : ?>
	<tr>
		<td><?= $list -> nama; ?></td>
		<td><?= $list -> email; ?></td>
		<td><?= $list -> no_telepon; ?></td>
		<td><?= $list -> paket_wisata; ?></td>
		<td><?= $list -> jumlah_org; ?></td>
		<td><?= $list -> tanggal_trip; ?></td>
		<td><?= $list -> lama_trip; ?></td>
		<td><?= $list -> catatan; ?></td>
		<td><?= $list -> alamat; ?></td>
		<td><?= $list -> atasnama; ?></td>
	</tr>

	<?php endforeach; ?>
	
</table>
<a href="<?php echo base_url('page/form_pesanan'); ?>">Pesan</a>

</body>
</html>