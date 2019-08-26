<?php
$sql = "SELECT * from sf WHERE id_sf='$_GET[id]'";
$result = mysqli_query($koneksi,$sql);

$pecah = mysqli_fetch_array($result)                    

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

            <table class="table table-bordered table-striped">
              <tr>
                <td>
                <h4 style="color: #3c8dbc;">Nama Aplikasi : <?php echo $pecah['aplikasi']; ?></h4>
                </td>
                <td></td>
                <td>
                <h4 style="color: #ff6600;">Universitas   : <?php echo $pecah['univ']; ?></h4>
                </td>
                <td></td>
                <td>
                <h4 style="color: green;">Jenis Aplikasi  : <?php echo $pecah['jenis']; ?></h4>
                </td>
              </tr>
            </table>

            
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                
                <tr>
                  <td>Nama Ketua</td>
                  <td style="background-color: #ecf0f5;"><?php echo $pecah['anggota_1']; ?></td>
                  <td>Nama Anggota</td>
                  <td style="background-color: #ecf0f5;"><?php echo $pecah['anggota_2']; ?></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td style="background-color: #ecf0f5;"><?php echo $pecah['email_1']; ?></td>
                  <td>Email</td>
                  <td style="background-color: #ecf0f5;"><?php echo $pecah['email_2']; ?></td>
                </tr>
                <tr>
                  <td>Handphone</td>
                  <td style="background-color: #ecf0f5;"><?php echo $pecah['handphone_1']; ?></td>
                  <td>Handphone</td>
                  <td style="background-color: #ecf0f5;"><?php echo $pecah['handphone_2']; ?></td>
                </tr>
                <tr style="background-color: #ecf0f5;">
                  <td>Foto KTM</td>
                  <td style="max-width:200px;max-height:200px;float:left;">
                  	<img style="width: 50%;" src="pembayaran/sf/<?php echo $pecah['ktm_1']; ?>">
                  </td>
                  <td>Foto KTM</td>
                  <td style="max-width:200px;max-height:200px;float:left;">
                  	<img style="width: 50%;" src="pembayaran/sf/<?php echo $pecah['ktm_2']; ?>">
                  </td>
                </tr>

                </thead>

                
                <tr>
                	<td>
                		<a href="?halaman=edit_sf&id=<?php echo $pecah['id_sf'] ?>" class="btn-warning btn"><i class="fa fa-edit"></i> Edit</a>
                		<a href="?halaman=hapus_sf&id=<?php echo $pecah['id_sf'] ?>" class="btn-danger btn"><i class="fa fa-trash"></i> hapus</a>
                		
                	</td>
                	<form method="POST">
                			<td>
                			<select name="keterangan" class="form-control">
                				<option value="Belum Bayar">Belum Bayar</option>
                				<option value="Lunas">Lunas</option>
                			</select>
                			</td>
                			<td><input type="submit" name="submit" value="Validasi" class="btn btn-primary">
                			</td>
                		</form>
                		<?php
                			if (isset($_POST['submit'])) {
                				# code...
                				$ket= $_POST['keterangan'];

                				$sql=$koneksi->query("UPDATE sf SET
                					ket='$ket' WHERE id_sf = '$_GET[id]'");

                				if ($sql) {
                					?>
                					<script type="text/javascript">
                						document.location = 'index.php?halaman=sf';
                					</script>
                					<?php
                				} else {
                					echo "<script>";
                					echo "alert('Gagal')";
                					echo "</script>";
                				}
                			}
                		?>

                    <form method="POST">
                      <td>
                      <select name="hadir" class="form-control">
                        <option value="Tidak Hadir">Tidak Hadir</option>
                        <option value="Hadir">Hadir</option>
                      </select>
                      </td>
                      <td><input type="submit" name="submitx" value="Checklist" class="btn btn-success">
                      </td>
                    </form>
                    <?php
                      if (isset($_POST['submitx'])) {
                        # code...
                        $had= $_POST['hadir'];

                        $sql=$koneksi->query("UPDATE sf SET
                          kehadiran='$had' WHERE id_sf = '$_GET[id]'");

                        if ($sql) {
                          ?>
                          <script type="text/javascript">
                            document.location = 'index.php?halaman=sf';
                          </script>
                          <?php
                        } else {
                          echo "<script>";
                          echo "alert('Gagal')";
                          echo "</script>";
                        }
                      }
                    ?>

                </tr>
                

              </table>
              
            </div>
        </div>
  </div>


