<?php
	require_once('db.php');
	if(isset($_POST['user'])) {
		$user = $_POST['user']; //mengambil data yang di passing dari index.php kemudian disimpan di $user
		$md5 = md5($user); //diparsing menjadi md5 menggunakan function md5()
		$q = "insert into users values('', '$user', '$md5')"; //untuk query penyimpanan disimpan ke 2 bagian yaitu teks asli dan bagian enkripsi
		if(mysqli_query($c, $q)) {
			header('location:index.php');
		} else {
			die('Masih ada yang bermasalah');
		}
	}
?>