<?php
	$seff = array();
	
	foreach (file(dirname(__FILE__) . '/../data/seffects.txt') as $l) { $l = trim($l); if (!strlen($l)) continue;
		if (substr($l, 0, 1) == '*') continue;
		if (substr($l, 0, 1) == '-') {
			list($l) = explode(' ', trim(str_replace('-', '', $l)));
			$name = strtolower($l);
			$seff[$name] = array();
		} else {
			if (substr($l, 0, 6) == 'Notas:') break;
			
			if (substr($l, 0, 7) == 'Efecto:') {
				$seff[$name][$title]['effect'] = trim(substr($l, 7));
			} else if (substr($l, 0, 8) == '¿Dónde?:') {
				$seff[$name][$title]['where'] = trim(substr($l, 8));
			} else {
				$seff[$name][$title]['name'] = $title = $l;
			}
		}
	}
	
	//echo '<pre>'; print_r($seff); echo '</pre>'; exit;
	
	//if (empty($_GET['p'])) { header('Location: ./?s=personajes&p=luke'); exit; }
	
	$chars = array('luke', 'tear', 'jade', 'anise', 'guy', 'natalia', 'asch');
	$chars_surname = array('Fon Fabre', 'Grants', 'Curtiss', 'Tatlin', 'Cecil', 'Luzu Kimlasca Lanvaldear', 'Fon Fabre');
?>
<style>
ul.charaminlist {
	margin: 0 auto;
	padding: 0;
	list-style: none;
	margin: 6px 0 8px 0;
}
ul.charaminlist li {
	display: inline;
	padding: 0 10px;
}
.charname h1, .charname h2 {
	margin: 0;
	padding: 0;
	display: inline;
}

.charname h2 {
	padding-left:10px;
}

.charprofile {
	text-align:justify;
	font-size: 1.2em;
}

.skilll .costume td {
	color: #af3928;
}

.skilll .basic td {
	color: #9f9f9f;
}

</style>

<script>
function $(id) { return document.getElementById(id); }

function swapShow(obj) { obj.style.display = (obj.style.display != 'none') ? 'none' : 'block'; }
function swapById(id) { swapShow($(id)); }
function swapIView() { swapById('iview'); }
</script>

<div style="width:120px;float:right;margin-left:15px;">
	<div class="box1">
		<h2>Personajes</h2>
<!--		
		<ul style="margin-bottom:10px;">
			<li><a href="?s=personajes&p=">Listado</a></li>
		</ul>
-->
		<ul>
<?php		
	foreach ($chars as $name) {
		if ($name == 'asch') {
			echo '<li><a href="?s=personajes&p=' . urlencode($name) . '" style="color:white;">' . ucfirst($name) . '</a></li>';
		} else {
			echo '<li><a href="?s=personajes&p=' . urlencode($name) . '">' . ucfirst($name) . '</a></li>';
		}
	}
?>
		</ul>
	</div>
