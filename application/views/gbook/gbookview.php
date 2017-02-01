<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gust Book versi 1</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php if($this->session->flashdata('notif')): ?>
		<p><?php echo $this->session->flashdata('notif'); ?></p>
	<?php endif; ?>
	<a href="<?php echo base_url('gbookcontroller/tambah'); ?>">Tambah Data</a>
	<?php if($isi){ ?>
	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Email</th>
				<th>NO HP</th>
				<th>Pesan</th>
				<th>OPSI</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($isi as $data): ?>
			<tr>
				<td><?php echo $data->nama; ?></td>
				<td><?php echo $data->email; ?></td>
				<td><?php echo $data->hp; ?></td>
				<td><?php echo $data->pesan; ?></td>
				<td><a href="<?php echo base_url('gbookcontroller/edit/'.$data->id); ?>" >EDIT</a> || <a href="<?php echo base_url('gbookcontroller/hapus/'.$data->id); ?>" onclick="return confirm('anda yakin..');">HAPUS</a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	<?php }
	else
	{
		echo "<h1>KOSONG</h1>";
		} ?>
</body>
</html>