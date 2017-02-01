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
	<form action="<?php echo base_url('gbookcontroller/edit/'.$id->id); ?>" method="post" accept-charset="utf-8">
		<label>Nama</label>
		<input type="text" name="nama" value="<?php echo $id->nama; ?>">
		<br>
		
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $id->email; ?>">
		<br>
		

		<label>NO HP</label>
		<input type="text" name="hp" value="<?php echo $id->hp; ?>">
		<br>
		

		<label>Pesan</label>
		<textarea name="pesan"><?php echo $id->pesan; ?></textarea>
		<br>


		<input type="submit" name="update" value="KIRIM">
	</form>
</body>
</html>