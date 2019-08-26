<?php
session_start();
include "../koneksi.php";


if (isset($_POST['login']))
			{
				$ambil = $koneksi->query("SELECT * FROM login WHERE username='$_POST[user]'
					AND password ='$_POST[pass]'");
				$yangcocok = $ambil->num_rows;
			                    //mysqli_num_rows()
				if ($yangcocok==1)
				{
					$_SESSION['user']=$ambil->fetch_assoc();
					?>
					<script type="text/javascript">
						alert("Login Sukses berhasil");document.location = '../admin/index.php';
					</script>
					<?php
			                      //echo "<div class='alert alert-info'>Login Sukses</div>";
			                      //echo "<meta http-equiv='refresh' content='1;url=index.php'>";
				}
				else
				{
					?>
					<script type="text/javascript">
						alert("Login Gagal");
						document.location = 'index.php';
					</script>
					<?php
			                      //echo "<div class='alert alert-danger'>Login Gagal</div>";
			                      //echo "<meta http-equiv='refresh' content='1;url=login.php'>";
				}
			}
?>