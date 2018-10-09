<?php
	$hostname  = "localhost";
	$username = "root";
	$pass     = "";
	$db       = "dataMhs";
	$con     = new mysqli($hostname, $username, $pass, $db);

	if($con==false){
		die("koneksi gagal". $con->connect_error);
	}
		if (isset($_POST['submit'])) {
			$nama=$_POST['nama'];
			$nim=$_POST['nim'];
			$kelas=$_POST['kelas'];
			$jenisk=$_POST['jeniskelamin'];
			$hobi=implode(", ", $_POST['hobi']);
			$fakultas=$_POST['fakultas'];
			$alamat=$_POST['alamat'];
			
	$sql="INSERT INTO mahasiswa(nama,nim,kelas,jeniskelamin,hobi,fakultas,alamat) 
	VALUES ('$nama','$nim','$kelas','$jenisk','$hobi','$fakultas','$alamat')";
	if(mysqli_query($con,$sql)){
		echo "Database sudah masuk";
	}else{
		die(mysqli_error($con));
	}
}
	?>