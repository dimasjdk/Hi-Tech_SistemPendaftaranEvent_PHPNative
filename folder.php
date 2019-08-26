<?php

$foto = '../Admin/pembayaran/sf/';
if (!file_exists($foto)) {
	# code...
	# echo "folder tidak ada";
	if (mkdir($foto)) {
		#echo "berhasil buat folder";
	}
} else {
	#echo "folder sudah ada";
}
?>