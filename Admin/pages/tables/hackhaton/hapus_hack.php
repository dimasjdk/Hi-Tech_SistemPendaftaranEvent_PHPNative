<?php

$id = $_GET['id'];

$sql= $koneksi->query("DELETE FROM hackhaton WHERE id_hack='$id'");

if ($sql) {
  ?>
   <script type="text/javascript">
     alert("Berhasil!");
     document.location='?halaman=hackhaton';
   </script>
  <?php
}
else  {
  echo "gagal";
}



?>