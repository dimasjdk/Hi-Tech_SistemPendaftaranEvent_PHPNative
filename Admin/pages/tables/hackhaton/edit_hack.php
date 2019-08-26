<?php
//echo $_GET['id'];
$sql = $koneksi->query("SELECT * FROM hackhaton WHERE id_hack='$_GET[id]'");
$data = $sql->fetch_assoc();

//echo "<pre>";
//print_r($pecah);
//echo "</pre>";

?>


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Peserta
      <small>Mini Hackhaton</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="?halaman=home"><i class="fa fa-home"></i> Dashboard</a></li>
      <li><i class="fa fa-users"></i> Data Mini Hackhaton</a></li>
      <!-- <li class="active">Data Santri</li> -->
    </ol>
  </section>

  <!-- Main content -->
  <div class="box">
    <div class="box-header">
      <!-- <h1 class="box-title">Kelola Data Pembayaran</h1> -->
      <!-- <a href="tambahsantri.html" class="btn btn-primary" role="button">Tambah Data Santri</a> -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form method="post" action="" enctype="multipart/form-data">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr style="border: 0;">
                  <td>
                    <h4 style="color: #3c8dbc;">Nama Tim : <input type="text" name="a" value="<?php echo $data['tim']; ?>"></h4>
                  </td>
                  <td>
                    <h4 style="color: #ff6600;">Universitas : <input type="text" name="b" value="<?php echo $data['univ'] ?>"></h4>
                  </td>
                </tr>        
                <tr>
                  <td>Nama Ketua</td>
                  <td>
                    <input type="text" name="c" value="<?php echo $data['ketua']; ?>">
                  </td>
                  <td>Nama Anggota</td>
                  <td>
                    <input type="text" name="d" value="<?php echo $data['anggota_1']; ?>">
                  </td>
                  <td>Nama Anggota</td>
                  <td>
                    <input type="text" name="e" value="<?php echo $data['anggota_2']; ?>">
                  </td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>
                    <input type="text" name="f" value="<?php echo $data['email'] ?>">
                  </td>
                  <td>Email</td>
                  <td>
                    <input type="text" name="g" value="<?php echo $data['email_1'] ?>">
                  </td>
                  <td>Email</td>
                  <td>
                    <input type="text" name="h" value="<?php echo $data['email_2'] ?>">
                  </td>
                </tr>
                <tr>
                  <td>Handphone</td>
                  <td>
                    <input type="text" name="i" value="<?php echo $data['handphone'] ?>">
                  </td>
                  <td>Handphone</td>
                  <td>
                    <input type="text" name="j" value="<?php echo $data['handphone_1'] ?>">
                  </td>
                  <td>Handphone</td>
                  <td>
                    <input type="text" name="k" value="<?php echo $data['handphone_2'] ?>">
                  </td>
                </tr>
                <tr>
                  <td>Foto KTM</td>
                  <td style="background-color: #ecf0f5;">
                    <img src="pembayaran/hackhaton/<?php echo $data ['ktm_ketua']; ?>" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
                    <input type="file" id="inputgambar" name="l"  class="validate"/>
                  </td>
                  <td>Foto KTM</td>
                  <td style="background-color: #ecf0f5;">
                    <img src="pembayaran/hackhaton/<?php echo $data ['ktm_1']; ?>" id="showgambar1" style="max-width:200px;max-height:200px;float:left;" />
                    <input type="file" id="inputgambar1" name="m"  class="validate"/>
                  </td>
                  <td>Foto KTM</td>
                  <td style="background-color: #ecf0f5;">
                    <img src="pembayaran/hackhaton/<?php echo $data['ktm_2']; ?>" id="showgambar2" style="max-width:200px;max-height:200px;float:left;" />
                    <input type="file" id="inputgambar2" name="n"  class="validate"/ >
                  </td>
                </tr>
                </thead>
                <tr>
                  <td>
                    <input type="submit" name="save" class="btn btn-primary" value="Simpan">
                    <input type="reset" name="cancel" class="btn btn-danger" value="Reset">
                  </td>
                </tr>
              </table>
            </form>
    </div>
  </div>
</div>

