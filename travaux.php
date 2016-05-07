<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>ikurso-Bienvenue sur le site d'ikurso !</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="style/bleu.css" title="bleu">
<style type="text/css">
* { margin:0; padding:0; }

body
{
	margin-bottom: 25px;
	font-family: "Arial Unicode MS", Arial, Geneva, Helvetica, sans-serif; 
	font-size: 13px;
	background: #FFF url(http://ikurso.esperanto-jeunes.org/style/globe.jpg) 0 0 no-repeat;
	behavior: url(csshover.htc);	/* fichier de comportement pour Win I.E. */	}
body.popup {
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; 
	font-size: 13px;
	background: #E6F3C0;
	padding:10px;
}
textarea,
input,
select,
option {
	font: 12px "Courier New", Courier, monospace;
	color: #369;
}

h2 {font-size:16px;}
h3 {font-size:14px;}
.popup h3 {font-size: 14px;}
img {border:0px;}
em {
	font-style: italic;
	color:#369;
}
hr {
	margin:10px 10px 10px 20px;
	height: 1px;
	color: #668CB2;
}
option {
	padding:0 2px;
}

table {
	font-size: 13px;
}
.meze {
	text-align: center;
	margin-top:5px;
	margin-bottom:5px;
}

.dekstre {
	text-align: right;
	margin:2px;
}
.meze table,
.meze table tr,
.meze table tr td {
	width:auto;
	text-align: center;
	border:solid 1px #668CB2;
	border-collapse: collapse;
	padding:2px 10px;
}
table.voca
{
	padding:2px;
	margin: 0px 0px 10px 20px;
	border: 1px solid #690;
	background: #E6F3C0;
	font-size:11px;
}

table.voca tr td {
	padding: 2px;
	vertical-align: top;
}
table.lernanto {
	border:none;
	border-collapse:collapse;
	border:solid 1px #690;
	font-size:11px;
	margin-bottom:5px;
}
div.lernanto {
	font-size: 11px;
	margin-bottom: 5px;
	padding:10px;
	position:relative;
}
div.gauche {
	float: left;
}

div.lien {
	display:block;
}
a {
	text-decoration:none;
	color:#668CB2;
}

p.note {
	font-size:11px;
	color:#369;
	padding-left:100px;
}
.eraro {
	font-size: 16px;
	font-weight:bold;
	color: #C30;
}
.rimarko {
	font-size:11px;
}
/**************************************
 * entete de la page (toute la largeur)
 **************************************/
#kapo
{
	display:none;
}

/**********************
 * menu principal
 **********************/
#menuo {
body>html	margin-left:5px;
}
#menuo table {
	text-align: center;
}

#menuo table tr td {
	vertical-align: top;
	width: 204px;
	background:white;
	border:solid #668CB2 2px;
	voice-family:"\"}\"";
	voice-family:inherit;
	width:200px;
}
html>body #menuo table tr td {
	width:200px;
}
#menuo table tr td.unua {
	vertical-align: center;
	width: 200px;
	/* border:0px; */
	/* border-bottom: 1px dashed #bbb ; */
	/* background:url(planeteH.jpg); */
	/* background:transparent; */
}

#menuo table tr td.unua h1 {
	color: #369;
	font-size: 22px ;
	margin:10px 0px;
}

#menuo table tr td h2 {
	font-size:16px;
	border-bottom: solid #668CB2 1px;
	background: #FFF url(http://ikurso.esperanto-jeunes.org/style/degrade.gif);
}

#menuo table tr td p {
	font-size:12px;
}

#menuo table tr td p a {
	color: #369;
	text-decoration:none;
	display: block ;
	width: 200px ;
}
#menuo table tr td p a:hover {
	color: white;
	background-color: #668CB2;
}
#subpagxo {
	width: 100%;
	float: right;
	margin-left: -200px;
}

#subpagxo h1 {
	margin: 10px;
	margin-left: 210px;
	font-size: 30px;
	color: #369;
}

/*********************************************************
 * menu latéral : liste des cours, tableau des élèves, ...
 *********************************************************
*/
#pagxmenuo {
	width: 200px;
	float: left;
	margin-left:2px;
	color:#369;
}
html>body #pagxmenuo {	
	margin-left:5px;
}

