<div class="page-links">
	<a href="?halaman=workshop" class="active">Workshop</a>
	<a href="?halaman=miniHackaton">Mini Hackathon</a>
	<a href="?halaman=softwareFair" style="margin-top: 30px;">Software Fair</a>
	<a href="?halaman=talkShow">TalkShow</a>
</div>
<div>
	<img style="width: 60%; text-align: center;" src="assets/img/course/close.png">
</div>

<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['submit'])){
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nim		= $_POST['a'];
	$nama		= $_POST['b'];
	$email		= $_POST['c'];	
	$handphone	= $_POST['d'];	
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = $koneksi->query("INSERT INTO workshop (nama,nim,email,handphone) VALUES('$nama', '$nim', '$email', '$handphone')");
	
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
