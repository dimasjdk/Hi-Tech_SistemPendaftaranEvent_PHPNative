<?php
//echo $_GET['id'];
$sql = $koneksi->query("SELECT * FROM sf WHERE id_sf='$_GET[id]'");
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
        <small>Software Fair</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?halaman=home"><i class="fa fa-home"></i> Dashboard</a></li>
        <li><i class="fa fa-users"></i> Data Software Fair</a></li>
        <!-- <li class="active">Data Santri</li> -->
      </ol>
    </section>

    <!-- Main content -->
          <div class="box">
             
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" action="" enctype="multipart/form-data">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr style="border: 0;">
                  <td>
                    <h4 style="color: #3c8dbc;">Nama Aplikasi : <input type="text" name="a" value="<?php echo $data['aplikasi']; ?>"></h4>
                  </td>
                  <td>
                    <h4 style="color: #ff6600;">Universitas : <input type="text" name="b" value="<?php echo $data['univ'] ?>"></h4>
                  </td>
                  <td>
                      <select name="c" class="form-control" required="required" autofocus="autofocus">
                        <option value="mobile">Mobile Apps</option>
                        <option value="web">Web Apps</option>
                        <option value="game">Game Apps</option>
                        <option value="dekstop">Dekstop Apps</option>
                      </select>
                  </td>
                </tr>        
                <tr>
                  <td>Nama Ketua</td>
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
                    <input type="text" name="f" value="<?php echo $data['email_1'] ?>">
                  </td>
                  <td>Email</td>
                  <td>
                    <input type="text" name="g" value="<?php echo $data['email_2'] ?>">
                  </td>
                </tr>
                <tr>
                  <td>Handphone</td>
                  <td>
                    <input type="text" name="h" value="<?php echo $data['handphone_1'] ?>">
                  </td>
                  <td>Handphone</td>
                  <td>
                    <input type="text" name="i" value="<?php echo $data['handphone_2'] ?>">
                  </td>
                </tr>
                <tr>
                  <td>Foto KTM</td>
                  <td style="background-color: #ecf0f5;">
                    <img src="pembayaran/sf/<?php echo $data ['ktm_1']; ?>" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
                    <input type="file" id="inputgambar" name="j"  class="validate"/>
                  </td>
                  <td>Foto KTM</td>
                  <td style="background-color: #ecf0f5;">
                    <img src="pembayaran/sf/<?php echo $data['ktm_2']; ?>" id="showgambar2" style="max-width:200px;max-height:200px;float:left;" />
                    <input type="file" id="inputgambar2" name="k"  class="validate"/ >
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
    $app   = $_POST['a'];
    $univ   = $_POST['b'];
    $genre  = $_POST['c'];
    $angg1  = $_POST['d'];
    $angg2  = $_POST['e'];
    $mail1  = $_POST['f'];
    $mail2  = $_POST['g'];
    $telp1  = $_POST['h'];
    $telp2  = $_POST['i'];


//print_r($_FILES);exit();
  if ($_FILES['j']['name'] == "" AND $_FILES['k']['name'] == "")
  {
          $sql = mysqli_query($koneksi,"UPDATE sf SET
            aplikasi   = '$app',
            univ       = '$univ',
            jenis      = '$genre',
            anggota_1  = '$angg1',
            email_1    = '$mail1',
            handphone_1= '$telp1',
            anggota_2  = '$angg2',
            email_2    = '$mail2' WHERE id_sf='$_GET[id]'");

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      echo "<script>alert('Data telah diubah');</script>";
      echo "<script>location='index.php?halaman=sf';</script>";
    }else{
    // Jika Gagal, Lakukan :

      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php?halaman=edit_sf'>Kembali Ke Form</a>";
    }

  } else
      {
            $query = "SELECT * FROM sf WHERE id_sf='$_GET[id]' ";
            $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
            $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
            $a=$data['ktm_1'];
            $b=$data['ktm_2'];
            $tempat_foto1 = "pembayaran/sf/$a";
            $tempat_foto2 = "pembayaran/sf/$b";

            // if (file_exists($tempat_foto1)) {
            //   unlink($tempat_foto1);
            //   unlink($tempat_foto2);
            // }

            if ($_FILES['j']['name'] == "") {
              echo "tidak ada";
              $km1    = $a;
            } else {
              echo "ada";
              unlink($tempat_foto1);
              $km1    = $_FILES['j']['name'];
              $km1_tmp= $_FILES['j']['tmp_name'];
            }

            if ($_FILES['k']['name'] == "") {
              echo "tidak ada";
              $km2    = $b;
            } else {
              echo "ada";
              unlink($tempat_foto2);
              $km2    = $_FILES['k']['name'];
              $km2_tmp= $_FILES['k']['tmp_name'];
            }
            
            $app   = $_POST['a'];
            $univ   = $_POST['b'];
            $genre  = $_POST['c'];
            $angg1  = $_POST['d'];
            $angg2  = $_POST['e'];
            $mail1  = $_POST['f'];
            $mail2  = $_POST['g'];
            $telp1  = $_POST['h'];
            $telp2  = $_POST['i'];


            $fotobaru1 = "pembayaran/sf/".$km1;
            move_uploaded_file($km1_tmp, $fotobaru1);

            $fotobaru2 = "pembayaran/sf/".$km2;
            move_uploaded_file($km2_tmp, $fotobaru2);


            $sql2 = mysqli_query($koneksi,"UPDATE sf SET
              aplikasi   = '$app',
              univ       = '$univ',
              jenis      = '$genre',
              anggota_1  = '$angg1',
              email_1    = '$mail1',
              handphone_1= '$telp1',
              ktm_1      = '$km1',
              anggota_2  = '$angg2',
              email_2    = '$mail2',
              handphone_2= '$telp2',
              ktm_2      = '$km2' WHERE id_sf='$_GET[id]'");

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  echo "<script>alert('Data telah diubah');</script>";
  echo "<script>location='index.php?halaman=sf';</script>";
}else{
// Jika Gagal, Lakukan :

  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='index.php?halaman=detail_sf'>Kembali Ke Form</a>";
}
            




      }
}
?>