#pagxmenuo h2 {
	margin-top:10px;
	height: 20px;
	border:none;
	text-align:center;
	color:white;
	display:block;
	background: #668CB2;
	font-size:15px;
	font-style:normal;
	-moz-border-radius:15px 0px 0px 0px;
}
#pagxmenuo a {
	text-decoration:none;
	color:#369;
}
#pagxmenuo h2 a,
#pagxmenuo h2 a.hover {
	color:white;
}
#pagxmenuo h3 {
	font-size:16px;
	margin-top:1px;
	margin-bottom:1px;
	padding:0px;
}
div#pagxmenuo ul {
	margin:0; padding:0;
	width:200px;
	background: #FFF url(http://ikurso.esperanto-jeunes.org/style/degrade.gif) repeat-y;
	border:1px solid #668CB2;
	-moz-border-radius:0px 0px 15px 0px;
	voice-family:"\"}\"";
	voice-family:inherit;
	width:198px;
}
html>body div#pagxmenuo ul {
	width:198px;
}

div#pagxmenuo ul.niv1 li,
div#pagxmenuo ul.niv2 li {
	position:relative;
	list-style:none;
	margin:0;
	font-size: 13px;
	color:#369;
	border-bottom:dashed 1px #668CB2;
	width:198px;
	height:20px;
	padding-top:2px;
}
div#pagxmenuo ul.niv0 li {
	position:relative;
	list-style:none;
	margin:0;
	font-size: 13px;
	color:#369;
	border-bottom:dashed 1px #668CB2;
	padding-top:2px;
	width:200px;
	voice-family:"\"}\"";
	voice-family:inherit;
	width:198px;
}

div#pagxmenuo ul.niv2 li {
	width:198px;
}
div#pagxmenuo li.ligo {
	background: url(http://ikurso.esperanto-jeunes.org/style/triangle.gif) 95% 50% no-repeat;
}
div#pagxmenuo ul.niv0 li.lasta,
div#pagxmenuo ul.niv1 li.lasta,
div#pagxmenuo ul.niv2 li.lasta {
	border-bottom:none;
}
div#pagxmenuo li:hover {
	color: #369;
	font-weight:bold;
}
div#pagxmenuo li a {
	display:block;
	text-decoration:none;
	width:198px;
	color: #369;
	padding-left:18px;
}
div#pagxmenuo ul.niv2 a {
	width:198px;
	padding-left:5px;
}
div#pagxmenuo li:hover a {
	color: #369;
}
div#pagxmenuo>ul.niv2 a {
	width:auto;
}
div#pagxmenuo ul ul {
	position: absolute;
	top:-1px;
	left:198px;
	display:none;
	-moz-border-radius:0px;
}
div#pagxmenuo ul.niv2 ul {
	width:198px;
	position: absolute;
	top:-1px;
	left:198px;
	display:none;
	-moz-border-radius:0px;
}
div#pagxmenuo ul.gerda {
	top:-180px;
}
div#pagxmenuo ul.gerda li {
	height:16px;
}
div#pagxmenuo ul.niv2 a:hover {
	color:#668CB2;
}
div#pagxmenuo ul.niv1 li.ligo:hover ul.niv2,
div#pagxmenuo ul.niv1 li.ligo:hover ul.niv2 ul {
	display:block;
}

#pagxmenuo img {
	text-align: center;
}
#pagxmenuo table {
	border-collapse: collapse;
	font-size: 11px;
	padding:1px;
	text-align:center;
	border:1px solid #668BC2;
	background: #FFF url(http://ikurso.esperanto-jeunes.org/style/degrade.gif) repeat-y;
	-moz-border-radius:0px 0px 15px 0px;
}

#pagxmenuo table tr td {
	border:1px solid #668BC2;
}

#pagxmenuo table tbody tr td.col1 {
	color:#369;
	text-align:left;
	padding:0 0.5em;
}
/*
 * bouton de choix de la methode d'affichage
 */
#pagxmenuo .ne {
	border:none;
	background: url(http://ikurso.esperanto-jeunes.org/style/bouton_blanc.gif);
}
#pagxmenuo .jes {
	border:none;
	background: url(http://ikurso.esperanto-jeunes.org/style/bouton_bleu.gif);
}
/**********************************
 * contenu "utile" de la page
 **********************************
 */
