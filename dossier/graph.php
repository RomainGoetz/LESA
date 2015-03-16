<?php
require_once 'common.php';
read_config();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta charset="utf-8">
        <title><?php echo $config['title']; ?></title>
        <!--<link rel="stylesheet" href="bootstrap.css">-->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="svg.css">
        <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Clear+Sans:200,300,400,400i,500,500i,700,700i">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body>
        <!--[if lt IE 9]>
        <div class="unsupported-browser">
            This website does not fully support your browser.  Please get a
            better browser (Firefox or <a href="/chrome/">Chrome</a>, or if you
            must use Internet Explorer, make it version 9 or greater).
        </div>
        <![endif]-->
        <div class="clear_sans" id="header">
	<h1>LESA</h1>
	<p>/ Dossier racine</p>
		</div>
        <div id="split-container">
            
            <div class="navigation ul_style_none">
	<ul>
	<li><a class="nav-button transition" href="/recherches/LESA/"><i class="fa fa-arrow-left"></i><span>Retour</span></a></li>
	<li><a class="nav-button transition" href=""><i class="fa fa-file-text-o"></i><span>Analyses</span></a></li>
	<li><a class="nav-button transition" href=""><i class="fa fa-file-image-o"></i><span>Productions</span></a></li>
	<li><a class="nav-button transition" href=""><i class="fa fa-hdd-o"></i><span>Sites</span></a></li>
	<li><a class="btn btn-default nav-button transition" id="nav-list" href="list.php<?php echo $dataset_qs; ?>"><i class="fa fa-list"></i><span>Liste</span></a></li>
	<li><a class="nav-button transition" href=""><i class="fa fa-history"></i><span>Historique</span></a></li>
	</ul>
</div>
            
	<div class="tutoriel clear_sans">
    	<ul class="fa-ul">
           	<li><i class="fa fa-folder-open-o"></i><p>Cliquez sur un dossier pour en voir le contenu.</p></li>
           	<li><i class="fa fa-file-image-o"></i><p>Les dossiers sont en blanc et les fichiers en <span style="color:#92c1f0;">bleu</span>.</p></li>
           	<li><i class="fa fa-location-arrow"></i><p>Bougez les éléments pour les ré-agencer ou les isoler.</p></li>
           <li><i class="fa fa-sitemap"></i><p>L'arborescence est re-générée à chaque chargement de la page.</p></li>
           	<li><i class="fa fa-download"></i><p>Tous les fichiers et dossiers sont téléchargeables.</p></li>
           	<li><i class="fa fa-refresh"></i><p>Le contenu du dossier est mis à jour dès qu'un fichier est rajouté.</p></li>
        </ul>
	</div>
            <div id="graph-container">
                <div id="graph"></div>
            </div>
            <div id="docs-container">
                <a id="docs-close" href="#">&times;</a>
                <div id="docs" class="docs"></div>
            </div>
        </div>
        <script src="jquery/jquery-1.10.2.min.js"></script>
        <script src="jquery/jquery.browser.min.js"></script>
        <script src="d3/d3.v3.min.js"></script>
        <script src="colorbrewer.js"></script>
        <script src="lib/geometry.js"></script>
        <script>
            var config = <?php echo json_encode($config); ?>;
        </script>
        <script src="script.js"></script>
        
        <div class="credit clear_sans transition">
			<p>Visualisation réalisée grâce à l'application <a href="https://github.com/nylen/d3-process-map"><i class="fa fa-external-link"></i> D3 process map</a>. 	&#9;— 	&#9;<i class="fa fa-paper-plane-o"></i> <a href="">Crédits généraux.</a></p>
        	
        </div>
        
    </body>
</html>
