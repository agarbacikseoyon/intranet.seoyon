<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<HTML>
<HEAD>
<TITLE>Formularz aktualizacyjny</TITLE>
<META NAME="GENERATOR" CONTENT="MAX's HTML Beauty++ 2004">
<META http-equiv="Content-Type" content="text/html; charset=ISO-1250
">
<STYLE type="text/css">
a:link {color: rgb(255,0,0);
     background-color: transparent;
     font-weight: bold;
     font-style: normal;
     text-decoration: none}

a:visited {color: rgb(0,0,0);
     background-color: transparent;
     font-weight: normal;
     font-style: normal;
     text-decoration: none}

a:hover, a:active {color: rgb(0,255,0);
     background-color: transparent;
     font-weight: normal;
     font-style: normal;
     text-decoration: none}
</STYLE>
</HEAD>

<BODY>
<?php
// Skrypt wyœwietla formularz wraz z wype³nionymi polami osoby, której numer ID
// zosta³ przekazany temu skryptowi z zewn¹trz
$id = $_GET['id'];
$baza = 'shinchang';
$uzytkownik = 'robak';
$haslo = 'robak1';

mysql_connect('localhost',$uzytkownik,$haslo);
//mysql_query('SET NAMES latin2');
mysql_query('SET CHARSET latin2');
@mysql_select_db($baza) or die("Nie mo¿na znaleŸæ bazy danych!");
$kwerenda = "SELECT * FROM contact WHERE id='$id'";
$wynik = mysql_query($kwerenda);
$rekordow = mysql_numrows($wynik);
mysql_close();

$a = 0;
while ($a < $rekordow) {
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

echo "
<FORM ACTION='/phones/telefony_dodaj.php' METHOD='POST'>
<INPUT TYPE='hidden' NAME='id' VALUE='$id'>
<INPUT TYPE='hidden' NAME='operacja' VALUE='aktualizuj'>
<TABLE>
<TR>
	<TD></TD>
	<TD colspan='3'><H3><IMG SRC='img/shinchang_del.jpg' WIDTH='874' HEIGHT='141'></H3></TD>
</TR>
<TR>
	<TD width='30'></TD>
	<TD>Imiê/Name:</TD>
	<TD colspan='2'><INPUT TYPE='text' NAME='imie' VALUE='$imie' SIZE='40' MAXLENGTH='20'></TD>
</TR>
<TR>
	<TD></TD>
	<TD>Nazwisko/Name cd:</TD>
	<TD colspan='2'><INPUT TYPE='text' NAME='nazwisko' VALUE='$nazwisko' SIZE='40' MAXLENGTH='30'></TD>
</TR>
<TR>
	<TD></TD>
	<TD>Spó³ka/Company:</TD>
	<TD colspan='2'><INPUT TYPE='text' NAME='organizacja' VALUE='$organizacja' SIZE='40' MAXLENGTH='20'></TD>
</TR>
<TR>
	<TD></TD>
	<TD>sala/hall:</TD>
	<TD colspan='2'><INPUT TYPE='text' NAME='sala' VALUE='$sala' SIZE='40' MAXLENGTH='10'></TD>
</TR>
<TR>
	<TD></TD>
	<TD>Telefon stacjonarny/ landline phone:</TD>
	<TD colspan='2'><INPUT TYPE='text' NAME='telefon' VALUE='$telefon' SIZE='40' MAXLENGTH='20'></TD>
</TR>
<TR>
	<TD></TD>
	<TD>Telefon komórkowy/ Mobile Phoney:</TD>
	<TD colspan='2'><INPUT TYPE='text' NAME='komorkowy' VALUE='$komorkowy' SIZE='40' MAXLENGTH='20'></TD>
</TR>
<TR>
	<TD></TD>
	<TD>stanowisko/position:</TD>
	<TD colspan='2'><INPUT TYPE='text' NAME='funkcja' VALUE='$funkcja' SIZE='40' MAXLENGTH='50'></TD>
</TR>
<TR>
	<TD></TD>
	<TD>Dzia³/Department:</TD>
	<TD colspan='2'><INPUT TYPE='text' NAME='dzial' VALUE='$dzial' SIZE='40' MAXLENGTH='40'></TD>
</TR>
<TR>
	<TD></TD>
	<TD>Adres e-mail:</TD>
	<TD colspan='2'><INPUT TYPE='text' NAME='email' VALUE='$email' SIZE='40' MAXLENGTH='50'></TD>
</TR>
<TR>
	<TD></TD>
	<TD>Adres e-mail PL:</TD>
	<TD colspan='2'><INPUT TYPE='text' NAME='inne' VALUE='$inne' SIZE='40' MAXLENGTH='50'></TD>
</TR>
<TR>
	<TD></TD>
	<TD><A HREF='/phones/telefony_pokaz.php'><IMG SRC='/phones/img/anuluj.gif' WIDTH='32' HEIGHT='32' BORDER='0' 
	ALT='Anuluj poprawki i wróæ do listy osób/ Cancel the amendments and return to the list of people'>Return / Powrot</A></TD>
	<TD ALIGN='left'><A HREF='/phones/telefony_dodaj.php?operacja=usun&id=$id'><IMG SRC='/phones/img/kosz.gif' WIDTH='32' HEIGHT='32' ALT='Usuñ osobê/ delete person' BORDER='0'></A></TD>
	<TD ALIGN='right'><INPUT TYPE='submit' VALUE='Zapamiêtaj/Save'></TD>
</TR>
</TABLE>
</FORM>";


++$a;
}

?>


</BODY>
</HTML>
