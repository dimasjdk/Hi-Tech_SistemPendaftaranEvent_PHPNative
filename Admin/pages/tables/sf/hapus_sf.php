<?php

$id = $_GET['id'];

$sql= $koneksi->query("DELETE FROM sf WHERE id_sf='$id'");

if ($sql) {
  ?>
   <script type="text/javascript">
     alert("Berhasil!");
     document.location='?halaman=sf';
   </script>
  <?php
}
else  {
  echo "gagal";
}



?>