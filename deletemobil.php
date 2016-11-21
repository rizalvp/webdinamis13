<?php 
 
	include "a.php"; 
 
	$id_mobil= $_GET['Id_mobil']; 

	$query = "DELETE FROM mobil WHERE id_mobil='$id_mobil'"; 
	$hasil = mysql_query($query);
 
	echo '<script language="javascript">alert("Anda berhasil menghapus data !"); 
		document.location="tabel.php";</script>';

?>