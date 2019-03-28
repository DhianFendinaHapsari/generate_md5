<?php require_once('db.php'); ?>
<?php 

	$q = "select * from users";
	$sql = mysqli_query($c, $q);

?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="row py-5">
		<div class="col-3"></div>
		<div class="col-6">
			<form action="aksi.php" method="post">
				<input type="text" class="form-control" name="user" placeholder="Masukan Nama"> <br>
				<button type="submit" class="btn btn-primary float-right">Simpan</button>
			</form>
			<table class="table py-5">
				<thead>
					<th>Asli</th>
					<th>MD5</th>
				</thead>
				<tbody>
				<?php foreach ($sql as $data) { ?>
					<tr>
						<td>
							<?php echo $data['nama']; ?>
						</td>
						<td>
							<?php echo $data['password']; ?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="col-3"></div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>