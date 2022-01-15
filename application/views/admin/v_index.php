<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

<div class="container">
<a href="<?=site_url('Backend/tambah')?>"class="btn btn-info">Tambah Data</a> <hr>
<a href="<?= BASE_URL('index.php?/Login/logout'); ?>" class="btn btn-Danger">Keluar</a>

	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nis</th>
				<th>Nama</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($isi as $row) {
			?>
				<tr>
					<td> <?=$no++; ?> </td>
					<td> <?=$row->Nis; ?> </td>
					<td> <?=$row->Nama; ?> </td>
					<td> <?=$row->Alamat; ?> </td>
					<td>
					<a href="<?=site_url('Backend/hapus/' . $row->No) ?>"class="btn btn-danger">Del</a>

					<a href="<?=site_url('Backend/edit/' . $row->No) ?>"class="btn btn-warning">Edit</a>
					</td>
					
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>

<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>