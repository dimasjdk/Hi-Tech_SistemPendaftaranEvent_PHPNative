<?php

$id = $_GET['id'];

$sql= $koneksi->query("DELETE FROM talkshow WHERE id_talk='$id'");

if ($sql) {
  ?>
   <script type="text/javascript">
     alert("Berhasil!");
     document.location='?halaman=talkshow';
   </script>
  <?php
}
else  {
  echo "gagal";
}



?>