<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<HTML>
<HEAD>
<TITLE>Numery telefonów</TITLE>
<META http-equiv="Content-Type" content="text/html; charset=ISO-1250
">
<META NAME="GENERATOR" CONTENT="MAX's HTML Beauty++ 2004">
<link rel="stylesheet" href="style.css" type="text/css">
<style type="text/css">
<!--
p				{  font-family: Arial, Helvetica, sans-serif; font-size: 12px;  }
th				{  font-family: Arial, Helvetica, sans-serif; font-size: 12px; padding-right: 2px; padding-left: 2px; text-align: center; empty-cells: show; border-style: solid; border-width: thin; }
th.pozycje		{  padding-right: 2px; padding-left: 2px; text-align: right; empty-cells: show; border-style: none; }

td				{  font-family: Arial, Helvetica, sans-serif; font-size: 12px; padding: 0px; padding-right: 2px; padding-left: 2px; text-align: center; empty-cells: show; border-style: solid; border-width: 1px; }
td.menu			{  padding: 0px; border-style: none; font-size: 14px;}
td.sekcje		{  padding-right: 2px; padding-left: 2px; text-align: left; border-style: none; }
td.szare		{  text-align: center; background-color: #808080; color: black; width: 15px; }
td.naglowek_v	{  text-align: center; background-color: black; color: white; }
td.naglowek_h	{  text-align: center; background-color: black; color: white; }
td.roboczy		{  text-align: center; background-color: white; color: black; width: 15px; }
td.sobota		{  text-align: center; background-color: #E6FFFF; color: black; width: 15px; }
td.niedziela	{  text-align: center; background-color: #FFB0B0; color: black; width: 15px; }
td.swieto		{  text-align: center; background-color: red; color: black; width: 15px; }
td.rek_urlop	{  text-align: center; background-color: #CDFF9B; color: black; width: 15px; }
td.wolne		{  text-align: center; background-color: #FFFF00; color: black; width: 15px; }
td.firma		{  font-size: 16px; text-align: center; background-color: #E4EEF1; color: black; height: 26px; font-weight: bold;  }
.lewa			{  font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: left;  }
.prawa			{  font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: right;  }

.tabele_glowne	{  border-color: black; border-width: 2px; border-style: none; border-spacing: 0px; padding: 0px; margin: auto; text-align: left; }
.obramuj		{  border-color: black; border-width: thin; border-style: dashed; font-weight: bold;  }

table.menu		{  font-family: Arial, Helvetica, sans-serif; border-style: none; border-spacing: 0px; padding: 0px; margin: auto;  }
div.pozycje		{  width: 300px; background-position: center; position:absolute; z-index:1; border-style: hidden;  }
legend			{  font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;  }
input.szczegoly	{  font-size: 12px; text-align: left; background-color: #E4EEF1; color: red; border-style: none; }
textarea.szczegoly	{  font-size: 12px; text-align: left; background-color: #E4EEF1; color: red; border-style: none; }
input			{ text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
select			{ text-align: left; font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style>
</HEAD>

<BODY>
<BR>
<b>
Wystarczy skopiowaæ adresy i wkleiæ do Outlook'a :))<br>

Just copy and paste addresses into Outlook:))
</b>
<hr>
ADRESY E-MAIL: SERWER DAEDONG.PL
<HR>
<?php
// Created by Przemyslaw Cios //
$baza 		= 'shinchang';
$uzytkownik = 'robak';
$haslo 		= 'robak1';


mysql_connect('localhost',$uzytkownik,$haslo);
mysql_query('SET CHARSET latin2');
@mysql_select_db($baza) or die("Nie odnaleziono bazy danych!");
$kwerenda = "SELECT * FROM contact ";
$wynik = mysql_query($kwerenda);
$rekordow = mysql_numrows($wynik);
mysql_close();



$a = 0;
while ($a < $rekordow){
$id 			= mysql_result($wynik, $a, "id");
$imie 			= mysql_result($wynik, $a, "imie");
$nazwisko 		= mysql_result($wynik, $a, "nazwisko");
$organizacja 	= mysql_result($wynik, $a, "organizacja");
$sala 			= mysql_result($wynik, $a, "sala");
$telefon 		= mysql_result($wynik, $a, "telefon");
$komorkowy 		= mysql_result($wynik, $a, "komorkowy");
$funkcja 		= mysql_result($wynik, $a, "funkcja");
$dzial 			= mysql_result($wynik, $a, "dzial");
$email 			= mysql_result($wynik, $a, "email");
$inne 			= mysql_result($wynik, $a, "inne");

$srednik=';';

$dlug = strlen($inne);
if($dlug<1){$inne='';$srednik='';}else{$inne="$inne$srednik";}
echo "
		
<FONT SIZE='-1'>$inne</FONT>";
	

$a++;
}
?>
<hr>
<hr>
ADRESY E-MAIL: SERWER DEADONG.PL oraz SERWER DAEDONG-BIZ.CO.KR
<HR>
<?php
// Created by Przemyslaw Cios //
$baza 		= 'shinchang';
$uzytkownik = 'robak';
$haslo 		= 'robak1';


mysql_connect('localhost',$uzytkownik,$haslo);
mysql_query('SET CHARSET latin2');
@mysql_select_db($baza) or die("Nie odnaleziono bazy danych!");
$kwerenda = "SELECT * FROM contact ";
$wynik = mysql_query($kwerenda);
$rekordow = mysql_numrows($wynik);
mysql_close();



$a = 0;
while ($a < $rekordow){
$id 			= mysql_result($wynik, $a, "id");
$imie 			= mysql_result($wynik, $a, "imie");
$nazwisko 		= mysql_result($wynik, $a, "nazwisko");
$organizacja 	= mysql_result($wynik, $a, "organizacja");
$sala 			= mysql_result($wynik, $a, "sala");
$telefon 		= mysql_result($wynik, $a, "telefon");
$komorkowy 		= mysql_result($wynik, $a, "komorkowy");
$funkcja 		= mysql_result($wynik, $a, "funkcja");
$dzial 			= mysql_result($wynik, $a, "dzial");
$email 			= mysql_result($wynik, $a, "email");
$inne 			= mysql_result($wynik, $a, "inne");

$srednik=';';

$dlug = strlen($inne);
if($dlug<1){$inne='';$srednik='';}else{$inne="$inne$srednik";}
$dlug2 = strlen($email);
if($dlug2<1){$email='';$srednik='';}else{$email="$email$srednik";}

echo "


		
<FONT SIZE='-1'>$inne$email</FONT>";
	

$a++;
}

?>
<hr>


</BODY>
</HTML>
