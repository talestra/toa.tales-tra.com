<?php
	@session_start();
	if (isset($_GET['hack'])) {
		$_SESSION['hack'] = true;
		header('Location: ./?s=main');
		exit;
	}
	if (isset($_GET['unhack'])) {
		unset($_SESSION['hack']);
		header('Location: ./');
		exit;
	}
	$left = @$open - time();
	//echo "<p>Quedan {$left} segundos</o>";
	//echo '<p>Aquí un flash molón con la cuenta atrás. La web se abrirá automáticamente pasada esta fecha.</p>';
	//echo '<p><a href="wait.php?hack">Click aquí para saltarse la protección temporal</a></p>';
?><html><head>
<title>Tales of the Abyss en español</title>
<style>
body {
	cursor: default;
	background: url("i/bg-wait.jpg") #002829 top center no-repeat;
	font-family: "Georgia", serif;
	color: white;
	text-align: center;
}
#contenedor {
	margin-top: 100px;
}
h1 {
	font-size: 18px;
	color: white;
	text-transform: uppercase;
}
h2 {
	font-size: 16px;
}
a {
	color: white;
	text-decoration: none;
	font-weight: normal;
}
a:hover {
	text-decoration: underline;
}
</style>
</head>
<body>
<div id="contenedor">
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="550" height="400" id="wait" align="middle">
		<param name="allowScriptAccess" value="sameDomain" />
		<param name="allowFullScreen" value="false" />
		<param name="wmode" value="transparent" />
		<param name="movie" value="wait.swf?counter=<?php echo $left; ?>" /><param name="quality" value="high" /><param name="bgcolor" value="#3a6365" />
		<embed src="wait.swf?counter=<?php echo $left; ?>" wmode="transparent" quality="high" bgcolor="#3a6365" width="550" height="400" name="wait" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<h1><a href="http://toa.tales-tra.com/traileruno/">Tráiler uno</a> - <a href="http://toa.tales-tra.com/trailerdos/">Tráiler dos</a></h1>
	<h2><a href="http://tracker.tales-tra.com" title="Tracker Tales Translations">Tracker de Tales Translations</a></h2>
</div>

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

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-246771-7");
pageTracker._initData();
pageTracker._trackPageview();
</script>

</body></html>