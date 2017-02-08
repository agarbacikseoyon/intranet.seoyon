<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<HTML>
<HEAD>
<TITLE>Kalendarz</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<META NAME="GENERATOR" CONTENT="MAX's HTML Beauty++ ME">
<style type="text/css">
<!--
td {font-family: Arial, Helvetica, sans-serif; font-size: x-small; text-align: center}
-->
</style>
</HEAD>

<body text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<TABLE border="1" cellspacing="0" cellpadding="1" align="center">
<TR BGCOLOR="#99CCFF"><TH>Pn</TH><TH>Wt</TH><TH>Sr</TH><TH>Cz</TH><TH>Pt</TH><TH>So</TH><TH>Nd</TH></TR>
<?php
 // Skrypt: Kalendarz; Autor: Michał Sikora; Data: 2002-10-06
 $dzien=getdate(time());			// Array na dzisiaj
 $tmp=0;
 if ($dzien[hours]==0) {
 	$tmp=3600;						// Jeli jest godz. zero to zwiększ o jeden ponieważ
	$dzien=getdate(time()+$tmp);	// chyba jest gdzie błšd w PHP dla godz. zero. Czyżby
	}								// ta godz.nie należała do nowego dnia tylko do starego?
 $minelo=($dzien[mday]-1)*86400;	// Tyle dni minęło
 $tmp=getdate(time()+$tmp-$minelo);	// Array na pierwszy dzień m-ca
 $pustych=$tmp[wday]-1;				// Wstawimy tyle pustych pól do tabeli
 if ($pustych==-1) $pustych=6;		// Bo niedziela to dzień nr 0 a nie 7 
 $d=1;
 while ($tmp[mday]==$d)				// Porównuje miesišce
	{
	print "<TR>";
	if ($d==1) for($a=0;$a<$pustych and $a<8;$a++) print "<TD></TD>";
	for($a=0;$a<7-$pustych;$a++)
		{
		if ($tmp[mday]==$d)			// Czy zmienił się miesišc 
			{
			switch ($tmp[mday])
				{
				case $dzien[mday]+0:
					 print "<TD BGCOLOR='#FFCC00'><B>".$d."</B></TD>";
					 break;
				default:
					 if ($tmp[wday]==0) print "<TD BGCOLOR='#CCCCCC'>".$d."</TD>";
					 else print "<TD BGCOLOR='#FFFFFF'>".$d."</TD>";
					 break;
				}
			}
		else print "<TD></TD>";
		$d++;
		$tmp=getdate($tmp[0]+86400);
		}
	print "</TR>";
	$pustych=0;
	}
?>
</TABLE>
</BODY>
</HTML>
