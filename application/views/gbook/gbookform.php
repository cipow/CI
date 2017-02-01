<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FORM GUEST BOOK</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php echo validation_errors(); ?>
	<form action="<?php echo base_url('gbookcontroller/tambah'); ?>" method="post" accept-charset="utf-8">
		<label>Nama</label>
		<input type="text" name="nama" value="<?php echo set_value('nama'); ?>" placeholder="Masukkan Nama mu....">
		<br>
		
		<label>Email</label>
		<input type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Masukkan Email mu....">
		<br>
		

		<label>NO HP</label>
		<input type="text" name="hp" value="<?php echo set_value('hp'); ?>" placeholder="no hp...">
		<br>
		

		<label>Pesan</label>
		<textarea name="pesan"><?php echo set_value('pesan'); ?></textarea>
		<br>


		<input type="submit" name="kirim" value="KIRIM">
	</form>
</body>
</html>