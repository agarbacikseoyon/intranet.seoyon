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
<center><IMG SRC="../img/shinchangpl.jpg" WIDTH="435" HEIGHT="127"><BR></center>

<?php
// Created by Przemyslaw Cios //
$baza 		= 'shinchang';
$uzytkownik = 'robak';
$haslo 		= 'robak1';
$plus="+48";
$pole = '';
$pole = $_GET["pole"];

switch ($pole) {
case 'imie':		$pole = 'ORDER BY imie'; 					break;
case 'nazwisko':	$pole = 'ORDER BY nazwisko'; 				break;
case 'sala':		$pole = 'ORDER BY sala'; 					break;
case 'telefon':		$pole = 'ORDER BY telefon'; 				break;
case 'komorkowy':	$pole = 'ORDER BY komorkowy'; 				break;
case 'funkcja':		$pole = 'ORDER BY funkcja'; 				break;
case 'dzial':		$pole = 'ORDER BY dzial'; 					break;
case 'organizacja':	$pole = 'ORDER BY organizacja';				break;
case 'email':		$pole = 'ORDER BY email'; 					break;
case 'inne':		$pole = 'ORDER BY inne'; 					break;
default:			$pole = 'ORDER BY dzial';
}

mysql_connect('localhost',$uzytkownik,$haslo);
mysql_query('SET CHARSET latin2');
@mysql_select_db($baza) or die("Nie odnaleziono bazy danych!");
$kwerenda = "SELECT * FROM contact $pole";
$wynik = mysql_query($kwerenda);
$rekordow = mysql_numrows($wynik);
mysql_close();

echo "<TABLE BORDERCOLOR='#000000' CELLSPACING='2' WIDTH='961' BORDER='0' ALIGN='center'>
<TR><TD COLSPAN='10' ALIGN='center'></TD></TR>
<TR>
<TD COLSPAN='11' class='prawa'><a href='telefony_pokaz_xls.php'><h>[eksport do excela]<hr></a></TD>
</TR>
<TR BGCOLOR='#F4F4F4'>
 <TH VALIGN='middle'><H6>&nbsp;</H6></TH>
 <TH><A HREF='telefony_pokaz.php?pole=imie'>Name</A></TH>
 <TH><A HREF='telefony_pokaz.php?pole=nazwisko'>Name cd &nbsp;&nbsp;&nbsp;&nbsp;</A></TH>
 <TH><A HREF='telefony_pokaz.php?pole=sala'>hall</A></TH>
 <TH><A HREF='telefony_pokaz.php?pole=telefon'>landline&nbsp;phone</A></TH>
 <TH><A HREF='telefony_pokaz.php?pole=komorkowy'>Mobile&nbsp;Phone</A></TH>
 <TH><A HREF='telefony_pokaz.php?pole=funkcja'>position</A></TH>
 <TH><A HREF='telefony_pokaz.php?pole=organizacja'>Company</A></TH>
 <TH><A HREF='telefony_pokaz.php?pole=dzial'>Department</A></TH>
 <TH><A HREF='telefony_pokaz.php?pole=email'>adres&nbsp;E-mail</A></TH>
 <TH><A HREF='telefony_pokaz.php?pole=email'>adres&nbsp;E-mail pl</A></TH>
</TR>";

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
if ($a%2 != 0) {$tlo='#F4F4F4';} else {$tlo='#D0D0D0';}
	$dlug = strlen($komorkowy);
	$dlug1 = strlen($telefon);
echo "<TR>
		<TD ALIGN='center' VALIGN='middle' BGCOLOR=$tlo><A HREF='telefony_logowanie_mod.php?id=$id'><IMG SRC='/phones/img/pioro.gif' WIDTH='20' HEIGHT='20' ALT='Edit personal data / Edytuj dane o osobie' BORDER='0'></A></TD>
		<TD ALIGN='center' BGCOLOR=$tlo>$imie</TD>
		<TD ALIGN='center' BGCOLOR=$tlo>$nazwisko</TD>
		<TD ALIGN='center' BGCOLOR=$tlo>$sala</TD>";
		if($dlug1<1){echo"<TD ALIGN='center' BGCOLOR=$tlo></TD>";}else{echo"<TD ALIGN='center' BGCOLOR=$tlo>$plus$telefon</TD>";}
	
		if($dlug<1){echo"<TD ALIGN='center' BGCOLOR=$tlo></TD>";}else{echo"<TD ALIGN='center' BGCOLOR=$tlo>$plus$komorkowy</TD>";}
	
		echo"
		<TD ALIGN='center' BGCOLOR=$tlo>$funkcja</TD>
		<TD ALIGN='center' BGCOLOR=$tlo>$organizacja</TD>
		<TD ALIGN='center' BGCOLOR=$tlo>$dzial</TD>
		<TD ALIGN='center' BGCOLOR=$tlo><A HREF='mailto:$email'><FONT SIZE='-1'>$email</FONT></A></TD>
		<TD ALIGN='center' BGCOLOR=$tlo><A HREF='mailto:$inne'><FONT SIZE='-1'>$inne</FONT></A></TD>
	  </TR>";

$a++;
}
echo "
<TR></TR>
<TR><TD COLSPAN='10' ALIGN='left'><A HREF='linki.php' TARGET='_blank'><br>Wszystkie adresy e-mail seoyonelec.pl (do wysyłania seryjnego poczty) <br> All e-mail addresses seoyonelec.pl (to send mail merge)<br></A><br></TD></TR>
<TR></TR>
<TR><TD COLSPAN='10' ALIGN='left'><A HREF='telefony_logowanie.php' TARGET='_self'><br>Dopisz Kontakt/ Add Contact</A></TD></TR>
</TABLE>";
?>


</BODY>
</HTML>