</div>
<?php
	/*
	echo '<center><ul class="charaminlist">';
	foreach ($chars as $name) {
		echo '<li><a href="?s=personajes&p=' . urlencode($name) . '">' . ucfirst($name) . '</a></li>';
	}
	echo '</ul></center>';
	*/
	
	$name = false;
	$surname = '';
	if (($pos = array_search(@$_GET['p'], $chars)) !== false) {
		$name = $chars[$pos];
		$surname = $chars_surname[$pos];
	}
	
	$name = basename($name);
	
	if (!$name) {
		echo '<p><img src="http://foro.tales-tra.com/images/smilies/slowpoke.gif" /></p>';
	} else {
	
		echo '<link href="i/skills.css" rel="stylesheet" type="text/css">';
		echo '<img src="i/char/' . htmlspecialchars($name) . '.png" style="float:left;margin: 0 10px 10px 0;width:256px;height:320px" />';
		echo '<div class="charname">';
		echo '<h1>' . ucfirst($name) . '</h1><h2>' . $surname . '</h2>';
		echo '</div>';
		echo '<div class="charprofile">';
		echo @file_get_contents(dirname(__FILE__) . '/../data/profile/' . basename($name) . '.html');
		echo '</div>';
		
		echo '<br style="clear:both;" />';

		echo '<h2><a href="javascript:swapIView();">Entrevista a ' . ucfirst($name) . ' <small style="text-transform:none;">Clic aquí para abrir. Contiene <strong>SPOILERS</strong>.</a></small></a></h2>';
		
		echo '<div style="text-align:justify;';
		if ($name != 'asch') echo 'display:none;'; // Para Asch abrimos el spoiler directamente; para que se vea que hay algo y que realmente el que se meta, será sabiendo.
		echo 'background:white;padding:0 9px 0 9px;border:1px solid #554b4b;margin:6px 0 6px 0;font-size:1.15em;" id="iview">';
		echo @file_get_contents(dirname(__FILE__) . '/../data/iview/' . basename($name) . '.html');
		echo '</div>';
		
		echo '<h2>Listado de habilidades</h2>';
		
		if (!function_exists('fapply')) {
			function fapply(&$v, $f) { $v = $f($v); }
		}
		
		$skills = array();
		$sk = 0;
		$chara = '?';
		$lang = 'en';
		
		foreach (file(dirname(__FILE__) . "/../data/skills.txt") as $k => $l) { $l = trim($l); if (!strlen($l)) continue;
			if ($k == 0) continue;
			if (strpos($l, '-') !== false) {
				$t = strtolower(trim(substr($l, 0, 2)));
				if ($lang != 'en' && $t == 'lv') { $sk = 0; $lang = 'en'; }
				if ($lang != 'es' && $t == 'nv') { $sk = 0; $lang = 'es'; }
				$ll = explode('[', $l, 2);
				if (isset($ll[1])) {
					$ll[1] = rtrim($ll[1], ']');
					$ll[1] = explode('->', $ll[1]);
					@fapply($ll[1][0], 'trim');
					@fapply($ll[1][1], 'trim');
				}
				//print_r($ll);
				//printf(" (%s) %s\n", $lang, $l);
				$ll[0] = explode('-', $ll[0]);
				@fapply($ll[0][0], 'trim');
				@fapply($ll[0][1], 'trim');

				$skills[$chara][$sk][$lang] = $ll;
				$sk++;
			} else {
				//printf("*%s\n", $l);
				$chara = strtolower($l);
				$skills[$chara] = array();
				$sk = 0;
			}
		}
		
		//print_r($skills);
		
		//foreach ($skills as $name => $skill) file_put_contents("../d/data/skills/{$name}", serialize($skill));
		
		//$skills = unserialize(file_get_contents(dirname(__FILE__) . '/../data/skills/' . basename($name)));
		@$skills = $skills[$name];
		
		echo '<div class="skillb3">';
		echo '<div class="skillb2">';
		echo '<div class="skillb1">';
		echo '<table class="skilll" width="100%">';
		echo '<thead>';
		echo '<tr class="head">';
		echo '<th class="c1">Nivel</th>';
		echo '<th class="c2">Inglés</th>';
		echo '<th class="c3">Español</th>';
		echo '</tr>';
		echo '</thead><tbody>';		
		
		if ($skills) {
			foreach ($skills as $k => $s) {
				$level = strtolower(trim($s['en'][0][0]));
				$leveln = preg_match('/\\d+/i', $level, $levels);
				
				$extra  = @$s['en'][1][0];
				$extra2 = @$s['en'][1][1];
				$fof_type = false;
				
				if (preg_match('/^2nd/i', $extra)) {
					//echo '2nd';
				} else {
					$fof_type = trim(str_replace('fof', '', strtolower(trim($extra2))));
				}

				echo '<tr class="rt' . ($k % 2) . '">';
				echo '<td class="c1">';
				if ($leveln) {
					echo $levels[0];
				} else {
					if ($level == 'unlock') {
						echo '<img src="i/unlock.png">';
					} else if ($level == 'mystic') {
						echo 'Místico';
					} else {
						echo '???';
					}
				}
				echo '</td>';
				echo '<td class="c2">';
				if ($fof_type) {
					echo '<div title="' . $s['en'][1][0] . '" style="cursor:help;">';
					echo $s['en'][0][1];
					echo '<img class="fof en" src="i/fof/' . $fof_type . '.png" /><span class="foft">FOF</span>';
					echo '</div>';
				} else {
					echo $s['en'][0][1];
				}
				echo '</td>';
				echo '<td class="c3">';
				if ($fof_type) {
					echo '<div title="' . $s['es'][1][0] . '" style="cursor:help;">';
					echo $s['es'][0][1];
					echo '<img class="fof en" src="i/fof/' . $fof_type . '.png" /><span class="foft">CDF</span>';
					echo '</div>';
				} else {
					echo $s['es'][0][1];
				}
				echo '</td>';
				echo '</tr>';
			}
		}
		
		echo '</tbody></table>';	
		echo '</div>';
		echo '</div>';
		echo '</div>';
		
		echo '<table width="100%">';
		echo '<tr><td width="32"><img src="i/fof/32/wind.png" /></td><td>Viento</td><td width="32"><img src="i/fof/32/water.png" /></td><td>Agua</td><td width="32"><img src="i/fof/32/fire.png" /></td><td width="60">Fuego</td></tr>';
		echo '<tr><td width="32"><img src="i/fof/32/earth.png" /></td><td>Tierra</td><td width="32"><img src="i/fof/32/light.png" /></td><td>Luz</td><td width="32"><img src="i/fof/32/shadow.png" /></td><td width="60">Sombra</td></tr>';
		echo '</table>';
		
		echo '<h2>Artes místicas de ' . ucfirst($name) . '</h2>';

		echo '<div style="text-align:justify;background:white;padding:0 9px 0 9px;border:1px solid #554b4b;margin:6px 0 6px 0;font-size:1.15em;">';
		echo @file_get_contents(dirname(__FILE__) . '/../data/mystic/' . basename($name) . '.html');
		echo '</div>';
		
		echo '<h2>Cámaras de fonorranura de ' . ucfirst($name) . '</h2>';

		echo '<div style="text-align:justify;background:white;padding:0 9px 0 9px;border:1px solid #554b4b;margin:6px 0 6px 0;font-size:1.15em;">';
		echo @file_get_contents(dirname(__FILE__) . '/../data/fonslot/' . basename($name) . '.html');
		echo '</div>';

		echo '<a name="costumes"></a>';
		echo '<h2><a href="javascript:swapById(\'seff\');">Títulos y efectos de ' . ucfirst($name) . ' <small style="text-transform:none;">Clic aquí para abrir. Contiene <strong>SPOILERS</strong>.</a></small></h2>';
		
		echo '<div id="seff" style="display:block;">';
?>
<p>
Muchas gracias a <a href="http://foro.tales-tra.com/memberlist.php?mode=viewprofile&u=536" target="_blank"><strong>Nanami</strong></a> por recortar las imágenes de los trajes
y a <a href="http://foro.tales-tra.com/memberlist.php?mode=viewprofile&u=343" target="_blank"><strong>NebilimK</strong></a> por facilitarons un <a href="http://foro.tales-tra.com/viewtopic.php?f=33&t=1321#p25854" target="_blank">scan con los trajes</a>.
</p>
<?php
		
		if (true) {
			echo '<div class="skillb3"><div class="skillb2"><div class="skillb1">';
			echo '<table class="skilll" width="100%">';
			echo '<thead>';
			echo '<tr class="head">';
			//echo '<th class="c1">Inglés</th>';
			//echo '<th class="c1">Español</th>';
			echo '<th class="c1" style="width:130px;">Nombre</th>';
			echo '<th class="c2">Efectos</th>';
			echo '<th class="c3" style="width:180px;">Dónde</th>';
			echo '</tr>';
			echo '</thead><tbody>';
			
			$costume = 0;
			foreach (@$seff[$name] as $r) {
				$ccostume = false;
				$class = 'normal';
				if ($r['where'] == 'Título del principio') { $class = ' basic'; $costume++; $ccostume = true; }
				if ($r['where'] == 'En la historia principal') $class = ' basic';
				if (preg_match('/Cambio de traje/i', $r['effect'])) { $class = ' costume'; $costume++; $ccostume = true; }
				echo '<tr class="' . $class . '"';
				if ($ccostume) {
					echo ' style="cursor:help;" onmouseover="coustome_hide_delay_stop();costume_show(event, ' . $costume . ',this,\'' . htmlspecialchars($r['name']) . '\');" onmouseout="coustome_hide_delay();"';
				}
				echo '>';
				echo '<td>' . htmlspecialchars($r['name']) . '</td>';
				echo '<td>' . htmlspecialchars($r['effect']) . '</td>';
				echo '<td>' . htmlspecialchars($r['where']) . '</td>';
				echo '</tr>';
			}
		
			echo '</tbody></table>';	
			echo '</div>';
			echo '</div>';
			echo '</div>';
		}
		
		echo '</div>';
	}