<?php

  if (isset($_POST['save']))
  {
    $tim   = $_POST['a'];
    $univ   = $_POST['b'];
    $ketua  = $_POST['c'];
    $angg1  = $_POST['d'];
    $angg2  = $_POST['e'];
    $mail  = $_POST['f'];
    $mail1  = $_POST['g'];
    $mail2  = $_POST['h'];
    $telp  = $_POST['i'];
    $telp1  = $_POST['j'];
    $telp2  = $_POST['k'];


//print_r($_FILES);exit();
  if ($_FILES['l']['name'] =="" AND $_FILES['m']['name'] == "" AND $_FILES['n']['name'] == "")
  {
          $sql = mysqli_query($koneksi,"UPDATE hackhaton SET
            tim         = '$tim',
            univ        = '$univ',
            ketua       = '$ketua',
            email       = '$mail',
            handphone   = '$telp',
            anggota_1   = '$angg1',
            email_1     = '$mail1',
            handphone_1 = '$telp1',
            anggota_2   = '$angg2',
            email_2     = '$mail2' WHERE id_hack='$_GET[id]'");

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      echo "<script>alert('Data telah diubah');</script>";
      echo "<script>location='index.php?halaman=hackhaton'</script>";
    }else{
    // Jika Gagal, Lakukan :

      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php?halaman=edit_hack'>Kembali Ke Form</a>";
    }

  } else
      {
            $query = "SELECT ktm_1, ktm_2, ktm_ketua FROM hackhaton WHERE id_hack='$_GET[id]' ";
            $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
            $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
            $a=$data['ktm_1'];
            $b=$data['ktm_2'];
            $c=$data['ktm_ketua'];
            $tempat_foto1 = "pembayaran/hackhaton/$a";
            $tempat_foto2 = "pembayaran/hackhaton/$b";
            $tempat_foto = "pembayaran/hackhaton/$c";

            // if (file_exists($tempat_foto1)) {
            //   unlink($tempat_foto1);
            //   unlink($tempat_foto2);
            // }

            if ($_FILES['l']['name'] == "") {
              echo "tidak ada";
              $km    = $c;
            } else {
              echo "ada";
              unlink($tempat_foto);
              $km    = $_FILES['l']['name'];
              $km_tmp= $_FILES['l']['tmp_name'];
            }

            if ($_FILES['m']['name'] == "") {
              echo "tidak ada";
              $km1    = $a;
            } else {
              echo "ada";
              unlink($tempat_foto1);
              $km1    = $_FILES['m']['name'];
              $km1_tmp= $_FILES['m']['tmp_name'];
            }

            if ($_FILES['n']['name'] == "") {
              echo "tidak ada";
              $km2    = $b;
            } else {
              echo "ada";
              unlink($tempat_foto2);
              $km2    = $_FILES['n']['name'];
              $km2_tmp= $_FILES['n']['tmp_name'];
            }

            
            $tim   = $_POST['a'];
            $univ   = $_POST['b'];
            $ketua  = $_POST['c'];
            $angg1  = $_POST['d'];
            $angg2  = $_POST['e'];
            $mail  = $_POST['f'];
            $mail1  = $_POST['g'];
            $mail2  = $_POST['h'];
            $telp  = $_POST['i'];
            $telp1  = $_POST['j'];
            $telp2  = $_POST['k'];


            $fotobaru1 = "pembayaran/hackhaton/".$km1;
            move_uploaded_file($km1_tmp, $fotobaru1);

            $fotobaru2 = "pembayaran/hackhaton/".$km2;
            move_uploaded_file($km2_tmp, $fotobaru2);

            $fotobaru = "pembayaran/hackhaton/".$km;
            move_uploaded_file($km_tmp, $fotobaru);


            $sql2 = mysqli_query($koneksi,"UPDATE hackhaton SET
            tim        = '$tim',
            univ       = '$univ',
            ketua      = '$ketua',
            email      = '$mail',
            handphone  = '$telp',
            ktm_ketua  = '$km',
            anggota_1  = '$angg1',
            email_1    = '$mail1',
            handphone_1= '$telp1',
            ktm_1      = '$km1',
            anggota_2  = '$angg2',
            email_2    = '$mail2',
            handphone_2= '$telp2',
            ktm_2      = '$km2' WHERE id_hack='$_GET[id]'");

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  echo "<script>alert('Data telah diubah');</script>";
  echo "<script>location='index.php?halaman=hackhaton';</script>";
}else{
// Jika Gagal, Lakukan :

  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='index.php?halaman=edit_hack'>Kembali Ke Form</a>";
}
            




      }
}
?>