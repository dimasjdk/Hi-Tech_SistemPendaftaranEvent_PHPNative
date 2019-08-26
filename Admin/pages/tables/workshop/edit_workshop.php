<?php
//echo $_GET['id'];
$sql = $koneksi->query("SELECT * FROM workshop WHERE id_workshop='$_GET[id]'");
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
      <small>Workshop</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="?halaman=home"><i class="fa fa-home"></i> Dashboard</a></li>
      <li><i class="fa fa-users"></i> Data Workshop</a></li>
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
      <form method="post" action="">
        <div class="form-group row">
          <div class="col-xs-8">
            <label for="nama">Nama :</label>
            <input type="text" class="form-control" name="a" value="<?php echo $data['nama']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-8">
            <label for="nama">Nim :</label>
            <input type="text" class="form-control" name="b" value="<?php echo $data['nim']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-8">
            <label for="nama">Email :</label>
            <input type="email" class="form-control" name="c" value="<?php echo $data['email']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-8">
            <label for="nama">Telephone :</label>
            <input type="text" class="form-control" name="d" value="<?php echo $data['handphone']; ?>">
          </div>
        </div>
        
        <!-- <a href="#" type="submit" class="btn btn-primary" role="button">Simpan</a> -->
        <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
        <input type="submit" name="save" class="btn btn-primary" value="Simpan">
        <a href="?halaman=hapus_workshop&id=<?php echo $data['id_workshop'] ?>" class="btn-danger btn"><i class="fa fa-trash"></i> hapus</a>
      </form>

      <?php
              if (isset($_POST['save'])) {

                $nama   = $_POST['a'];
                $nim    = $_POST['b'];
                $email  = $_POST['c'];
                $telp   = $_POST['d'];
                


                  $sql = $koneksi->query("UPDATE workshop SET 
                         nama       =  '$nama',
                         nim        =  '$nim',
                         email      =  '$email',
                         handphone  =  '$telp' WHERE id_workshop='$_GET[id]'");
                  if ($sql) {

                    ?>
                    <script type="text/javascript">
                      alert("Data Berhasil diupdate."); document.location = '?halaman=workshop';
                    </script>
                    <?php

                  } else {

                    ?>
                    <script type="text/javascript">
                      alert("Data gagal diupdate."); document.location = '?halaman=workshop';
                    </script>
                    <?php

                  }
                
              }
            ?>
            <br>
            <form method="POST">
              <table>
                <th>
                  <select style="width: 150px;" name="keterangan" class="form-control">
                    <option value="Belum Bayar">Belum Bayar</option>
                    <option value="Lunas">Lunas</option>
                  </select>
                </th>                    
                <th> 
                  <input type="submit" name="submit" value="Validasi" class="btn btn-primary">
                </th>

                <?php
                if (isset($_POST['submit'])) {
                        # code...
                  $ket= $_POST['keterangan'];

                  $sql=$koneksi->query("UPDATE workshop SET
                    ket='$ket' WHERE id_workshop = '$_GET[id]'");

                  if ($sql) {
                    ?>
                    <script type="text/javascript">
                      document.location = 'index.php?halaman=workshop';
                    </script>
                    <?php
                  } else {
                    echo "<script>";
                    echo "alert('Gagal')";
                    echo "</script>";
                  }
                }
                ?>
              </table>
            </form>

            <form method="post">
              <table>
                <th>
                  <select style="width: 150px;" name="hadir" class="form-control">
                    <option value="Tidak Hadir">Tidak Hadir</option>
                    <option value="Hadir">Hadir</option>
                  </select>
                </th>                    
                <th> 
                  <input type="submit" name="submitx" value="Validasi" class="btn btn-success">
                </th>
                
                <?php
                if (isset($_POST['submitx'])) {
                        # code...
                  $had= $_POST['hadir'];

                  $sql=$koneksi->query("UPDATE workshop SET
                    kehadiran ='$had' WHERE id_workshop = '$_GET[id]'");

                  if ($sql) {
                    ?>
                    <script type="text/javascript">
                      document.location = 'index.php?halaman=workshop';
                    </script>
                    <?php
                  } else {
                    echo "<script>";
                    echo "alert('Gagal')";
                    echo "</script>";
                  }
                }
                ?>
              </table>
            </form>

    </div>
  </div>
</div>

