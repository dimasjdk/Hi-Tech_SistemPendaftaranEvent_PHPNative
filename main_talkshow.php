<div class="page-links">
	<a href="?halaman=workshop">Workshop</a>
	<a href="?halaman=miniHackaton">Mini Hackathon</a>
	<a href="?halaman=softwareFair"style="margin-top: 30px;">Software Fair</a>
	<a href="?halaman=talkShow" class="active">TalkShow</a>
</div>
<form method="POST" action="">
	<input class="form-control" pattern="[a-zA-Z -]{4,50}" type="text" name="a" placeholder="Nama Mahasiswa Anda" required>
	<input class="form-control" pattern="[a-zA-Z -]{4,50}" type="text" name="b" placeholder="Prodi/jurusan Anda" required>
	<input class="form-control" type="email" name="c" placeholder="E-mail Aktif Anda" required>
	<input class="form-control" pattern="[0-9]{10,13}" type="text" name="d" placeholder="Nomor HP/WhatsApp Anda" required>
	<div class="form-button">
		<button id="submit" type="submit" name="id_talkshow" class="ibtn" style="float: right;">Submit</button>
		<button id="submit" type="reset" class="ibtn" style="background-color: red;">Reset</button>
	</div>
</form>


<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['id_talkshow'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nama		= $_POST['a'];
	$jurusan	= $_POST['b'];
	$email		= $_POST['c'];	
	$handphone	= $_POST['d'];	
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($koneksi, "INSERT INTO talkshow (nama, jurusan, email, handphone) VALUES('$nama', '$jurusan', '$email', '$handphone')");
	
	//jika query input sukses
	if($input){
		
		?>
			<script type="text/javascript">
				alert("Berhasil!");
				document.location = "registrasi.php";
			</script>
		<?php
		
	}else{

		?>
			<script type="text/javascript">
				alert("Gagal!!");
			</script>
		<?php
		
	}

}

?>