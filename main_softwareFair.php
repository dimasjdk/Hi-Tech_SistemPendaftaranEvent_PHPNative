<div class="page-links">
	<a href="?halaman=workshop">Workshop</a>
	<a href="?halaman=miniHackaton">Mini Hackathon</a>
	<a href="?halaman=softwareFair" style="margin-top: 30px;" class="active">Software Fair</a>
	<a href="?halaman=talkShow">TalkShow</a>
</div>
<form method="POST" enctype="multipart/form-data">
	<div id="step1" class="form-button">

		<input pattern="[a-zA-Z -]{5,50}" autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="text" name="a" placeholder="Asal Universitas" required>

		<input pattern="[a-zA-Z0-9 -]{5,50}" autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="text" name="b" placeholder="Nama Aplikasi" required>

		<select name="c" class="form-control" required="required" autofocus="autofocus">
			<option>-- Jenis Aplikasi --</option>
			<option value="Mobile">Mobile Apps</option>
			<option value="Web">Web Apps</option>
			<option value="Game">Game Apps</option>
			<option value="Dekstop">Dekstop Apps</option>
		</select>
		<br>

		<button class="ibtn" id="btn_next2" style="float: right;">Next</button>
	</div>

	<div id="step2" class="form-button">
		<input pattern="[a-zA-Z -]{4,50}" autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="text" name="d" placeholder="Nama Lengkap Anggota 1" required>

		<input autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="email" name="e" placeholder="E-mail Aktif Anggota 1" required>

		<input pattern="[0-9]{10,13}" autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="text" name="f" placeholder="Nomor Hp/WhatsApp Anggota 1" required>

		<label>Lampiran KTM Anggota 1</label>
		<input class="form-control" type="file" name="g" required>

		<button class="ibtn" id="btn_next3" style="float: right;">Next</button>
		<button class="ibtn" id="btn_step1">Prev</button>
	</div>

	<div id="step3" class="form-button">
		<input pattern="[a-zA-Z -]{4,50}" autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="text" name="h" placeholder="Nama Lengkap Anggota 2" required>

		<input autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="email" name="i" placeholder="E-mail Aktif Anggota 2" required>

		<input pattern="[0-9]{10,13}" autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="text" name="j" placeholder="Nomor Hp/WhatsApp Anggota 2" required>

		<label>Lampiran KTM Anggota 2</label>
		<input class="form-control" type="file" name="k" required>

		<<button class="ibtn" name="id_sf" id="btn_submit" style="float: right;">Submit</button>
		<button class="ibtn" id="btn_step2">Prev</button>
	</div>


	<!--
	<div class="form-button" id="submit">
		<button type="submit" class="ibtn" style="float: right;">Register</button>
	</div>-->
</form>


<script type="text/javascript">
	var step2 = document.getElementById('step2').style.display='none';
	var step3 = document.getElementById('step3').style.display='none';


	var btn_step1 = document.getElementById('btn_step1');
	var btn_next2 = document.getElementById('btn_next2');

	var btn_step2 = document.getElementById('btn_step2');
	var btn_next3 = document.getElementById('btn_next3');

	var btn_step3 = document.getElementById('btn_step3');	

	btn_next2.addEventListener('click', function () {
		// body...
		var step1 = document.getElementById('step1').style.display='none';
		var step2 = document.getElementById('step2').style.display='';
		var btn_step1 = document.getElementById('btn_step1').style.display='';

	});

	btn_next3.addEventListener('click', function () {
		// body...
		var step1 = document.getElementById('step1').style.display='none';
		var step2 = document.getElementById('step2').style.display='none';
		var step3 = document.getElementById('step3').style.display='';
		var btn_step2 = document.getElementById('btn_step2').style.display='';

	});



	btn_step1.addEventListener('click', function () {
		// body...
		var step1 = document.getElementById('step1').style.display='';
		var step2 = document.getElementById('step2').style.display='none';
		var step3 = document.getElementById('step3').style.display='none';

	});

	btn_step2.addEventListener('click', function () {
		// body...
		var step1 = document.getElementById('step1').style.display='none';
		var step2 = document.getElementById('step2').style.display='';
		var step3 = document.getElementById('step3').style.display='none';
	});

	btn_step3.addEventListener('click', function () {
		// body...
		var step1 = document.getElementById('step1').style.display='none';
		var step2 = document.getElementById('step2').style.display='none';
		var step3 = document.getElementById('step3').style.display='';

		var btn_step2 = document.getElementById('btn_step2').style.display='';
	});





	


</script>



<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['id_sf'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$univ		= $_POST['a'];
	$aplikasi	= $_POST['b'];	
	$jenis		= $_POST['c'];

	$anggota_1	= $_POST['d'];
	$email_1	= $_POST['e'];
	$handphone_1= $_POST['f'];
	$ktm_1 		= $_FILES['g']['name'];
	$tmp_1 		= $_FILES['g']['tmp_name'];

	$anggota_2	= $_POST['h'];
	$email_2	= $_POST['i'];
	$handphone_2= $_POST['j'];
	$ktm_2	    = $_FILES['k']['name'];
	$tmp_2 		= $_FILES['k']['tmp_name'];

	//$bayar		= $_FILES['l']['name'];
	//$tmp_bayar	= $_FILES['l']['tmp_name'];

	$tanggal	= date("d-m-Y H:i:s");
	


	//membuat directory dengan PHP otomatis
	//$dir = 'Admin/pembayaran/sf/';
	// if (!file_exists($dir)) { # cek apakah folder sudah ada atau belum
		
	// 	# echo "folder tidak ada";

	// 	if (mkdir($dir)) { # jika belum ada folder maka akan dibuat dengan fungsi mkdir()

	// 		#echo "berhasil buat folder";
	// 	}
	// } else {
	// 	#echo "folder sudah ada";
	// 	echo "";
	// }


	// Set path folder tempat menyimpan fotonya
	$path1 = "Admin/pembayaran/sf/".$ktm_1;
	$path2 = "Admin/pembayaran/sf/".$ktm_2;
	//$path3 = "Admin/pembayaran/sf/".$bayar;



if (move_uploaded_file($tmp_1, $path1)) {
	move_uploaded_file($tmp_2, $path2);
	//move_uploaded_file($tmp_bayar, $path3);

	$input = mysqli_query($koneksi, "INSERT INTO sf (univ, aplikasi, jenis, anggota_1, email_1, handphone_1, ktm_1, anggota_2, email_2, handphone_2, ktm_2, tanggal) VALUES('$univ', '$aplikasi', '$jenis', '$anggota_1', '$email_1', '$handphone_1', '$ktm_1', '$anggota_2', '$email_2', '$handphone_2', '$ktm_2', '$tanggal')");
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
				alert("Gagal insert data!!");
			</script>
		<?php
		die($input);
		
	}

} else {
	?>
			<script type="text/javascript">
				alert("Gagal upload foto!!");
			</script>
		<?php
}




}

?>