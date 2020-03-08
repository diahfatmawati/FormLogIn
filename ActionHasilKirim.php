<!DOCTYPE html>
<html>
<head>
	<title> Action Hasil Kirim </title>
</head>
<body>
<?php 
echo "<br>";
if (empty($_POST['nama'])) {
	header("Location:RedirectHasilKirim.php");
} else {
	echo "<center> Nama : ".$_POST['nama']."</center><br>";
}
if (empty($_POST['email'])) {
	header("Location:RedirectHasilKirim.php");
} else {
	echo "<center> Email : ".$_POST['email']."</center>";
}
echo "<br>";
echo "<center>";
date_default_timezone_set("asia/jakarta");
echo date ("D, d F Y. h:i:s A");
echo "</center>";
?>
</body>
</html>