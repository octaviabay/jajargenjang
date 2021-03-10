<!DOCTYPE html>
<html>
<head>
<title>Jajar Genjang</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div>
<h1>Jajar Genjang</h1>
<form action=".#" method="POST">
  <label for="alas">alas:</label>
  <input type="text" name="alas"><br><br>
  <label for="tinggi">tinggi:</label>
  <input type="text" name="tinggi"><br><br>
  <label for="s_miring">sisi miring:</label>
  <input type="text" name="s_miring"><br><br>
  <button type="submit" value="Submit" name="submit">hitung</button>
</form>
<?php
if(isset($_POST['submit']))
{ 
$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];
$s_miring = $_POST['s_miring'];

$luas = $alas*$tinggi;
$keliling = 2*($alas+$s_miring);

echo "Jajar Genjang<br/>";
echo "Alas = $alas<br/>";
echo "Tinggi = $tinggi<br/>"; 
echo "Sisi Miring = $s_miring<br/>";
echo "Jadi Luas Jajar Genjang Adalah = $luas <br/>";
echo "Jadi Keliling Jajar Genjang Adalah = $keliling <br/>";
}

?>
</div>
</body>
</html>
