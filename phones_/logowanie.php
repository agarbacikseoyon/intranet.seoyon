<?php

 include "log.php";
 $luzytkownik	= $_POST['luzytkownik'];
 $lhaslo		= $_POST['lhaslo'];

 $baza			= 'shinchang';
 $uzytkownik	= 'root';
 $haslo			= 'j9qdkdx3wr';

 mysql_connect('localhost',$uzytkownik,$haslo);
 mysql_query('SET CHARSET latin2');
 @mysql_select_db($baza) or die("Nie odnaleziono bazy danych!");
 $kwerenda = "SELECT * FROM uzytkownic WHERE login='$luzytkownik' AND haslo='$lhaslo'";
 $wynik = mysql_query($kwerenda);
 $rekordow = mysql_numrows($wynik);
 mysql_close();

 if ($rekordow == 1) {
		session_start();
		$_SESSION['lnumer_kontrolny']	= mysql_result($wynik, 0, "numer_kontrolny");
		$_SESSION['luzytkownik']		= mysql_result($wynik, 0, "login");
		$_SESSION['lhaslo']				= mysql_result($wynik, 0, "haslo");
		$_SESSION['lprawa']				= mysql_result($wynik, 0, "prawa");
		ZapisLog("L", "T", $_SESSION['lnumer_kontrolny']);
		header("Location: telefony_logowanie.php");
 }
 else {
 		echo "<HTML><HEAD>
 		<META http-equiv='Content-Type' content='text/html; charset=ISO-8859-2'>
		<link rel='stylesheet' href='style.css' type='text/css'>
		</HEAD><BODY>
		<br><BR><BR><BR><BR><BR><BR><BR>
		
		
		<TABLE BORDER='0' ALIGN='center' CELLPADDING='0' BGCOLOR='#ccccff'>
		<TR>
  
        	<TD ALIGN='left'>Nie ma takiego użytkownika lub wprowadzone hasło jest nieprawidłowe.<br>
	     	Aby powrócić do ekranu logowania naciśnij <A HREF='telefony_logowanie.php'>TUTAJ</A><br>
  	        <hr>
			There is no such username or password entered is incorrect.<br>
			To return to the login screen, press <A HREF='telefony_logowanie.php'>HERE</A></TD>
			<TD WIDTH='70'></TD>
        </TR>
		
		</BODY></HTML>";
 } 
?>
