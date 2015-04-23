<?php
	function fapply(&$v, $f) { $v = $f($v); }
	$skills = array();
	$sk = 0;
	$chara = '?';
	$lang = 'en';
	foreach (file('skills.txt') as $k => $l) { $l = trim($l); if (!strlen($l)) continue;
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
	
	foreach ($skills as $name => $skill) {
		file_put_contents("../d/data/skills/{$name}", serialize($skill));
	}
?>
<style>
.skilll {
	border-collapse: collapse;
	font: 12px Georgia;
	cursor: default;
	border: 2px solid black;
}

.skilll td, .skilll th {
	padding: 3px 8px;
}

.skilll img.fof {
	margin-left: 6px;
}

.skilll th {
	text-align: left;
}

.skilll td.c1 {
	text-align: center;
}

.skilll thead {
	background: black;
	color: white;
}
</style>
<?php
	
	foreach ($skills as $name => $skills2) {
		echo '<h1>' . $name . '</h1>';
		echo '<table class="skilll">';
		echo '<thead>';
		echo '<tr class="head">';
		echo '<th class="c1">Nivel</th>';
		echo '<th class="c2">Inglés</th>';
		echo '<th class="c3">Español</th>';
		echo '</tr>';
		echo '</thead><tbody>';
		foreach ($skills2 as $k => $s) {
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
					echo '<img src="../i/unlock.png">';
				} else if ($level == 'mystic') {
					echo 'Mísica';
				} else {
					echo '???';
				}
			}
			echo '</td>';
			echo '<td class="c2">';
			if ($fof_type) {
				echo '<div title="' . $s['en'][1][0] . '" style="cursor:help;">';
				echo $s['en'][0][1];
				echo '<img class="fof en" src="../i/fof/' . $fof_type . '.png" />';
				echo '</div>';
			} else {
				echo $s['en'][0][1];
			}
			echo '</td>';
			echo '<td class="c3">';
			if ($fof_type) {
				echo '<div title="' . $s['es'][1][0] . '" style="cursor:help;">';
				echo $s['es'][0][1];
				echo '<img class="fof en" src="../i/fof/' . $fof_type . '.png" />';
				echo '</div>';
			} else {
				echo $s['es'][0][1];
			}
			echo '</td>';
			echo '</tr>';
		}
		echo '</tbody></table>';
		//break;
	}
?>