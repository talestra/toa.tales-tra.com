<div id="headcontents"><div class="seccontents sec<?php echo (int)$sec_type; if (strpos($head_title, "\n") !== false) echo ' sec2line'; ?>">
	<h2>
	<?php
		switch ($sec_cat) {
			case 'game': echo 'Sobre el juego'; break;
			case 'trad': echo 'Sobre la traducción'; break;
		}
	?>
	</h2>
	<h1><?php echo str_replace("\n", '<br />', htmlspecialchars($head_title)); ?></h1>
	<?php
		echo '<ul>';
		foreach ($sections as $csn => $cs) {
			if ($cs[4] != $sec_cat) continue;
			echo '<li><a href="?s=' .  htmlspecialchars($csn) . '">' . str_replace("\n", ' ', htmlspecialchars($cs[2])) . '</a>';
		}
		echo '</ul>';
	?>	
</div></div>