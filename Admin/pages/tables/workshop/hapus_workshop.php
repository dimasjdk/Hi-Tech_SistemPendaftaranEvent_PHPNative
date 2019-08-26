<?php

$id = $_GET['id'];

$sql= $koneksi->query("DELETE FROM workshop WHERE id_workshop='$id'");

if ($sql) {
  ?>
   <script type="text/javascript">
     alert("Berhasil!");
     document.location='?halaman=workshop';
   </script>
  <?php
}
else  {
  echo "gagal";
}



?>