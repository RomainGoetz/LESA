<!-- ANALYSES -->


<?php include('/home/romaingo/www/recherches/LESA/header.php'); ?>

<div class="clear_sans" id="header">
	<h1>LESA</h1>
	<p>/ Analyses</p>
</div>
<div class="navigation ul_style_none">
	<ul>
	<li><a class="nav-button transition" href="/recherches/LESA/"><i class="fa fa-arrow-left"></i><span>Retour</span></a></li>
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
<div class="clear_sans explication little">
	<ul>
		<li><i class="fa fa-pencil"></i><p>Cette partie regroupe des recherches écrites. </p></li>
		<li><i class="fa fa-compass"></i>
<p>Utilisez le navigateur en bas de l'écran pour naviguer dans les textes récents. </p></li>
		<li><i class="fa fa-ellipsis-v"></i><p>Groupe présente les textes en fonction de leur liens initaux. </p></li>
	</ul>
</div>


<div id="S1">
	<div id="S2">
		
			<div class="sous_nav clear_sans ul_style_none">
				<ul>
					<li><a href="#S1" class="active1">Derniers textes</a></li>
					<li><a href="#S2" class="active2">Groupes</a></li>
				</ul>
			</div>
			
<div class="tab1">
	<div id="SS1">
		<div id="SS2">
			<div id="SS3">
			<div class="last_published">
				<div class="ulysse more_padding clear_sans">
		
			<?php 
include_once "/home/romaingo/www/recherches/LESA/tools/markdown/Parsedown.php";
$Parsedown = new Parsedown();?>
			
			<div class="text1">
<?php $Intention2 = "/home/romaingo/www/recherches/LESA/analyses/Rschrcs1/txt/150128_image_dans_l_espace_public.txt";
$text1 = file_get_contents($Intention2); 
echo $Parsedown->text($text1); ?>
				
<div class="infos_fin_texte">
	<p>
	<?php echo "Dernière modification le : " . date ("d/m/Y - H:i:s.", filemtime($Intention2));?></p>
	<p>
	<?php echo str_word_count($text1) . '&nbsp;mots';?>
	<?php $size = filesize($Intention2); 
	echo '&nbsp;-&nbsp;' . $size . ' octets'; ?>
	</p>
</div>
			</div>
		
			<div class="text2">
<?php $AlterReel = "/home/romaingo/www/recherches/LESA/analyses/Rschrcs1/txt/Alter_reel.markdown";
$text2 = file_get_contents($AlterReel); 
echo $Parsedown->text($text2); ?>
				
<div class="infos_fin_texte">
	<p>
	<?php echo "Dernière modification le : " . date ("d/m/Y - H:i:s.", filemtime($AlterReel));?></p>
	<p>
	<?php echo str_word_count($text2) . '&nbsp;mots';?>
	<?php $size = filesize($AlterReel); 
	echo '&nbsp;-&nbsp;' . $size . ' octets'; ?>
	</p>
</div>
			</div>
			
<div class="text3">
<?php $GRAZIELLA = "/home/romaingo/www/recherches/LESA/analyses/Rschrcs1/txt/GRAZIELLA_Alphonse_de_LAMARTINE_PARTIE_VI.markdown";
$text3 = file_get_contents($GRAZIELLA); 
echo $Parsedown->text($text3); ?>
				
<div class="infos_fin_texte">
	<p>
	<?php echo "Dernière modification le : " . date ("d/m/Y - H:i:s.", filemtime($GRAZIELLA));?></p>
	<p>
	<?php echo str_word_count($text3) . '&nbsp;mots';?>
	<?php $size = filesize($GRAZIELLA); 
	echo '&nbsp;-&nbsp;' . $size . ' octets'; ?>
	</p>
</div>
			</div>
				
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
			
			
			
			
			
			
			<div class="tab2">
				<div class="last_published2">
			<?php include('/home/romaingo/www/recherches/LESA/analyses/tab2.php');?>
				</div>
			</div>
	
		<div class="nav_interne clear_sans ul_style_none transition">
	<ul>
		<li><a href="#SS1">Intention 2</a></li>
		<li><a href="#SS2">Supersitions Numériques</a></li>
		<li><a href="#SS3">Grazllia</a></li>
	</ul>
</div>
				
	</div>
</div>


</body>
</html>

