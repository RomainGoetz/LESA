<?php include('/home/romaingo/www/recherches/LESA/header.php'); ?>

<div class="clear_sans" id="header">
	<h1>LESA</h1>
	<p>/ Analyses</p>
</div>
<div class="navigation ul_style_none ">
	<ul>
	<li><a class="nav-button transition" href="/recherches/LESA/analyses#S2"><i class="fa fa-arrow-left"></i><span>Retour</span></a></li>
	<li><a class="nav-button" href=""><i class="fa fa-file-image-o"></i>
	<span>Productions</span></a></li>
	<li><a class="nav-button" href=""><i class="fa fa-hdd-o"></i>
	<span>Sites</span></a></li>
	<li><a class="nav-button" href="http://romaingoetz.fr/recherches/LESA/dossier/"><i class="fa fa-folder-open-o"></i>
	<span>Dossier</span></a></li>
	<li><a class="nav-button" href=""><i class="fa fa-history"></i>
	<span>Historique</span></a></li>
	</ul>
</div>







<div class="s1">
<div class="ulysse clear_sans" id="texte1">
	<?php 
$dir = opendir("/home/romaingo/www/recherches/LESA/analyses/Rschrcs1/txt"); 
while($file = readdir($dir)) { 
?> 

<?php 
if(($file=='.')||($file=='..')){ 
} 
else{ 
?> 

<?php 
$files="./txt/".$file; 
$size = filesize($files); 
$fichier = fopen($files,"r"); 
$texte = fread($fichier, $size);
include_once "/home/romaingo/www/recherches/LESA/tools/markdown/Parsedown.php";
$Parsedown = new Parsedown();
?> 



<div class="texte" id="<?php echo $file; ?>">
	<h1>
	<?php echo $file; ?></h1> 
	<p><?php 
	echo Parsedown::instance()
		->setBreaksEnabled(true)
		->text($texte); ?></p>
	<span class="texte_info"><?php echo $size . '&nbsp;octets'; ?> / 
<?php echo str_word_count($texte) . '&nbsp;mots';?></span>
</div>
<?php 
} 
?> 
<?php 
} 
closedir($dir); 
?> 
</div>
<div class="clear_sans explication word_break"><ul>
<?php 
$dir = opendir("/home/romaingo/www/recherches/LESA/analyses/Rschrcs1/txt"); 
while($file = readdir($dir)) { 
?> 

<?php 
if(($file=='.')||($file=='..')){ 
} 
else{ 
?> 

	<a href="#<?php echo $file; ?>"><li id="<?php echo $file; ?>" style=":active { background-color: #DFDFDF;}"><i class="fa fa-file-text-o"></i><p><?php echo $file; ?></p></li></a>
<?php 
} 
?> 
<?php 
} 
closedir($dir); 
?> </ul></div>
</div>

</body>
</html>

