<?php
	$_SERVER['start_time'] = microtime(true);
	error_reporting(E_ALL);
	@session_start();
	
	require_once(dirname(__FILE__) . '/config.php');
	
	if (!isset($_SESSION['hack'])) {
		if (time() < $open) {
			require_once(dirname(__FILE__) . '/wait.php');
			exit;
		}
	}
	
	if (!isset($_GET['s'])) {
		header('Location: ?s=main');
		exit;
	}

	$sections = array();
	$sections['main']          = array('main', 'main',          "Principal", 0, 'trad');
	$sections['instrucciones'] = array('sec' , 'instrucciones', "Instrucciones", 1, 'trad');
	$sections['manual']        = array('sec' , 'manual',        "Manual\ny carátulas", 3, 'trad');
	$sections['creditos']      = array('sec' , 'creditos',      "Créditos", 2, 'trad');
	$sections['extra']         = array('sec' , 'extra',         "Notas y\ncuriosidades", 4, 'trad');
	
	$sections['infog']         = array('sec' , 'infog',         "Información\ngeneral", 5, 'game');
	$sections['personajes']    = array('sec' , 'personajes',    "Personajes", 6, 'game');
	$sections['mapa']          = array('sec' , 'mapa',         "Mapa", 7, 'game');
	//$sections['journal']       = array('sec' , 'journal',       "Diario de Luke", 5, 'game');
	$sections['gallery']       = array('sec' , 'gallery',       "Galerías", 8, 'game');
	$sections['sidequest']     = array('sec' , 'sidequest',     "Sidequests", 9, 'game');
	
	$section = array('sec', '404', '¡Horror!', 0, 'misc');
	$section_n = @strtolower(trim($_GET['s']));
	
	if (isset($sections[$section_n])) $section = $sections[$section_n];

	@list($head, $main, $head_title, $sec_type, $sec_cat) = $section;
	
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head lang="es">
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<link href="i/styles.css" rel="stylesheet" type="text/css">
	<script language="javascript" type="text/javascript" src="i/javascript.js"></script>
	<title>Tales of the Abyss - En castellano - <?php echo htmlspecialchars($section[2]); ?></title>
</head><body>

<div id="main1">

	<div id="head1">
		<div id="titletalestra"><a href="http://tales-tra.com" title="Tales Translations"><img src="i/header-talestra.jpg" alt="Tales Translations" /></a></div>
		<div id="headlogo">
			<div id="logoprincipal"><a href="?s=main" title="Tales of the Abyss en español"><img src="i/logo-toa.jpg" alt="Tales of the Abyss" /></a></div>
			<div class="lleft"><a href="?s=instrucciones" title=""><img src="i/header-lleft.jpg" alt="Sobre la traducción" /></a></div>
			<div class="lright"><a href="?s=infog" title=""><img src="i/header-lright.jpg" alt="Sobre el juego" /></a></div>
		</div>
		<div id="selectorseccion">
			<select onchange="document.location='?s='+this.value;" style="background:#1e5456;color:#c9cfce;border:1px solid #113839;font-family:'Lucida Grande', 'Lucida', 'Lucida Sans', arial, sans-serif;">
			<?php
				foreach ($sections as $csn => $cs) {
					echo '<option value="' . htmlspecialchars($csn) . '"';
					if ($csn == $section_n) echo ' selected';
					echo '>';
					echo str_replace("\n", ' ', htmlspecialchars($cs[2]));
					echo '</option>';
				}
			?>
			</select>
		</div>
		<?php include(dirname(__FILE__) . '/d/head/' . basename($head) . '.php'); ?>
	</div>
	<div id="contents">
		<div id="contents-top"></div>
		<div id="contents-mid">
			<?php include(dirname(__FILE__) . '/d/main/' . basename($main) . '.php'); ?>
			<div class="footer">Los contenidos de esta página se distribuyen bajo licencia Creative Commons <a href="http://creativecommons.org/licenses/by-nc-sa/2.5/deed.es">Attribution-NonCommercial-ShareAlike 2.5</a>. <br />Todos los contenidos no creados por <span class="tales">Tales Translations</span> son propiedad de sus respectivos autores.</div>
			<?php
				if (true) {
					echo '<div style="color:#edebdb;">';
				} else {
					echo '<div>';
				}
				echo 'g:' . (microtime(true) - $_SERVER['start_time']);
				echo '</div>';
			?>
		</div>
		<div id="contents-bot"></div>
	</div>

</div>

<?php if (@$_SERVER['HTTP_HOST'] != 'localhost') { ?>

<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=3858317; 
var sc_invisible=1; 
var sc_partition=31; 
var sc_click_stat=1; 
var sc_security="dc465db9"; 
</script>

<script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script><noscript><div class="statcounter"><a href="http://www.statcounter.com/" target="_blank"><img class="statcounter" src="http://c32.statcounter.com/3858317/0/dc465db9/1/" alt="free web stats" ></a></div></noscript>
<!-- End of StatCounter Code -->
</body>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-246771-7");
pageTracker._initData();
pageTracker._trackPageview();
</script>

<?php } ?>

</html>