<div class="page-links">
	<a href="?halaman=workshop">Workshop</a>
	<a href="?halaman=miniHackaton" class="active">Mini Hackathon</a>
	<a href="?halaman=softwareFair" style="margin-top: 30px;">Software Fair</a>
	<a href="?halaman=talkShow">TalkShow</a>
</div>
<form method="POST" enctype="multipart/form-data">
	<div id="step1" class="form-button">
		<input pattern="[a-zA-Z -]{5,50}" autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="text" name="a" placeholder="Asal Universitas" required>
		<input pattern="[a-zA-Z0-9 -]{3,50}" autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="text" name="b" placeholder="Nama Tim" required>
		<button class="ibtn" id="btn_next2" style="float: right;">Next</button>
	</div>

	<div id="step2" class="form-button">
		<input pattern="[a-zA-Z -]{5,50}" autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="text" name="c" placeholder="Nama Lengkap Ketua" required>
		<input autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="email" name="d" placeholder="E-mail Aktif Ketua Tim" required>
		<input pattern="[0-9]{10,13}" autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="text" name="e" placeholder="Nomor Hp/WhatsApp Ketua Tim" required>
		<label>Lampiran KTM Ketua Tim</label>
		<input class="form-control" type="file" name="f" required>

		<button class="ibtn" id="btn_next3" style="float: right;">Next</button>
		<button class="ibtn" id="btn_step1">Prev</button>
	</div>

	<div id="step3" class="form-button">
		<input pattern="[a-zA-Z -]{5,50}" autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="text" name="g" placeholder="Nama Anggota 1" required>
		<input autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="email" name="h" placeholder="E-mail Aktif Anggota 1" required>
		<input pattern="[0-9]{10,13}" autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="text" name="i" placeholder="Nomor Hp/WhatsApp Anggota 1" required>
		<label>Lampiran KTM Anggota 1</label>
		<input class="form-control" type="file" name="j" required>

		<button class="ibtn" id="btn_next4" style="float: right;">Next</button>
		<button class="ibtn" id="btn_step2">Prev</button>
	</div>

	<div id="step4" class="form-button">
		<input pattern="[a-zA-Z -]{5,50}" autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="text" name="k" placeholder="Nama Anggota 2" required>
		<input autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="email" name="l" placeholder="E-mail Aktif Anggota 2" required>
		<input pattern="[0-9]{10,13}" autofocus="autofocus" autocomplete="autocomplete" class="form-control" type="text" name="m" placeholder="Nomor Hp/WhatsApp Anggota 2" required>
		<label>Lampiran KTM Anggota 2</label>
		<input class="form-control" type="file" name="n" required>

		<button class="ibtn" name="id_hackhaton" id="btn_submit" style="float: right;">Submit</button>
		<button class="ibtn" id="btn_step3">Prev</button>
	</div>


	<!--
	<div class="form-button" id="submit">
		<button type="submit" class="ibtn" style="float: right;">Register</button>
	</div>-->
</form>


<script type="text/javascript">
	var step2 = document.getElementById('step2').style.display='none';
	var step3 = document.getElementById('step3').style.display='none';
	var step4 = document.getElementById('step4').style.display='none';



	var btn_step1 = document.getElementById('btn_step1');
	var btn_next2 = document.getElementById('btn_next2');

	var btn_step2 = document.getElementById('btn_step2');
	var btn_next3 = document.getElementById('btn_next3');

	var btn_step3 = document.getElementById('btn_step3');
	var btn_next4 = document.getElementById('btn_next4');

	var btn_step4 = document.getElementById('btn_step4');	

	btn_next2.addEventListener('click', function () {
		// body...
		var step1 = document.getElementById('step1').style.display='none';
		var step2 = document.getElementById('step2').style.display='';
		var step4 = document.getElementById('step4').style.display='none';
		var btn_step1 = document.getElementById('btn_step1').style.display='';

	});

	btn_next3.addEventListener('click', function () {
		// body...
		var step1 = document.getElementById('step1').style.display='none';
		var step2 = document.getElementById('step2').style.display='none';
		var step3 = document.getElementById('step3').style.display='';
		var btn_step2 = document.getElementById('btn_step2').style.display='';

	});

	btn_next4.addEventListener('click', function () {
		// body...
		var step1 = document.getElementById('step1').style.display='none';
		var step2 = document.getElementById('step2').style.display='none';
		var step3 = document.getElementById('step3').style.display='none';
		var step4 = document.getElementById('step4').style.display='';
		var btn_step2 = document.getElementById('btn_step2').style.display='';

	});



	btn_step1.addEventListener('click', function () {
		// body...
		var step1 = document.getElementById('step1').style.display='';
		var step2 = document.getElementById('step2').style.display='none';

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
		var step4 = document.getElementById('step4').style.display='none';
		var btn_step2 = document.getElementById('btn_step2').style.display='';
	});

	btn_step4.addEventListener('click', function () {
		// body...
		var step1 = document.getElementById('step1').style.display='none';
		var step2 = document.getElementById('step2').style.display='none';
		var step3 = document.getElementById('step3').style.display='none';
		var step4 = document.getElementById('step4').style.display='';
		var btn_step3 = document.getElementById('btn_step3').style.display='';
	});



	


</script>


<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['id_hackhaton'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$univ		= $_POST['a'];
	$tim		= $_POST['b'];	
	
	$ketua		= $_POST['c'];	
	$email		= $_POST['d'];	
	$handphone	= $_POST['e'];
	$ktm_ketua  = $_FILES['f']['name'];
	$tmp_ketua 	= $_FILES['f']['tmp_name'];

	$anggota_1	= $_POST['g'];
	$email_1	= $_POST['h'];
	$handphone_1= $_POST['i'];
	$ktm_1 		= $_FILES['j']['name'];
	$tmp_1 		= $_FILES['j']['tmp_name'];

	$anggota_2	= $_POST['k'];
	$email_2	= $_POST['l'];
	$handphone_2= $_POST['m'];
	$ktm_2	    = $_FILES['n']['name'];
	$tmp_2 		= $_FILES['n']['tmp_name'];


	$tanggal	= date("d-m-Y H:i:s");
	


// Set path folder tempat menyimpan fotonya
$path1 = "Admin/pembayaran/hackhaton/".$ktm_ketua;
$path2 = "Admin/pembayaran/hackhaton/".$ktm_1;
$path3 = "Admin/pembayaran/hackhaton/".$ktm_2;



if (move_uploaded_file($tmp_ketua, $path1)) {
	move_uploaded_file($tmp_1, $path2);
	move_uploaded_file($tmp_2, $path3);

	$input = mysqli_query($koneksi, "INSERT INTO hackhaton (univ, tim, ketua, email, handphone, ktm_ketua, anggota_1, email_1, handphone_1, ktm_1, anggota_2, email_2, handphone_2, ktm_2, tanggal) VALUES('$univ', '$tim', '$ketua', '$email', '$handphone', '$ktm_ketua', '$anggota_1', '$email_1', '$handphone_1', '$ktm_1', '$anggota_2', '$email_2', '$handphone_2', '$ktm_2','$tanggal')");
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