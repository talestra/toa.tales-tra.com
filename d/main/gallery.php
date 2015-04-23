<script src="gallery/FancyZoom/FancyZoom.js" type="text/javascript"></script>
<script src="gallery/FancyZoom/FancyZoomHTML.js" type="text/javascript"></script>
<?php
	$gpath = dirname(__FILE__) . '/../../gallery/';
	$path = "{$gpath}/xxx/";
	@mkdir($path, 0777);
	
	foreach (scandir($path) as $file) { $rfile = "{$path}/{$file}";
		if (substr($file, 0, 1) == '.') continue;
		switch (substr(strstr($file, '.'), 1)) {
			case 'jpg':
				$w = 160;
				$tfile = "{$gpath}/{$w}/{$file}";
				if (!file_exists($tfile)) {
					$ii = imagecreatefromjpeg($rfile);
					$h = ($w / imageSX($ii)) * imageSY($ii);
					$io = imagecreatetruecolor($w, $h);
					imagecopyresampled($io, $ii, 0, 0, 0, 0, $w, $h, imageSX($ii), imageSY($ii));
					imagejpeg($io, "{$gpath}/{$w}/{$file}");
				}
			break;
		}
	}

	echo '<h2>Imágenes:</h2>';
	echo '<center><table>';
	$count = 0;
	foreach (scandir($path) as $file) { $rfile = "{$path}/{$file}";
		if (substr($file, -4, 4) != '.jpg') continue;
		if ($count % 4 == 0) {
			if ($count != 0) echo '</tr>';
			echo '<tr>';
		}
		echo '<td><a href="gallery/xxx/' . $file . '"><img src="gallery/160/' . $file . '" /></a></td>';
		$count++;
	}
	while ($count++ % 4 != 0) echo '<td></td>';
	echo '</tr>';
	echo '</table></center>';
	//echo '<h2>Vídeos:</h2>';
	//echo '<p>TODO</p>';
?>
<script>setupZoom();</script>