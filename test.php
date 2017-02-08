<?php
// creating by Przemyslaw Cios  przemyslaw.cios@gmail.com

$baza 		= 'shinchang';
$uzytkownik = 'robak';
$haslo 		= 'robak1';



mysql_connect('localhost',$uzytkownik,$haslo);
mysql_query('SET CHARSET latin2');
@mysql_select_db($baza) or die("Nie odnaleziono bazy danych!");


mysql_query(INSERT INTO contact(imie,nazwisko,organizacja,sala,telefon,komorkowy,funkcja,dzial,email)
 VALUES ('$imie','$nazwisko','$organizacja','$sala','$telefon','$komorkowy','$funkcja','$dzial','$email');
mysql_close();

?>

