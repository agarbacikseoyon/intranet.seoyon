<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Kalendarz</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<link rel="stylesheet" href="raportowanie/style.css" type="text/css">
<style type="text/css">
<!--
td {  font-family: Arial, Helvetica, sans-serif; font-size: medium; text-align: center; vertical-align: middle; height: 20pt; width: 20pt}
-->
</style>
<script type="text/javascript">
function PrzekazDate(d,wywolywacz) {
	opener.document.getElementById(wywolywacz).value=d;
	window.close();
}
</script>
</HEAD>
<body text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php
$rok		= $_GET['rok'];
$miesiac	= $_GET['miesiac'];
$wywolywacz = $_GET['wywolywacz'];

if ($rok == 0) {
$dzisiaj = getdate(time());	  // Array na dzisiaj
$rok	 = $dzisiaj[year];
$miesiac = $dzisiaj[mon];
}

function rysuj_kalendarz($wybrany_rok,$wybrany_miesiac,$wywolywacz) {
 if ($wybrany_miesiac == 1) {
 $poprz_mies = 12;
 $poprz_rok  = $wybrany_rok - 1;
 $nast_mies	 = $wybrany_miesiac + 1;
 $nast_rok	 = $wybrany_rok;
 }
 else if ($wybrany_miesiac == 12) {
 $poprz_mies = $wybrany_miesiac - 1;
 $poprz_rok = $wybrany_rok;
 $nast_mies	 = 1;
 $nast_rok	 = $wybrany_rok + 1;
 }
 else {
 $poprz_mies = $wybrany_miesiac - 1;
 $poprz_rok = $wybrany_rok;
 $nast_mies	 = $wybrany_miesiac + 1;
 $nast_rok	 = $wybrany_rok;
 }

// $wywol = '"'.$wywolywacz.'"';
 $wywol = $wywolywacz;
 $miesiace=array("","Styczeń","Luty","Marzec","Kwiecień","Maj","Czerwiec","Lipiec","Sierpień","Wrzesień","Październik","Listopad","Grudzień");
 echo "<TABLE border='1' cellspacing='0' cellpadding='0' align='center'>";
 echo "<TR>
 		 <TD><a href='kalendarz.php?wywolywacz=$wywolywacz&rok=$poprz_rok&miesiac=$poprz_mies'><font size='+1'>&lt;&lt;</font></a></TD>
		 <TD COLSPAN='5' ALIGN='center' VALIGN='middle'><font size='-1'><b>$miesiace[$wybrany_miesiac]</b><br>$wybrany_rok</font></TD>
		 <TD><a href='kalendarz.php?wywolywacz=$wywolywacz&rok=$nast_rok&miesiac=$nast_mies'><font size='+1'>&gt;&gt;</font></a></TD>
	   </TR>";
 echo "<TR BGCOLOR='#99CCFF'><TH>Pn</TH><TH>Wt</TH><TH>Śr</TH><TH>Cz</TH><TH>Pt</TH><TH>So</TH><TH>Nd</TH></TR>";
 $dzien=getdate(time());			// Array na dzisiaj
 $tmp=0;
 if ($dzien[hours]==0) {
 	$tmp=3600;						// Jeli jest godz. zero to zwiększ o jeden ponieważ
	$dzien=getdate(time()+$tmp);	// chyba jest gdzie błšd w PHP dla godz zero.Czyżby
	}								// ta godz.nie należała do nowego dnia lecz do starego?
 $minelo=($dzien[mday]-1)*86400;	// Tyle dni minęło - wyrażone w sekundach
 $wybrana_data=mktime(1,0,0,$wybrany_miesiac,1,$wybrany_rok);
 $tmp=getdate($wybrana_data);		// Array na pierwszy dzień m-ca
 $pustych=$tmp[wday]-1;				// Wstawimy tyle pustych pól do tabeli
 if ($pustych==-1) $pustych=6;		// Bo niedziela to dzień nr 0 a nie 7 
 $d=1;
 while ($tmp[mday]==$d)				// Porównuje miesišce
	{
	print "<TR>";
	if ($d==1) for($a=0;$a<$pustych and $a<8;$a++) print "<TD>&nbsp;</TD>";
	for($a=0;$a<7-$pustych;$a++)
		{
		if ($tmp[mday]==$d)			// Czy zmienił się miesišc 
			{
			$termin=$wybrany_rok.'-'.str_pad($wybrany_miesiac,2,'0',STR_PAD_LEFT).'-'.str_pad($d,2,'0',STR_PAD_LEFT);
			switch ($tmp[mday])
				{
				case $dzien[mday]:
					 print "<TD BGCOLOR='#FFCC00'><a href=\"javascript:PrzekazDate('$termin','$wywol');\"><B>".$d."</B></a></TD>";
					 break;
				default:
					 if ($tmp[wday]==0) print "<TD BGCOLOR='#CCCCCC'><a href=\"javascript:PrzekazDate('$termin','$wywol');\">".$d."</a></TD>";
					 else print "<TD BGCOLOR='#FFFFFF'><a href=\"javascript:PrzekazDate('$termin','$wywol');\">".$d."</a></TD>";
					 break;
				}
			}
		else print "<TD>&nbsp;</TD>";
		$d++;
		$tmp=getdate($tmp[0]+86400);
		}
	print "</TR>";
	$pustych=0;
	}
} // Koniec funkcji
rysuj_kalendarz($rok,$miesiac,$wywolywacz);
?>
</TABLE>
</BODY>
</HTML>