#enhavo p, 
#enhavo table,
#enhavo ol {
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; 
}
#enhavo {
	margin:10px;
	margin-left:210px;
	color: #369;
}
div#adminejo {
	margin:5px;
	padding:0;
	color: #369;
}
div#adminG {
	width:200px;
	float:left;
	margin:0; padding:0;
}

div#adminG select {
	width:200px;
}
div#adminG select option {
	font-size:10px;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; 
}
div#adminD {
	margin-left:210px;
	}
#enhavo h2, h3, h4, h5
{
	margin: 10px 10px 10px 0px;
	padding-top: 5px ;
	color: #668CB2;
	font-size: 24px;
}
#enhavo h3
{
	font-size: 16px;
	border-bottom: 1px solid #668CB2 ;
}
#enhavo h4
{
	font-size: 14px;
	color: #690;
}
#enhavo h5
{
	font-size: 12px;
	color: #690;
}

#enhavo p {
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; 
	padding: 2px 0px;
}
.encadre
{
	margin:2px;
	padding:2px ;
	border: 1px dashed #690;
	font-size:12px;
	background: #E6F3C0;
}
.aligne {
	clear:right;
  	height: 0;
}
/*
 * pied de page
 */
 
.antauxpiedo {
  height: 0;
  clear: both;
}
#piedo {
	clear: both; 
}
p.dato {
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; 
	font-size:11px;
	text-align:right;
	color:#690;
	margin-right:15px;
	padding-top:0px;
}

/**********************************
 * onglets
 **********************************
 */
#tabnav,
.subnav {
	font-family: Verdana, Geneva, Arial, sans-serif; 
   font-size: 11px;
   list-style-type: none;
   padding-bottom: 24px;
   border-bottom: 1px solid #690;
	list-style-image: none;
	}
	
.subnav {
	display:none;
	border:none;
	position:relative;
	top:-12px;
	left:-12px;
}	
#tabnav li,
.subnav li {
   float: left;
   height: 21px;
   margin: 2px 2px 0 2px;
   border: 1px solid #690;
	background-color: #E6F3C0;
}
.subnav li {
	margin:1px;
}
#tabnav li.aktiva,
.subnav li.aktiva {
   border-bottom: 1px solid white;
   background-color: white;
}

#tabnav li.meze,
.subnav li.meze {
	margin-left: 20px;
}

#tabnav li.dekstre {
	float: right;
   border: 1px solid #690;
}
#tabnav li.dekstraktiva {
	float: right;
   border-bottom: 1px solid white;
   background-color: white;
}

#tabnav a,
.subnav a {
   float: left;
   display: block;
   color: black;
   text-decoration: none;
   padding: 4px;
}

#tabnav a:hover,
.subnav a:hover {
   background: white;   
}

#kadro {
	color:black;
	border: 1px solid #690;
	border-top:none;
	padding: 15px;
	background: #FFF;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; 
}
#kadro p {
	margin-left:20px;
}

#kadro h3, h4, h5 {
	margin-left:20px;
}

/*************************************************
 * table de présentation des données personnelles
 *************************************************
 */
table.perso {
	border: 0px;
	text-align:left;
	color: #369;
}
table.perso thead {
	color:#369;
}
table.perso td {
	text-align:left;
	vertical-align: text-top;
	padding:2px;
}

table.perso td.col1 {
	color: #690;
	text-align:right;
}
table.perso p {
	color:#668CB2;
	text-align:left;
}
/**********************************
 * tableau de statistiques
 **********************************
 */
table.stat {
	border: 1px solid #690;
	color: #369;
	border-collapse: collapse;
}

table.stat thead {
	color: black;
	text-align:center;
}

table.stat thead tr td {
	text-align:center;
	border: 1px solid #690;
	padding:0 0.5em;
}

table.stat thead tr td.vide{
	text-align:center;
	border: 0;
}
table.stat tbody tr td {
	text-align:center;
	border: 1px solid #690;
}

table.stat tbody tr td.col1 {
	color: #668CB2;
	text-align:left;
	padding:0 0.5em;
}

table.stat tbody tr td.dekstre {
	text-align:right;
	padding:0 0.3em;
}

