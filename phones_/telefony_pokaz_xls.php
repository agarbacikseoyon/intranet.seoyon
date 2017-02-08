<?php
header("Content-Transfer-Encoding: base64");
header("Content-Type: text/multipart");
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Arkusz1.xls");
header("Pragma: private");
header("Expires: 0");
header("Cache-Control: private, must-revalidate");
?>

<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">
<HEAD>
<TITLE>Lista kontaktów Shinchang Poland</TITLE>
<META http-equiv="Content-Type" content="text/html; charset=windows-1250">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 10">

<style type="text/css">
<!--
p				{  font-family: Arial, Helvetica, sans-serif; font-size: 12px;  }
th				{  font-family: Arial, Helvetica, sans-serif; font-size: 12px; padding-right: 2px; padding-left: 2px; background-color: black; color: white;  }
.black			{  background-color: black; color: white; }

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

<BODY style="margin-top: 0px; margin-bottom: 0px; margin: 0px;" BGPROPERTIES="fixed">

<TABLE BORDER="1" ALIGN="center" CLASS="tabele_glowne">

<?php
// Created by Przemyslaw Cios //
$baza 		= 'shinchang';
$uzytkownik = 'robak';
$haslo 		= 'robak1';
$plus="+48";

mysql_connect('localhost',$uzytkownik,$haslo);
mysql_query('SET CHARSET latin2');
@mysql_select_db($baza) or die("Nie odnaleziono bazy danych!");
$kwerenda = "SELECT * FROM contact";
$wynik = mysql_query($kwerenda);
$rekordow = mysql_numrows($wynik);
mysql_close();

echo "

<TR BGCOLOR='#F4F4F4'>

 <TH>Name</TH>
 <TH>Name cd &nbsp;&nbsp;&nbsp;&nbsp;</TH>
 <TH>hall</A></TH>
 <TH>landline phone</TH>
 <TH>Mobile Phone</TH>
 <TH>position</TH>
 <TH>Company</TH>
 <TH>Department</TH>
 <TH>adres E-mail</TH>
 <TH>adres E-mail pl</TH>
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
		<TD ALIGN='center' BGCOLOR=$tlo>$imie</TD>
		<TD ALIGN='center' BGCOLOR=$tlo>$nazwisko</TD>
		<TD ALIGN='center' BGCOLOR=$tlo>$sala</TD>
		";
		if($dlug1<1){echo"<TD ALIGN='center' BGCOLOR=$tlo></TD>";}else{echo"<TD ALIGN='center' BGCOLOR=$tlo>'$plus$telefon</TD>";}
	
		if($dlug<1){echo"<TD ALIGN='center' BGCOLOR=$tlo></TD>";}else{echo"<TD ALIGN='center' BGCOLOR=$tlo>'$plus$komorkowy</TD>";}
	
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
</TABLE>";
?>


</BODY>
</HTML>
