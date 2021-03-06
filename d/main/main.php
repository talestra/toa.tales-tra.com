<div id="destacado" class="clearfix">
	<div id="boxdescargar">
		<div class="box1">
			<h2>Descargar</h2>
			<div class="box1inner">
				<h3><a href="https://github.com/talestra/toa.tales-tra.com/releases/download/v1.0/toa-spa.zip" title="Traducci�n Tales of the Abyss">Parcheador</a></h3>
				<p>2,4MB &bull; Windows</p>
				<h3><a href="#" onClick="bubble('bubbleversion', 'hide', 'show'); return false;">Archivos necesarios</a></h3>
				<p>Selecciona tu versi�n del juego&rarr;</p>
				<div id="bubbleversion" class="hide">
					<ul>
						<li><a href="https://github.com/talestra/toa.tales-tra.com/releases/download/v1.0/toa-spa-movies.pak" title="Tales of the Abyss versi�n USA">Versi�n USA normal [418MB]</a></li>
						<li><a href="https://github.com/talestra/toa.tales-tra.com/releases/download/v1.0/toa-spa-movies-undub.pak" title="Tales of the Abyss versi�n USA undub">Versi�n USA <em>undub</em> [332MB]</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="highlight">
		<p>Disfruta de la aventura �pica de <strong>Luke</strong>, <strong>Tear</strong> y sus amigos con la traducci�n espa�ola no oficial de <strong>Tales of the Abyss</strong>, el �ltimo gran Tales of en PlayStation 2. Descargar, parchear y jugar, �as� de sencillo!</p>
	</div>
</div>
<div style="width:250px;float:right;margin-left:35px; margin-top: 10px;">
	<div class="box1">
		<h2>Sobre la traducci�n</h2>
		<?php
			echo '<ul>';
			foreach ($sections as $csn => $cs) {
				if ($cs[4] != 'trad') continue;
				echo '<li><a href="?s=' .  htmlspecialchars($csn) . '">' . str_replace("\n", ' ', htmlspecialchars($cs[2])) . '</a>';
			}
			echo '</ul>';
		?>
	</div>
	<div class="box1">
		<h2>Sobre el juego</h2>
		<?php
			echo '<ul>';
			foreach ($sections as $csn => $cs) {
				if ($cs[4] != 'game') continue;
				echo '<li><a href="?s=' .  htmlspecialchars($csn) . '">' . str_replace("\n", ' ', htmlspecialchars($cs[2])) . '</a>';
			}
			echo '</ul>';
		?>
	</div>	
