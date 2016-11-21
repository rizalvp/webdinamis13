<!DOCTYPE html>
<html>
<head>
	<title>FORM MEMPERBAHARUI DATA</title>
</head>
<body>
	<center>
		<h3> SILAKAN PERBAHARUI DATA ANDA </h3>
	</center>
	<center>
		<form action="" method="post">
			<div>
				KODE MOBIL : <input type="text" name="id_mobil" ><br/>
				MEREK : <input type="text" name="merk"><br/>
				MODEL : <input type="text" name="model"><br/>
				TIPE : <input type="text" name="tipe"><br/>
				PINTU : <input type="text" name="pintu"><br/>
				TAHUN PRODUKSI : <input type="text" name="tahun_produksi" ><br/>
				NEGARA PEMBUAT : <input type="text" name="negara_pembuat"><br/>
				JENIS PRODUKSI : <input type="text" name="jenis_produksi"><br/>
			</div>
			<div>
				<input type="submit" name="masuk" value="Input" class="btn btn-primary">
				<input type="submit" name="ubah" value="Update" class="btn btn-success">
				<input type="submit" name="hapus" value="Delete" class="btn btn-info">
				<input type="submit" name="cari" value="Search" class="btn btn-warning">
				<input type="submit" name="list" value="List Mobil" class="btn btn-danger">
			</div>
		</form>
	</center>

<?php
  error_reporting(1);

  include "a.php";
  $id_mobil = $_POST['id_mobil'];
  $merk = $_POST['merk'];
  $model = $_POST['model'];
  $tipe = $_POST['tipe'];
  $pintu = $_POST['pintu'];
  $tahun_produksi = $_POST['tahun_produksi'];
  $negara_pembuat = $_POST['negara_pembuat'];
  $jenis_produksi = $_POST['jenis_produksi'];

  if (isset($_POST['masuk'])) 
  {
    $sql = "INSERT INTO mobil`(`Id_Mobil, Merk, Model, Tipe, Pintu, Tahun_Produksi, Negara_Pembuat, `Jenis_Produksi`) VALUES ('$id_mobil','$merk','$model','$tipe','$pintu','$tahun_produksi','$negara_pembuat','$jenis_produksi')";
    $exe = mysql_query($sql);
  }
  elseif (isset($_POST['ubah']))
  {
    $sql = "UPDATE mobil SET `Merk`='$merk',`Model`='$model',`Tipe`='$tipe',`Pintu`='$pintu',`Tahun_Produksi`='$tahun_produksi',`Negara_Pembuat`='$negara_pembuat',`Jenis_Produksi`='$jenis_produksi' WHERE `Id_Mobil`='$id_mobil'";
    $exe = mysql_query($sql);
  }
  elseif (isset($_POST['hapus'])) 
  {
    $sql = "DELETE FROM mobil WHERE `Id_Mobil`='$id_mobil'";
    $exe = mysql_query($sql);
  }
  elseif (isset($_POST['cari']))
  {
    $sql = "SELECT * FROM mobil WHERE `Id_Mobil`='$id_mobil'";
    $exe = mysql_query($sql);
    echo "<table>\n";
    while($line = mysql_fetch_array($exe, MYSQL_NUM))
    {
      echo "\t<tr>\n";
      foreach ($line as $col_value)
      {
        echo "\t\t<td>$col_value</td>\n";
      }
      echo "\t</tr>\n";
   }
   echo "</table>\n";
  }
?>

</body>
</html>