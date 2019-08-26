<?php
$sql = "SELECT * from hackhaton WHERE id_hack='$_GET[id]'";
$result = mysqli_query($koneksi,$sql);

$pecah = mysqli_fetch_array($result)                    

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
             
            <!-- /.box-header -->
            <div class="box-body">
            	<h3 style="color: #3c8dbc;">Nama Tim : <?php echo $pecah['tim']; ?></h3>
            	<h3 style="color: #ff6600;">Universitas : <?php echo $pecah['univ']; ?></h3>
              <table id="example1" class="table table-bordered table-striped" style="max-width: 100%;">
                <thead>
                
                <tr>
                  <td>Nama Ketua</td>
                  <td style="background-color: #ecf0f5;"><?php echo $pecah['ketua']; ?></td>
                  <td>Nama Anggota</td>
                  <td style="background-color: #ecf0f5;"><?php echo $pecah['anggota_1']; ?></td>
                  <td>Nama Anggota</td>
                  <td style="background-color: #ecf0f5;"><?php echo $pecah['anggota_2']; ?></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td style="background-color: #ecf0f5;"><?php echo $pecah['email']; ?></td>
                  <td>Email</td>
                  <td style="background-color: #ecf0f5;"><?php echo $pecah['email_1']; ?></td>
                  <td>Email</td>
                  <td style="background-color: #ecf0f5;"><?php echo $pecah['email_2']; ?></td>
                </tr>
                <tr>
                  <td>Handphone</td>
                  <td style="background-color: #ecf0f5;"><?php echo $pecah['handphone']; ?></td>
                  <td>Handphone</td>
                  <td style="background-color: #ecf0f5;"><?php echo $pecah['handphone_1']; ?></td>
                  <td>Handphone</td>
                  <td style="background-color: #ecf0f5;"><?php echo $pecah['handphone_2']; ?></td>
                </tr>
                <tr>
                  <td>Foto KTM</td>
                  <td style="background-color: #ecf0f5;">
                  	<img style="width: 30%;" src="pembayaran/hackhaton/<?php echo $pecah['ktm_ketua']; ?>">
                  </td>
                  <td>Foto KTM</td>
                  <td style="background-color: #ecf0f5;">
                  	<img style="width: 30%;" src="pembayaran/hackhaton/<?php echo $pecah['ktm_1']; ?>">
                  </td>
                  <td>Foto KTM</td>
                  <td style="background-color: #ecf0f5;">
                  	<img style="width: 30%;" src="pembayaran/hackhaton/<?php echo $pecah['ktm_2']; ?>">
                  </td>
                </tr>              
                <tr>
                	<td>
                		<a href="?halaman=edit_hack&id=<?php echo $pecah['id_hack'] ?>" class="btn-warning btn"><i class="fa fa-edit"></i> Edit</a>
                  </td>
                  <td>
                		<a href="?halaman=hapus_hack&id=<?php echo $pecah['id_hack'] ?>" class="btn-danger btn"><i class="fa fa-trash"></i> hapus</a>
                		
                	</td>
                </tr>
              </thead>
            </table>

                	<form method="POST">
                    <table>
                      <tr>
                			<td>
                        
                			<select name="keterangan" class="form-control">
                				<option value="Belum Bayar">Belum Bayar</option>
                				<option value="Lunas">Lunas</option>
                			</select>
                    
                			</td>

                			<td>
                        
                          <input type="submit" name="submit" value="Validasi" class="btn btn-primary">
                        
                			</td>
                    </tr>
                    </table>
                		</form>
                		<?php
                			if (isset($_POST['submit'])) {
                				# code...
                				$ket= $_POST['keterangan'];

                				$sql=$koneksi->query("UPDATE hackhaton SET
                					ket='$ket' WHERE id_hack = '$_GET[id]'");

                				if ($sql) {
                					?>
                					<script type="text/javascript">
                						document.location = 'index.php?halaman=hackhaton';
                					</script>
                					<?php
                				} else {
                					echo "<script>";
                					echo "alert('Gagal')";
                					echo "</script>";
                				}
                			}
                		?>
                    &nbsp;

                    <form method="POST">
                      <table>
                        <tr>
                          <td>
                            <select name="hadir" class="form-control">
                              <option value="Tidak Hadir">Tidak Hadir</option>
                              <option value="Hadir">Hadir</option>
                            </select>
                          </td>
                          <td>
                            <input type="submit" name="submitx" value="Checklist" class="btn btn-success">
                          </td>
                        </tr>
                      </table>
                    </form>
                    <?php
                    if (isset($_POST['submitx'])) {
                        # code...
                      $had= $_POST['hadir'];

                      $sql=$koneksi->query("UPDATE hackhaton SET
                        kehadiran='$had' WHERE id_hack = '$_GET[id]'");

                      if ($sql) {
                        ?>
                        <script type="text/javascript">
                          document.location = 'index.php?halaman=hackhaton';
                        </script>
                        <?php
                      } else {
                        echo "<script>";
                        echo "alert('Gagal')";
                        echo "</script>";
                      }
                    }
                    ?>

                
              
            </div>
        </div>
  </div>
