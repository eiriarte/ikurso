<?
// 
function pagxkapo() {
}

// tiu funkcio konstruas la menuon
// $nomo : nomo de la uzanto
// $rajto : rajto de tiu uzanto
// P : Persono (nenia rajto)
// S : Studanto (havas korektanton)
// K : Korekanto (havas multajn studantojn kaj studanta maksimumo)
// A : administrato (cxiaj rajtoj)
function menuo($nomo,$rajto) {
global $persono_id,$persono,$lingvo,$lgv_persona,$lgv_korekanta,$lgv_administranta,$lgv_sxangipersoninformojn,$lgv_eliru,$lgv_alkursoj,$lgv_vortlisto,$lgv_zorgistudantojn,$lgv_zorgiuzantojn,$lgv_lernantalisto,$lgv_zorgiferiojn,$lgv_ferioj,$lgv_stirpanelo,$lgv_statistiko,$lgv_helppagxo,$lgv_forumo,$phpbb2mysql_sid;
	echo vmenuo($nomo,$rajto,"");
}

function kursoligo($nomo,$rajto){
}
// tiu funkcio konstruas la menuo kaj sendas gxian valuon.
// $nomo : nomo de la uzanto
// $rajto : rajto de tiu uzanto
// $vojo : vojo por trovi dosierojn (../ el forumo, nenio por la cetero)
// P : Persono (nenia rajto)
// S : Studanto (havas korektanton)
// K : Korekanto (havas multajn studantojn kaj studanta maksimumo)
// A : administrato (cxiaj rajtoj)
function vmenuo($nomo,$rajto,$vojo,$pagxtitolo) {
	global $lgv_persona,$persono,$lingvo,$lgv_eliru,$lgv_korektanta,$lgv_administranta,$metodo,
	$lgv_sxangipersoninformojn,$lgv_miajlernantoj,$lgv_eliru,$lgv_alkursoj,$lgv_vortlisto
	,$lgv_zorgistudantojn,$lgv_zorgiuzantojn,$lgv_lernantalisto,$lgv_zorgiferiojn,$lgv_ferioj,
	$lgv_stirpanelo,$lgv_statistiko,$lgv_helppagxo,$lgv_forumo,$lgv_skribi,$lgv_helpo, 
	$phpbb2mysql_sid,$persono_id,$kurso,$url,$vojo,$lgv_pasvortoForgesita,$metodo;
$vojo="../";
$res="";
$res.="<div id=\"menuo\">";
$res.="<table><tr><td class=\"unua\">";
$res.="<h1>".$nomo."</h1>";
$res.="<p><a href=\"#\"><a href=\"".$vojo."eliri.php\">".$lgv_eliru."</a></p>";
$res.="</td><td>";
$res.="<h2>".$lgv_persona."</h2>";
$res.="<p><a href=\"".$vojo."forum/index.php?sid=".$phpbb2mysql_sid."\">";
$res.=$lgv_forumo. " ".@phpbb_nombre_nouveau_message($persono_id);
$res.="</a></p>";
$res.="<p><a href=\"javascript:void(0);\" onClick=\"window.open('".$vojo."forum/chatbox_mod/chatbox.php','12_ChatBox','scrollbars=no,width=700,height=550')\">Discussion en ligne</a></p>";
$res.="<p><a href=\"".$vojo."personinformoj.php\">".$lgv_sxangipersoninformojn."</a></p>";
$res.="</td>";
if ($rajto=="K" || $rajto=="A"){
	$res.="<td>";
	$res.="<h2>".$lgv_korektanta."</h2>";
	$res.="<p><a href=\"".$vojo."statLauxKategorio.php\">".$lgv_statistiko."</a></p>";
	$res.="<p><a href=\"".$vojo."helppagxo.php\">".$lgv_helppagxo."</a></p>";
	$res.="<p><a href=\"".$vojo."miajlernantoj.php\">".$lgv_zorgistudantojn."</a></p>";
	$res.="</td>";
}
if ($rajto=="I"){ 
	$res.="<td>";
	$res.="<h2>".$lgv_administranta."</h2>";
	$res.="<p><a href=\"".$vojo."statLauxKategorio.php\">".$lgv_statistiko."</a></p>";
	$res.="<p><a href=\"".$vojo."administri.php\">".$lgv_zorgiuzantojn."</a></p>";
	$res.="</td>";
} 
if ($rajto=="A"){ 
	$res.="<td class=\"elemento\">";
	$res.="<h2>".$lgv_administranta."</h2>";
	$res.="<p><a href=\"".$vojo."stirpanelo.php\">".$lgv_stirpanelo."</a></p>";
	$res.="<p><a href=\"".$vojo."administri.php\">".$lgv_zorgiuzantojn."</a></p>";
	$res.="</td>";
}
$res.="</tr></table></div>";

$res.="<div id=\"pagxo\">";
$res.="<div id=\"subpagxo\">";
$res.="<div id=\"pagxmenuo\">";

$res.="<table class='nula'><tr><td valign='top'>\n";
$res.="Mode d&rsquo;affichage :<br>\n";
$res.="<a href='".$url."?metodo=U' title='Unikode'>\n";
$res.="<img src='".$vojo."style/bouton-U.gif' title='Afficher les lettres accentu&eacute;es' class='";
if ($metodo=="U") {$res.="jes";}else{$res.="ne";}
$res.="'></a>";
$res.="<a href='".$url."?metodo=X' title='X-sistemo'>\n";
$res.="<img src='".$vojo."style/bouton-X.gif' title='Afficher des x pour les accents' class='";
if ($metodo!="U"){$res.="jes";}else{$res.="ne";}
$res.="'></a>\n";
$res.="</td><td valign='top'>\n";
$res.="<br><a href='".$vojo."helpo.php'><button>&nbsp;&nbsp;&nbsp;Aide&nbsp;&nbsp;&nbsp;</button></a>";
$res.="</td></tr></table>";

if (($rajto=="K"||$rajto=="A")) {
	$res.="<h2><a href=\"http://ikurso.esperanto-jeunes.org/sxangxiNBlernantoj.php\">".$lgv_miajlernantoj."</h2></a>";
	$res.="<a href=\"http://ikurso.esperanto-jeunes.org/sxangxiNBlernantoj.php\">";
	$res.="<table title=\"cliquez sur la table pour modifier votre nombre d'&eacute;l&egrave;ves\">";
	$res.="<thead>\n<tr>\n<td>cours</td>\n";
	$res.="<td>&eacute;l&egrave;ves<br>en cours</td>";
	$res.="<td>nombre<br>maximum</td>";
	$res.="</tr>\n</thead>\n<tbody>";

/* tableau des eleves */
	$demando1="select nomo,kodo from kursoj where kursoj.lingvo='".$lingvo."'";
	$result1 = mysql_query($demando1) or die (  "SELECT : malbona demando :".$demando1);
	while($row1 = mysql_fetch_array($result1)) {
		$res.="<tr>\n";
		$res.="\t<td class='col1'>".$row1["nomo"]."</td>\n";
		$demando2="select count(*) as kiom from nuna_kurso,personoj where nuna_kurso.korektanto='".$persono_id."' and nuna_kurso.kurso='".$row1["kodo"]."' and personoj.id=nuna_kurso.studanto and (nuna_kurso.stato='K' or nuna_kurso.stato='N')";
		$result2 = mysql_query($demando2) or die (  "SELECT : malbona demando :".$demando2);
		$row2 = mysql_fetch_array($result2);
		$res.="\t<td>".$row2['kiom']."</td>\n";
		$demando3="select * from korektebla_kurso where korektanto='".$persono_id."' and kurso='".$row1['kodo']."'";
		$result3 = mysql_query($demando3) or die ("SELECT : malbona demando :".$demando3);
		if (mysql_num_rows($result3)==0){
			$demando3="INSERT INTO korektebla_kurso (korektanto,kurso,kiom_lernantoj) VALUES ('$persono_id','".$row1["kodo"]."',0)";
			$result3 = mysql_query($demando3) or die ("INSERT : Invalid query :".$demando3);
			$demando3="select * from korektebla_kurso where korektanto='".$persono_id."' and kurso='".$row1['kodo']."'";
			$result3 = mysql_query($demando3) or die (  "SELECT : malbona demando :".$demando3);
		}
		$row3 = mysql_fetch_array($result3);
		$res.="\t<td>";
		if ($row2['kiom'] > $row3["kiom_lernantoj"]) {
			$res.="<span style=\"color:red\">".$row3["kiom_lernantoj"]."</span>";
		}else {$res.=$row3["kiom_lernantoj"];}
		$res.="</td>\n";
		$res.="\t</tr>\n";
	}

/* fin du tableau */

	$res.="</tbody>\n</table>\n</a>";
}	

$res.="<h2>Cours</h2>";
$res.="<ul class='niv1'>";

$res.="<li><a href=\"".$vojo."fr/intro.php?temo=eo\">Pr&eacute;sentation</a></li>";
$res.="<li class='ligo'>";
$res.="<a href='".$vojo."fr/cge/intro.php?temo=intro'>Cours en dix le&ccedil;ons</a>";
$res.="<ul class='niv2'>";
$res.="<li><a href='".$vojo."fr/cge/intro.php?temo=intro'>Introduction</a></li>";
$demando="select lecionoj.titolo, lecionoj.retpagxo from lecionoj where lecionoj.kurso='CG' and lecionoj.lingvo='FR'";
mysql_select_db( "ikurso");
$result = mysql_query($demando) or die ("INSERT : malbona demando :".$demando);
while($row = mysql_fetch_array($result)) {
	$res.="<li><a href='".$vojo."fr/cge/".$row['retpagxo']."'>".$row['titolo']."</a></li>\n";
}
$res.="</ul></li>";
$res.="<li class='ligo'>";
$res.="<a href='".$vojo."aligxi.php'>Kurso de esperanto</a>";
$res.="<ul class='niv2'>";
$res.="<li><a href='".$vojo."aligxi.php'>Inscription</a></li>";
$res.="<li><a href='".$vojo."fr/cge/vocabula.php'>Lexique</a></li>";
$res.="</ul></li>";
$res.="<li class='ligo'>";
$res.="<a href='".$vojo."fr/gerda/index.php'>Gerda malaperis</a>";
$res.="<ul class='niv2 gerda'>";
$demando="select lecionoj.titolo, lecionoj.retpagxo from lecionoj 
where lecionoj.kurso='GR' and lecionoj.lingvo='FR'";
mysql_select_db( "ikurso");
$result = mysql_query($demando) or die ("INSERT : malbona demando :".$demando);
while($row = mysql_fetch_array($result)) {
	$res.="<li><a href='".$vojo."fr/gerda/".$row['retpagxo']."'>".$row['titolo']."</a></li>\n";
}
$res.="</ul></li>";
$res.="<li><a href=\"".$vojo."fr/gerda/lasu00.php\">Lasu min paroli plu!</a></li>";				 

$res.="<li class='lasta'><a href='".$vojo."helpo.php?temo=elsxutoj'>T&eacute;l&eacute;chargements</a></li>";					 
$res.="</ul>";

$res.="<h2>L&rsquo;esp&eacute;ranto</h2>";
$res.="<ul class='niv1'>";
$res.="<li class='lasta'><a href='".$vojo."ressources.php'>En savoir plus...</a></li>";
$res.="</ul>";

$res.="<h2>Comment faire ?</h2>\n";
$res.="<ul class='niv0'>\n";
$res.="<li><a href='".$vojo."/helpo.php'>".$lgv_helpo."</a></li>\n";
$res.="<li><a href='".$vojo."/fr/intro.php?temo=enskribo'>S&rsquo;inscrire &agrave; un cours</a></li>\n";
$res.="<li><a href='#' onClick=\"window.open('".$vojo."pasvortoforgesita.php','','resizable=no,scrollbars=no,location=no,top=100,left=100,width=400,height=150');\" >";
$res.=$lgv_pasvortoForgesita." ?</a></li>\n";

$res.="<li class='lasta'>\n";
$res.="<a href='".$vojo."reago.php'>".$lgv_skribi." :	";				
$res.="<input type='image' src='".$vojo."bildoj/koverto.gif'>";
$res.="</a></p></li></ul>";

$res.="<h2>Farbskatol&rsquo;</h2>\n<ul>\n<li class='nenio'>";
$res.="<p style='text-align:center' id='farbskatol'>\n";
$res.="<a href='http://farbskatol.net'>Vid&eacute;os en esp&eacute;ranto</a></p></li></ul>\n";

$res.="<p class=\"meze\">&nbsp;Ce site est g&eacute;r&eacute; par&nbsp;:";
$res.="<a href=\"http://www.esperanto-jeunes.org\">";
$res.="<img alt=\"jefo-logeto\" src=\"".$vojo."../bildoj/logo_JEFO.gif\"></a><br>";
$res.="avec le soutien de<br>";
$res.="<a href='http://www.linguaforce.com/esperanto/traduction.htm' alt='linguaforce'>";
$res.="<img src='".$vojo."../bildoj/linguaforce.gif' align='center' border='0'></a>";
$res.="</p>";

$res.="</div>";
$res.="<div class=\"stylenavbar\"></div>";

$res.="<h1>".$pagxtitolo."</h1>";

return $res;
}
?>