</div>
<div id="textomain">
	<h2>En anteriores cap�tulos...</h2>
	<p>El 6 de enero de 2007, hace un a�o y medio aproximadamente, liberamos nuestro primer proyecto, una traducci�n no oficial para <a href="http://toe.tales-tra.com" title="Tales of Eternia en espa�ol">Tales of Eternia</a>. Hac�a relativamente poco que Ubisoft hab�a puesto a la venta en Europa el port para PSP, y a pesar de que durante el periodo de promoci�n jur� y perjur� que lo traducir�an al espa�ol, al final no fue as�.</p>
	<p>Un d�a, cerca de mayo de 2006, a <strong>soywiz</strong> le dio por cotillear en los archivos del juego. Estuvo investigando, hurgando; contact� con <strong>PacoChan</strong> (que unos meses antes hab�a estado trasteando con el juego, aunque no lleg� muy lejos) a trav�s de un foro, y entre uno y otro vieron que aquello no era especialmente complicado, y que se pod�a traducir. Soywiz propuso a <strong>Mr Heston</strong> que les echara una mano, y como no ten�a nada mejor que hacer, se puso a ello. Nueve meses despu�s, <span class="tales">Tales Translations</span> publicaba su primera traducci�n.</p>
	<h2>Presentaci�n</h2>
	<p>Despu�s de unos meses de merecido descanso, soywiz empez� a experimentar con "Tales of the Abyss", otro "Tales of" que ten�a toda la pinta de no ir a salir jam�s en Europa y que, si lo hac�a, no ser�a en espa�ol.</p>
	<p>El hackeo del juego se ve�a mucho m�s complicado, pero a largo plazo, factible. Para finales de marzo ya se hab�an extra�do las skits (conversaciones opcionales), el diario, los �tems y el script principal. Los tres fundadores se dieron cuenta de que hab�a mucho m�s texto que en "Tales of Eternia" y de que ellos tres solos no podr�an traducirlo en un tiempo prudencial. Necesitaban ayuda... y la buscaron. Contactaron por diversos medios con <strong>Rinoninha</strong>, <strong>Turyx</strong>, <strong>Yuffie</strong> y conmigo, y nosotros a su vez trajimos a <strong>Kaene</strong> y a <strong>Death's Sapphire</strong>. Con nueve personas en el grupo, el proyecto pod�a comenzar. Pensamos que era un buen n�mero. Ni demasiado grande como para que resultara imposible coordinarse, ni demasiado peque�o como para que no acab�semos nunca.</p>
	<p>A principios de abril empezamos a traducir con nuestra utilidad online las 537 habitaciones de las skits y los 600 objetos. El comienzo fue dif�cil porque tuvimos que decidir y pactar la traducci�n de muchas decenas de t�rminos para asegurar una coherencia interna. Afortunadamente, ya ten�amos montado un wiki desde la traducci�n anterior, lo que agilizaba mucho la consulta a todos estos t�rminos y decisiones en caso de duda.</p>
	<p>(Al margen de eso, hemos escrito unos 2.300 posts en el subforo del proyecto a lo largo de estos meses y hemos intentado que la informaci�n estuviera ordenada... l�stima que a veces el offtopic nos pudiera xD)</p>
	<p>A mitad de mayo ya hab�amos terminado con las skits y los objetos y fue por entonces cuando pudimos observar la magnitud del script principal con sus 22.700 celdas y sus 465 habitaciones. Iba a ser un hueso duro de roer, y se acercaban los ex�menes de junio...</p>
	<h2>Nudo</h2>
	<p>Lleg� el verano y Kaene y Rinoninha se fusilaron ellas solas el diario sin que el resto casi ni nos di�ramos cuenta. La traducci�n del script principal avanzaba muy lentamente, pero d�a a d�a ve�amos c�mo iban subiendo los porcentajes. En septiembre, PacoChan tuvo la gran idea de motivarnos "exigiendo" que traduj�ramos un 1% diario. El grupo respondi� bien y casi todos los d�as hac�amos m�s de lo acordado. De hecho, el �ltimo d�a nos ventilamos un 3% gracias a la emoci�n acumulada y a las ganas de terminar. Fue una jornada muy bonita. Est�bamos a mediados de octubre y, aunque pareciera mentira, en siete meses hab�amos acabado lo m�s duro. Un par de semanas despu�s publicamos dos tr�ilers para celebrarlo.</p>
	<p>La traducci�n estaba ya lista, pero no con la calidad que quer�amos. Deb�amos pulirla, as� que empez� la primera revisi�n directamente en la herramienta online. El proceso fue bastante penoso y acabamos el �ltimo d�a del a�o. Por entonces pens�bamos que podr�amos liberar el parche unas semanas despu�s de los ex�menes de febrero de 2008; sin embargo, hab�a much�simas cosas por revisar y corregir comprob�ndolas directamente en el juego.</p>
	<p>Kaene y yo dedicamos los siguientes meses a jugar al juego traducido realizando cientos de cambios durante las partidas. Durante este testeo se conect� una PS2 a una sintonizadora de TV para PC, con lo cual ahora poseemos unas 2.200 capturas de pantalla con errores, frases lapidarias y algunos grandes momentos.</p>
	<p>Despu�s de terminar el juego por segunda vez, consideramos que la traducci�n hab�a alcanzado un estado aceptable y que ya ten�amos controlados los lugares donde hab�a problemas y cuelgues. Quedaba por terminar el hackeo, que se resolvi� en junio.</p>
	<h2>Desenlace</h2>
	<p>Y como os imaginar�is, estas �ltimas semanas han sido fren�ticas: hemos traducido algunas cositas de �ltima hora (nombres y habilidades de enemigos, textos de algunos men�s y del exe...), hemos montado una versi�n del manual en espa�ol por el mero placer de hacerlo, hemos dise�ado esta web dot�ndola de much�simo m�s contenido del previsto inicialmente y, por supuesto, hemos comprobado con la ayuda de parte del "Grupo Destiny" que el juego no se cuelga.</p>
	<p>Ahora bien, quiz�s est�s leyendo este ladrillo y te preguntes: "Y todo esto... �con qu� fin?".</p>
	<p>S�, �con qu� finalidad? Me imagino que cada miembro del grupo tendr� una respuesta particular, pero creo que nuestra postura se podr�a resumir en la siguiente frase: "�Y por qu� no?".
	<p>Hemos dedicado 16 meses y muchos cientos de horas a un proyecto por el que no vamos a recibir un c�ntimo. Tiempo que pod�amos haber dedicado a cazar m�s lolis o a aprender a bailar claqu�. Sin embargo, esto nos gusta. Traducir es algo apasionante si uno se lo toma con calma y lo hace con cari�o y adem�s nos atrae la idea de que &mdash;al igual que con "Tales of Eternia"&mdash; a medio plazo miles de personas descubran este fant�stico videojuego gracias a nosotros. Cada una de ellas podr� disfrutar la aventura de Luke y compa��a durante unas 40-50 horas y esto es algo que, para qu� negarlo, nos hace mucha ilusi�n.</p>
	<p>Aunque Kaene y Rinoninha son estudiantes de traducci�n e interpretaci�n, ni somos profesionales ni aspiramos a estar al nivel al que deber�an estar todas las traducciones oficiales. Simplemente somos unos cuantos chavales de entre 18 y 23 a�os con muchas ganas. Por lo tanto nuestra traducci�n, aunque est� hecha con mucho mimo y nos encantar�a que estuviera perfecta, inevitablemente tendr� fallos. Puede que no encontr�is frases del estilo de: "Tu fiesta te espera arriba", pero no dudamos de que un equipo de localizaci�n curtido hubiera hecho un trabajo mejor si alguna distribuidora se hubiera decidido a traer el juego traducido, pagando a profesionales preparados para ello y con medios.</p>
	<p>Pero eso no ocurri� y nosotros hemos hecho lo posible para remediarlo. Esperamos que disfrut�is de la traducci�n y la valor�is como lo que es.</p>
	<p>�Y por Lorelei, comprad el juego original!</p>
	<p class="textofirma">&mdash;Parsec, en nombre de todo el equipo. 19 de julio de 2008.</p>
	<div class="aligncenter"><img src="i/mieu1.gif" alt="Mieu" /></div>
	<div class="avisolegal">
	<h2>Descarga de responsabilidad</h2>
		<p>Esta traducci�n se distribuye "tal cual", y <span class="tales">Tales Translations</span> no proporcionar� ninguna clase de garant�a. <span class="tales">Tales Translations</span> no se responsabiliza de cualquier mal uso que se pueda dar a la traducci�n, y no responder� ante ning�n desperfecto provocado por un uso indebido en videoconsolas, ordenadores o consumibles.</p>
		<p>Todos los derechos son propiedad de sus respectivos propietarios, y en ning�n momento debe entenderse �nimo de lucro en la traducci�n a espa�ol de <strong>Tales of the Abyss</strong>, su manual, su packaging o sus elementos de promoci�n por parte de <span class="tales">Tales Translations</span>.
		<p>Asimismo, no existe ning�n inter�s de perjuicio sobre BANDAI NAMCO Games Inc., NAMCO BANDAI Games America Inc, NAMCO TALES STUDIO LTD. o cualquier otra compa��a o individuo participante en el desarrollo o distribuci�n de Tales of the Abyss, y la distribuci�n del parche, manual y dem�s elementos traducidos se detendr� inmediatamente en caso de ser requerido por los titulares de los derechos.</p>
		<p>Esta traducci�n es gratuita. Venderla es ilegal e inmoral, y pagar por ella te hace part�cipe de un delito.</p>
		<p><strong>Apoya a los videojuegos y sus creadores:<br/>
		compra juegos originales.</strong></p>
		<p class="textofirma"><span class="tales"><img src="i/tales-tra.png" alt="Tales Translations"></span><br/>19 de julio de 2008</p>
	</div>
</div>
<img src="i/bubble1.png" style="display: none;" />
<br />