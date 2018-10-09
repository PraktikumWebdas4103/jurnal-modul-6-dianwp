<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body>
	<center>
		<h2><p>Registrasi Mahasiswa</p></h2>
	<form action="login.php" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" maxlength="" ="35" required=""></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" maxlength="10" minlength="10" required=""></td>
			</tr>
			<tr>
				<td>Kelas</td>
			<td>
    			<input type="radio" name="kelas" value="D3MI-41-01">D3MI-41-0-1 <br>
    			</td>
    		<td>
    			<input type="radio" name="kelas" value="D3MI-41-02">D3MI-41-0-2 <br>
    		</td>
    		<td>
    			<input type="radio" name="kelas" value="D3MI-41-03">D3MI-41-0-3 <br>
    		</td>
    		<td>
    			<input type="radio" name="kelas" value="D3MI-41-04">D3MI-41-0-4<br>
    		</td>
    		</tr>
    		<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jeniskelamin" value="Male" required="">Male<br></td>
				<td><input type="radio" name="jeniskelamin" value="Female">Female<br></td>
			</tr>
			<tr>
				<td><b>Hobi</b></td>
			<td>
				<input type="checkbox" name="hobi[]" value="Tidur">Tidur <br>
				<input type="checkbox" name="hobi[]" value="Drama">Drama 
			</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Menari">Menari<br>
				<input type="checkbox" name="hobi[]" value="Membaca">Membaca
			</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Main">Main<br>
				<input type="checkbox" name="hobi[]" value="Traveling">Traveling
			</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
				<input type="checkbox" name="hobi[]" value="Other Hobby">Dan lain-lain
			</td>
		</tr>
		<tr>
				<td>Fakultas</td>
				<td>
				<select name="fakultas" required="">
    				<option value="FTE">Fakultas Teknik Elektro</option>
    				<option value="FIT">Fakultas Ilmu Terapan</option>
    				<option value="FEB">Fakultas Ekonomi Bisnis</option>
    				<option value="FIK">Fakultas Industri Kreatif</option>
    				<option value="FRI">Fakultas Rekayasa Industri</option>
    			</select>
    			</td>

    		<tr>
    			<td>Alamat</td>
    				<td><input type="textarea" name="alamat" required=""></td>
    			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Send"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$kelas=$_POST['kelas'];
		$jenisk=$_POST['jeniskelamin'];
		$hobi=$_POST['hobi'];
		$fakultas=$_POST['fakultas'];
		for($x=0;$x<$jumlahob;$x++){
			mysql_query("insert into data values('','$hobi[$x]')");
		$alamat=$_POST['alamat'];
		}

		$error=array();
		if(strlen($_POST['nama']) != 35){
			$error['nim']=="Harus 35";
		} if(strlen($_POST['nim']) <= 10){
			$error['nama']=="Harus 10";
		}if(empty($jenisk)){
			$error['jeniskelamin']=="Jenis Kelamin harus diisi";
		}if(empty($hobi)){
			$error['hobi']=="Hobby harus diisi";
		}
}
?>

	