<html> //ini html
<head>
<title></title>
</head>
<body>
  <form method="post" action="Hasil Waktu Ngecharge.php">
  <label for="Hp">Hp:</label>
  <input type="text" name="Hp">
  <br>
  <label for="kapasitas_baterai">Kapasitas Baterai:</label>
  <input type="text" name="kapasitas_baterai">mAh<br>
	<label for="watt_charger">Watt Charger:</label>
	<input type="number" name="watt_charger" min="0" required max="50">
	  <br>
	  <br>
	<input type="submit" name="submit" value="submit">
  </form>
</body>
</html>

<?php  //ini php
if(isset($_POST['submit'])){
  $Hp=$_POST['Hp'];
  $kapasitas_baterai=$_POST['kapasitas_baterai'];
  $watt_charger=$_POST['watt_charger'];
  $Waktu_nc = ($kapasitas_baterai / $watt_charger) * 1.5;
  echo "Hp $Hp <br>";
  echo "Kapasitas baterai $kapasitas_baterai mAh<br>";
  echo "mAh akan terisi penuh dalam waktu $Waktu_nc menit dengan menggunakan charger $watt_charger W<br>";
}
?>

