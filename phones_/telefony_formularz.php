<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<HTML>
<head>
  <title>Formularz contact</title>
  <link rel="shortcut icon" HREF="ico/shinchang.ico"> 
 <meta name="GENERATOR" content="Quanta Plus">
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-1250">
</head>

<BODY>
<FORM ACTION="/phones/telefony_dodaj.php" METHOD="POST">

<TABLE ALIGN="center">
<TR>
	<TD HEIGHT="50" COLSPAN="2" ALIGN="center" VALIGN="top"><H2><IMG SRC='img/shinchang_add.jpg' WIDTH='879' HEIGHT='131'></H2></TD>
</TR>
<TR>
	<TD>
     <INPUT TYPE="hidden" NAME="operacja" VALUE="dodaj">	
	</TD>
</TR>

<TR>
	<TD>Imiê/Name:</TD>
	<TD><INPUT TYPE="text" NAME="imie" MAXLENGTH="20"></TD>
</TR>
<TR>
	<TD>Nazwisko/Name cd:</TD>
	<TD><INPUT TYPE="text" NAME="nazwisko" MAXLENGTH="30"></TD>
</TR>
<TR>
	<TD>Spó³ka/Company:</TD>
	<TD><INPUT TYPE="text" NAME="organizacja" MAXLENGTH="20"></TD>
</TR>
<TR>
	<TD>sala/hall:</TD>
	<TD><INPUT TYPE="text" NAME="sala" MAXLENGTH="10"></TD>
</TR>
<TR>
	<TD>Telefon stacjonarny/ landline phone:</TD>
	<TD><INPUT TYPE="text" NAME="telefon" MAXLENGTH="20"></TD>
</TR>
<TR>
	<TD>Telefon komórkowy/ Mobile phone:</TD>
	<TD><INPUT TYPE="text" NAME="komorkowy" MAXLENGTH="20"></TD>
</TR>
<TR>
	<TD>stanowisko/position:</TD>
	<TD><INPUT TYPE="text" NAME="funkcja" MAXLENGTH="50"></TD>
</TR>
<TR>
	<TD>Dzia³/Department:</TD>
	<TD><INPUT TYPE="text" NAME="dzial" MAXLENGTH="50"></TD>
</TR>
<TR>
	<TD>Adres e-mail:</TD>
	<TD><INPUT TYPE="text" NAME="email" MAXLENGTH="50"></TD>
</TR>
<TR>
	<TD>Adres e-mail PL:</TD>
	<TD><INPUT TYPE="text" NAME="inne" MAXLENGTH="50"></TD>
</TR>
<TR><TD></TD><TD ALIGN='right'><INPUT TYPE="reset" VALUE="Wyczysæ / Clear"><INPUT TYPE="submit" VALUE="Dopisz / Add"></TD></TR>
<TR>
<TD><A HREF="telefony_pokaz.php"><IMG SRC="/phones/img/anuluj.gif" WIDTH="32" HEIGHT="32" BORDER="0" 
	ALT="Anuluj poprawki i wróæ do listy osób/ Cancel the amendments and return to the list of people">Return / Powrot</A></TD>
</TR>
</TABLE>



</FORM>


</BODY>
</HTML>