?>

<div id="costume" style="display:none;" onmouseover="coustome_hide_delay_stop();" onmouseout="coustome_hide_delay();">
	<div class="skillb3"><div class="skillb2"><div class="skillb1" style="background:#eeeddc;">
		<table class="skilll" width="140px">
		<thead>
			<tr><td><h1 id="costumeTitle" style="text-align:center;margin:0;padding:0;line-height:0.9em;font-size:20px;">Título</h1></td></tr>
		</thead><tbody>
			<!--<tr><td><img id="costumeImage" src="i/costumes/blank.png" style="width:170px;height:300px;" /></td></tr>-->
			<tr><td style="padding:0;margin:0;"><div id="costumeImage" style="width:170px;height:300px;background-image:url('i/costumes/<?php echo $name; ?>.jpg');"><a id="costumeImageLink" href="" target="_blank"><img src="i/costumes/blank.png" width="170" height="300" border="0" /></a></div></td></tr>
		</tbody>
		</table>
	</div></div></div>
</div>

<img src="i/costumes/<?php echo $name; ?>.jpg" style="display: none;" />

<script>
	var sec = location.href.split("#")[1];
	if (sec != "costumes") swapById("seff");
	
	var hideCostume = false;
	var chara = '<?php echo $name; ?>';
	
	function findPosX(obj) {
		var curleft = 0;
		
		if (obj.offsetParent) {
			while (1)  {
				curleft += obj.offsetLeft;
				if (!obj.offsetParent) break;
				obj = obj.offsetParent;
			}
		} else if (obj.x) {
			curleft += obj.x;
		}
		
		return curleft;
	}

	function findPosY(obj) {
		var curtop = 0;
		if (obj.offsetParent) {
			while (1) {
				curtop += obj.offsetTop;
				if(!obj.offsetParent) break;
				obj = obj.offsetParent;
			}
		} else if (obj.y) {
			curtop += obj.y;
		}
		return curtop;
	}
	
	function coustome_hide_delay_stop() {
		hideCostume = false;
		clearTimeout(coustome_hide_delay_id);
		coustome_hide_delay_id = null;
	}
	
	var coustome_hide_delay_id;
	
	var co_int, co_op = 0;
	var ci = $('costumeImage');
	
	function coustome_hide_delay() {
		hideCostume = true;
		coustome_hide_delay_id = setTimeout(costume_hide, 100);
	}
	
	function costume_hide() {
		//if (!hideCostume) return;
		$('costume').style.display = 'none';
	}

	function coif() {
		co_op += 0.1;
		ci.style.opacity = co_op;
		if (co_op >= 1) { clearInterval(co_int); co_int = null; }
	}
	
	function showImage() {
		co_op = 0; ci.style.opacity = 0;
		ci.style.visibility = 'visible';
		clearInterval(co_int);
		co_int = setInterval(coif, 30);
	}

	//ci.onload = showImage;
	
	var lastId = -1;
	
	function costume_show(e, id, cur, title) {
		var lay = $('costume');
		//ci.src = 'i/costumes/' + chara + '/' + id + '.png';

		$('costumeImageLink').href = 'i/costumes/' + chara + '/' + id + '.png';

		if (lastId != id) {
			ci.style.visibility = 'hidden';
			ci.style.backgroundPosition = '-' + (170 * (id - 1)) + 'px 0px';
			showImage();
		}
		
		lastId = id;
		
		$('costumeTitle').innerHTML = title;
		$('costume').style.display = 'block';
		lay.style.position = 'absolute';
		lay.style.left = (findPosX(cur) - 56) + 'px';
		lay.style.top = (findPosY(cur) - 160) + 'px';
	}
</script>