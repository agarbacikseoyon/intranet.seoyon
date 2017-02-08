<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Kadry</TITLE>
<META http-equiv="Content-Type" content="text/html; charset=ISO-8859-2">
<link rel="stylesheet" href="style.css" type="text/css">
<style type="text/css">
<!--
p  {  font-family: Arial, Helvetica, sans-serif; font-size: 12px}
th {  font-family: Arial, Helvetica, sans-serif; font-size: 12px; padding-right: 2px; padding-left: 2px}
td {  font-family: Times, Arial, Helvetica, sans-serif; font-size: 16px; padding-right: 2px; padding-left: 2px}
-->
</style>
<script language="JavaScript" type="text/javascript">
<!--
function ZmianaHasla() {
		window.open('http://pluton/all/zmiana_hasla.php', '_blank', 'location=no, width=300, height=150, left=200, top=100');
}

//-->
</script>
</HEAD>
<BODY>
<?php
  if (isset($_SESSION['luzytkownik'])) {
	if (strpos($_SESSION['lprawa'],'k')!== false) {
		echo "<div align='right'>
				<A HREF='wyloguj.php'>Wyloguj użytkownika / logout user: ".$_SESSION['luzytkownik']."</A><BR>
				<A HREF=\"JavaScript: ZmianaHasla();\">Zmień hasło/ change passwort</A>
			  </div>";
		echo include "telefony_formularz.php";
		
	}
	else {
	
	echo "<br><BR><BR><BR><BR><BR><BR><BR>
		<TABLE BORDER='0' ALIGN='center' CELLPADDING='0' BGCOLOR='#ffbbbb'>
		<TR>
  
        	<TD ALIGN='left'>Nie masz uprawnień do dodawania kontaktu.<br>
	     	Aby powtórnie się zalogować naciśnij <A HREF='wyloguj.php'>TUTAJ</A><br>
  	        <hr>
			You do not have permission to add Contact.<br>
			To re-log in press <A HREF='wyloguj.php'>HERE</A></TD>
			<TD WIDTH='70'></TD>
        </TR> ";	}
  }
  else {
  echo "<FORM ACTION='/phones/logowanie.php' METHOD='POST'>
  <br><BR><BR><BR><BR><BR><BR><BR>
  <TABLE BORDER='0' ALIGN='center' CELLPADDING='0' BGCOLOR='#CCFFCC'>
  <TR>
  	<TD COLSPAN='3' ALIGN='center' HEIGHT='70' VALIGN='top'><B>Proszę się zalogować aby dodac Kontakt:
	  <BR> Please log in for add Contact</B></TD>
  </TR>
  <TR>
  	<TD ALIGN='right' WIDTH='100'>Login:&nbsp;</TD>
  	<TD ALIGN='left'><INPUT TYPE='text' NAME='luzytkownik' SIZE='20'></TD>
  	<TD WIDTH='70'></TD>
  </TR>
  <TR>
  	<TD ALIGN='right'>Hasło/passwort:&nbsp;</TD>
  	<TD ALIGN='left'><INPUT TYPE='password' NAME='lhaslo' SIZE='20'></TD>
  	<TD></TD>
 </TR>
 	<TR>
 	<TD COLSPAN='2' ALIGN='right' HEIGHT='40' VALIGN='bottom'><INPUT TYPE='submit' NAME='submit' VALUE='Zaloguj&nbsp;/&nbsp;log in'></TD>
 	<TD></TD>
 </TR>
 </TABLE></FORM>";
 }
?>
</BODY>
</HTML>