table.stat tfoot {
	color: #369;
	text-align:center;
	font-weight:bold;
	background:#E6F3C0;
}

table.stat tfoot tr td {
	border: 1px solid #690;
}

/**********************************
 * liste des élèves
 **********************************
 */
div.lernantoj {
	border:1px solid #690;
	margin-bottom:10px;
	width:100%;
	position:relative;
}
div.lernantoj div.nomo {
	height:35px; 
	background: #E6F3C0;
	border-bottom:1px solid #690;
}
div.nomo img {
	padding:0 5px;
}
div.nomo p {
	padding-top:9px;
}
div.tagoj {
	width:35px; 
	height:35px;
	padding:0; 
	float:left; 
	font-size:14px; 
	font-weight:bold; 
	text-align:center; 
	background: #E6F3C0;
}
div.lernantoj em {
	font-style:normal;
}
/**********************************
 *        pages de cours
 **********************************
 */

.rakonto {
	display:block;
	padding:10px 10% 10px 5%;
}
.rakonto a,
.klarigo a {
	font-weight:bold;
	text-decoration:none;
	color:#369;
}
.rakonto a:hover,
.klarigo a:hover {
	background:#E6F3C0;
	color:#690;
}
.rakonto h4 a {
	text-decoration:none;
	color: #668CB2;
}
.lasu {
	padding:10px 100px 10px 60px;
}
.lasu a {
	vertical-align: super;
	font-size: 10px;
}
.rakonto img {
	float: right;
	vertical-align: text-top;
	margin: 5px;
}
.rakonto .onglet a {
	vertical-align: baseline;
	font-size: 14px;
	color: #668CB2;
	border:solid 1px #690;
	padding:2px;
}
.rakonto h2 {
	text-align: center;
}
.rakonto p {
	line-height:1.5;
	font-size:12px;
	text-align: justify;
}
.rakonto p.citajxo {
	text-align:left;
	margin-left: 50px;
}
.rakonto ol,
.rakonto ul {
	line-height:1.5;
	font-size:13px;
	margin-left:50px;
	text-align: left;
}
.rakonto ul {
	list-style-image: url(http://ikurso.esperanto-jeunes.org/style/triangle.gif);
}
.klarigo ul {
	line-height:1.5;
	font-size:13px;
	margin-left:50px;
	text-align: left;
	list-style-image: url(http://ikurso.esperanto-jeunes.org/style/triangle.gif);
}
.klarigo li {
	padding-bottom:5px;
}
.klarigo ul li a {
	color:black;
	text-decoration:none;
	font-weight:normal;
	color:#369;
	/* display:block; */
}
.klarigo ul li a:hover {
	background:#E6F3C0;
	color:#690;
}
.klarigo ul.sommaire {
	margin-left: 50px;
	line-height:1.5;
	font-size:12px;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; 
}
.klarigo ul.sommaire li {
	list-style-image:"http://ikurso.esperanto-jeunes.org/bildoj/triangle.gif";
}
.klarigo ul.cadre li {
	width: 200px;
}

.klarigo ol  {
	margin-left: 50px;
}

.klarigo p {
	line-height:1.5;
}
.klarigo textarea {
	margin-left: 10px;
	padding: 5 px;
}

.ekz {color : #668CB2;}
.ekz2 {color : brown;}
.fr {color : #003366;}
.eo {color : #339965;}

.vortlisto dt
{
	float: left;
	width: 100px;
	margin: 0 0 0 0;
	padding: .5em;
	font-weight: bold;
	color : #339965;
}

.vortlisto dd
{
	margin: 0 0 0 105px;
	padding: .5em;
}
.retrait {
	margin-left: 50px;
}
.retrait tr td {
	vertical-align: top;
}
.grava {
	color:#C30;
}
.aligxilo {
	color: #369;
	background-color: #E6F3C0;
	margin-top:10px;
	border:1px dashed #690;
}

.aligxilo p {
	text-align: left;
}

.aligxilo table {
	border:none;
	font-size:12px;
}
.rim {
	display : block;
	text-align : justify;
	font-size: 11px;  
	background-color : #F0F3F8;
	color : #369;
	margin : 10px 10px 10px 80px;
	border : dashed 1px #668CB2;
}
.rim p {
	margin:5px;
	padding:2px;
}
.ekzerco {
	color: #003366;
	background-color: #E6F3C0;
	border:1px dashed #690 ;
	margin:5px 30px;
}
/**********************************
 *        exercice
 **********************************
 */
div.tasko {
	font-family: inherit;
	background-color: #E6F3C0;
	border:1px dashed #690;
	margin: 0px 0px 10px 20px;
}
div.tasko p {
	color:#369;
	margin-top:3px;
	margin-bottom:4px;
	line-height:180%;
}
div.tasko table {
	border:none;
	border-collapse: collapse;
	padding:5px;
}
div.tasko table td {
	padding:5px;
}
/*****************************************
 * insert pour lernu
 *****************************************
 */
div#lernu {
	position:relative bottom right;
}
/*********************************************
 * tableau de présentation avec bordures fines
 *********************************************
 */

table.prezento {
	border: solid 1px #690;
	border-collapse: collapse;
	text-align:left;
	cellpadding:2px;
	cellspacing:5px;
	color: #668CB2;
	background:white;
}

table.prezento tr td {
	padding:2;
	text-align:left;
	vertical-align: text-top;
	border: solid 1px #690;
}

table.prezento h2,
table.prezento h3 {
	padding-top: 0;
	margin-top:0;
	text-align:center;
}
table.prezento h2 a,
table.prezento h3 a {
	text-decoration: none;
	color: #668CB2;
}
table.prezento h4 {
	font-weight:normal;
	color: #369;
	font-size:12px;
}
table.prezento img {
	text-align:center;
	border:1px;
	border-color: #690;
}
table.prezento td.txt {
	color:black;	
}
table.prezento form {
	text-align:center;
}
table.hejmo h3 {
	background: #FFF url(http://ikurso.esperanto-jeunes.org/style/degrade.gif) repeat-y;
	display:block;
}
table.hejmo h4 {
	color: #369;
}
table.hejmo p {
	text-align:justify;
	margin:2px 10px;
	font-size:11px;
}
input.bouton {
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; 
	font-size: 11px;
	color:black;
}
/*****************************************
 * listes de choix de styles (A SUPPRIMER)
 *****************************************
 */
/* 
div.stylenavbar {
	margin-top:5px;
	margin-left:210px;
	font-size: 11px; 
	padding: 6px;
}
div.stylenavbar a:hover{
	font-weight:bold;
 }
*/
</style>
</head>
<body>
<!--
* 
* entete de la page
*
<div id="kapo">
	<img src="bildoj/titre2.jpg">
</div>
<!--
* 
* menu personnel 
*
-->
<!-- 
*
* page = menu lateral + onglets (facultatifs) + contenu 
*
-->
<div id="pagxo">
	<div id="subpagxo">
		<div id="pagxmenuo">
			
			<!-- boutons pour choisir l'affichage avec les accents ou avec les x -->
			<!--
			<h2>Affichage</h2>
			<ul class="niv1">
			-->
			<div style="display:none;">
				<p style="margin-top:3px;">
					<a href="#" title="Unikode">
					<img src="style/bouton-U.gif" class="jes">
					</a>
					<a href="#" title="X-sistemo">
					<img src="style/bouton-X.gif" class="ne">
					</a>
					<!--
					<a href="helpo.php"><input type="text" size="6" class="bouton" value="Aide" align="middle"></a>
					-->
					<a href="#"><img src="http://ikurso.esperanto-jeunes.org/bildoj/help.gif" alt="Helpo" title="aide"></a>
				</p>
			</div>
			<!--
			</ul>
			-->
										<h2>D&eacute;j&agrave; inscrit ?</h2>
				<ul class="niv0">
					<form name="eniro" action="eniri.php" method="post">
					<p class="klarigo dekstre">
					Identifiant : 
					<input type="text" name="enirnomo" size="12">&nbsp;</p>
					<p class="klarigo dekstre">Mot de passe :
					<input type="password" name="pasvorto" size="12">&nbsp;</p>
					<p class="dekstre"><input class="bouton" type="submit" name="Submit" value="&nbsp;&nbsp;Entrer&nbsp;&nbsp;">&nbsp;</p>
					</form>
					<li class="ligo">
						<a href="#" onClick="window.open('pasvortoforgesita.php','','resizable=no,scrollbars=no,location=no,top=100,left=100,width=400,height=150');" >
						Mot de passe oubli&eacute;</a>
					</li>
					<li class="lasta">
						<a href="#">Comment s'inscrire ?</a>
					</li>
				</ul>
						<h2>Cours</h2>
			<ul class="niv1">
				<li><a href="#">Introduction</a></li>
				<li class="ligo">
				<a href="#">Cours en dix le&ccedil;ons</a>
					<ul class="niv2">
						<li><a href="#">Introduction</a></li>
						<li><a href="#">Premi&egrave;re le&#231;on</a></li><li><a href="fr/cge/lec02.php">Deuxi&egrave;me le&#231;on</a></li><li><a href="fr/cge/lec03.php">Troisi&egrave;me le&#231;on</a></li><li><a href="fr/cge/lec04.php">Quatri&egrave;me le&#231;on</a></li><li><a href="fr/cge/lec05.php">Cinqui&egrave;me le&#231;on</a></li><li><a href="fr/cge/lec06.php">Sixi&egrave;me le&ccedil;on</a></li><li><a href="fr/cge/lec07.php">Septi&egrave;me le&ccedil;on</a></li><li><a href="fr/cge/lec08.php">Huiti&egrave;me le&ccedil;on</a></li><li><a href="fr/cge/lec09.php">Neuvi&egrave;me le&ccedil;on</a></li><li><a href="fr/cge/lec10.php">Dixi&egrave;me le&ccedil;on</a></li>					<li><a href="fr/cge/vocabula.php">Lexique</a></li>
					</ul>
				</li>
				<li class="ligo">
				<a href="aligxi.php">Kurso de esperanto</a>
					<ul class="niv2">
						<li><a href="#">Inscription</a></li>
						<li><a href="#">Lexique</a></li>
					</ul>
				</li>
				<li class="ligo">
				<a href="#">Gerda malaperis</a>
					<ul class="niv2 gerda">
					<li><a href="#">Pr&eacute;sentation</a></li>
					<li><a href="#">1 : Unua &#264;apitro</a></li>
<li><a href="#">2 : Dua &#264;apitro</a></li>
<li><a href="#">3 : Tria &#264;apitro</a></li>
<li><a href="#">4 : Kvara &#264;apitro</a></li>
<li><a href="#">5 : Kvina &#264;apitro</a></li>
<li><a href="#">6 : Sesa &#264;apitro</a></li>
<li><a href="#">7 : Sepa &#264;apitro</a></li>
<li><a href="#">8 : Oka &#264;apitro</a></li>
<li><a href="#">9 : Na&#365;a &#264;apitro</a></li>
<li><a href="#">10 : Deka &#264;apitro</a></li>
<li><a href="#">11 : Dek-Unua &#264;apitro</a></li>
<li><a href="#">12 : Dek-Dua &#264;apitro</a></li>
<li><a href="#">13 : Dek-Tria &#264;apitro</a></li>
<li><a href="#">14 : Dek-Kvara &#264;apitro</a></li>
<li><a href="#">15 : Dek-Kvina &#264;apitro</a></li>
<li><a href="#">16 : Dek-Sesa &#264;apitro</a></li>
<li><a href="#">17 : Dek-Sepa &#264;apitro</a></li>
<li><a href="#">18 : Dek-Oka &#264;apitro</a></li>
<li><a href="#">19 : Dek-Na&#365;a &#264;apitro</a></li>
<li><a href="#">20 : Dudeka &#264;apitro</a></li>
<li><a href="#">21 : Dudek-Unua &#264;apitro</a></li>
<li><a href="#">22 : Dudek-Dua &#264;apitro</a></li>
<li><a href="#">23 : Dudek-Tria &#264;apitro</a></li>
<li><a href="#">24 : Dudek-Kvara &#264;apitro</a></li>
<li><a href="#">25 : Dudek-Kvina &#264;apitro</a></li>
					</ul>
				</li>
				<li class="lasta"><a href="#">Lasu min paroli plu!</a></li>					 
			</ul>

								<h2>Le saviez-vous ?</h2>
					<ul class="niv0">
						<li class="lasta">
							<p class="meze">
							<a href="http://esperanto-jeunes.org/article.php3?id_article=131">Testez vos connaissances
							<img alt="quiz" src="http://esperanto-jeunes.org/IMG/arton131.gif" title="quiz Esp&eacute;ranto"></a>
						<br></p>
					</li>
					</ul>
					<p class="meze">&nbsp;
					Ce site est g&eacute;r&eacute; par&nbsp;:<a href="http://www.esperanto-jeunes.org"> 
					Esp&eacute;ranto-Jeunes.</a>
					</p>
		</div> <!-- pagxmenuo -->
		<div class="stylenavbar">
		</div>		
		<h1>Bienvenue sur le site d'ikurso !</h1>
	<div id="enhavo">
								
		<p>L'association <a href="http://esperanto-jeunes.org">Esp&eacute;ranto-Jeunes</a> propose plusieurs cours par Internet,  
		pour lesquels elle a mis en place un service de correction gratuit.</p>
		<div style="border:2px solid red;background:white">
		<p class="eraro">
		Samedi 16 juin 2007</p>
		<p class="eraro">Ce site est en travaux. Merci de revenir dans quelques heures.
		</p>
		</div>
		<table class="prezento hejmo">
			<tr>
				<td class="txt">
					<h3><a href="http://ikurso.net">Kurso de Esperanto</a></h3>
					<h4>Logiciel multim&eacute;dia pour Windows ou Linux, id&eacute;al pour d&eacute;buter.</h4>
					
					<p>En 12 le&ccedil;ons, vous apprendrez les bases de l'esp&eacute;ranto de mani&egrave;re 
					agr&eacute;able et ludique. En vous inscrivant, vous pourrez suivre ce cours en compagnie 
					d'un tuteur qui corrigera vos exercices.</p> 
					<p>Le cours est t&eacute;l&eacute;chargeable <a href="http://www.kurso.com.br">ici</a>.</p>
				</td>
				<td class="txt">
					<h3><a href="#">Cours en dix le&ccedil;ons</a></h3>
					<div align="center">
					</div>
					<h4>Cours en ligne pour d&eacute;butants</h4>
					
					<p>Ce cours s'adresse &eacute;galement aux d&eacute;butants. 
					Il se pr&eacute;sente sous forme de pages web alternant explications et exercices.</p>
					<p>L'inscription pour recevoir un correcteur se trouve &agrave; la fin de la 
					premi&egrave;re le&ccedil;on.</p>			
				</td>
				<td class="txt">
					<h3><a href="#">Gerda malaperis</a></h3>
					<div align="center">
					</div>
					<h4>Ce roman policier est l'outil id&eacute;al pour continuer &agrave; progresser en esp&eacute;ranto.</h4>
					<p>Il s'adresse &agrave; ceux qui connaissent d&eacute;j&agrave; 
					les bases de l'esp&eacute;ranto et fait suite aux cours pr&eacute;c&eacute;dents.</p>
					<p>L'inscription pour recevoir un correcteur se trouve &agrave; fin de la premi&egrave;re le&ccedil;on. 
					En parall&egrave;le, lisez aussi les r&eacute;cits de <a href="#"><i>Lasu min paroli plu!</i></a></p>
					</p>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<h3><a href="#"><i>lernu!</i></h3>
					<a href="http://www.lernu.net"></a>
					<p>Cet autre site, g&eacute;r&eacute; par une &eacute;quipe internationale, est traduit en plus de vingt
					langues.<br>Il s'adresse &agrave; ceux qui veulent faire connaissance avec l'esp&eacute;ranto, 
					l'apprendre ou le pratiquer. Vous y trouverez des cours, des dictionnaires, 
					des lectures, des jeux, des correspondants...</p>
					<form name="lernu" action="http://www.lernu.net" method="post">
					<div align="right"><input class="bouton" type="submit" name="Submit" value="Aller sur lernu!"></div></form></p>
				</td>
			</tr>
		</table>
	</div>
<p class="dato">
&#284;isdatigita je : 
2005-10-01</p>
</div> <!-- fin div subpagxo -->
</div>  <!-- fin div pagxo -->
<div class="antauxpiedo">&nbsp;</div>

</body>
</html>  