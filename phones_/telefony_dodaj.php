<?php
// creating by Przemyslaw Cios  przemyslaw.cios@gmail.com
$operacja 		= $_POST['operacja'];

$baza 		= 'shinchang';
$uzytkownik = 'robak';
$haslo 		= 'robak1';

$id				= $_POST['id'];
$imie 			= $_POST['imie'];
$nazwisko 		= $_POST['nazwisko'];
$organizacja 	= $_POST['organizacja'];
$sala 			= $_POST['sala'];
$telefon 		= $_POST['telefon'];
$komorkowy 		= $_POST['komorkowy'];
$funkcja 		= $_POST['funkcja'];
$dzial 			= $_POST['dzial'];
$email 			= $_POST['email'];
$inne 			= $_POST['inne'];

mysql_connect('localhost',$uzytkownik,$haslo);
mysql_query("SET NAMES 'latin2'");
mysql_query("SET CHARACTER SET 'latin2_general_ci'");
@mysql_select_db($baza) or die("Nie odnaleziono bazy danych!");

if ($operacja == 'dodaj') {
	$kwerenda = "INSERT INTO contact(imie,nazwisko,organizacja,sala,telefon,komorkowy,funkcja,dzial,email,inne)
                             VALUES ('$imie','$nazwisko','$organizacja','$sala','$telefon','$komorkowy','$funkcja','$dzial','$email','$inne')";

}
elseif ($operacja == 'aktualizuj') {
	$kwerenda = "UPDATE contact SET imie='$imie',nazwisko='$nazwisko',organizacja='$organizacja',sala='$sala',telefon='$telefon',komorkowy='$komorkowy',funkcja='$funkcja',dzial='$dzial',email='$email',inne='$inne' WHERE id='$id'";
}
else {
	$id	  = $_GET['id'];
	$kwerenda = "DELETE FROM contact WHERE id='$id'";
}
mysql_query($kwerenda);
mysql_close();
header("Location: telefony_pokaz.php");
?>

