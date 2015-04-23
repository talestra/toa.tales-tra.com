<div style="width:250px;float:right;margin-left:35px;">
	<div class="box1">
		<h2>Tabla de contenidos</h2>
		<ol>
			<li><a href="#sec1">Cifras y letras</a></li>
			<li><a href="#sec2">Calendario de Auldrant</a></li>
			<li><a href="#sec3">Animaciones de zona</a></li>
			<li><a href="#sec4">Lenguaje f�nico</a></li>
			<li><a href="#sec5">Residuos</a></li>
			<li><a href="#sec6">Adem�s...</a></li>
		</ol>
	</div>
</div>
<a name="sec1"></a>
<h2>Cifras y letras</h2>
<p>El grueso de texto de <strong>Tales of the Abyss</strong> se divide en tres partes fundamentales: las skits, el diario y el script del juego.</p>
<p>En el juego aparecen aproximadamente 540 skits o conversaciones opcionales, y cada una de ellas tiene entre diez y quince bloques de texto, que a su vez suelen ser una o dos frases. Aparecen a lo largo del juego en determinados puntos, y no es obligatorio verlas. S�lo esto ya tiene m�s texto que el script principal del Final Fantasy VII.</p>
<p>El diario es un registro de todo lo que ocurre en el juego, y es muy �til para seguir el hilo del juego cuando se ha pasado unos d�as sin jugar. Tiene numeros�simas habitaciones, y lo que es m�s, cada una de ellas es larga de cojones, para ser lo que es.</p>
<p>El script del juego son todos los di�logos, todas las escenas y todo lo que te dicen los personajes no jugables a lo largo del juego. Es <span class="tales">gigantesco</span>, con m�s de 22.700 bloques de texto. De hecho, una de las habitaciones tuvo que dividirse en cincuenta de 200 bloques, porque no hab�a manera humana de editar aquello.</p>
<p>En total, nuestra traducci�n tiene poco m�s de 340.000 palabras, divididas entre el script, el diario, las skits, nombres de enemigos, de t�cnicas, de objetos (600 con sus descripciones), de lugares, mensajes en pantalla, men�s, etc. Para comparar, <em>El Quijote</em> tiene 41.000 palabras m�s, y <em>Los Hermanos Karam�zov</em> 40.000 menos.</p>
<div class="aligncenter"><img src="i/estadisticas1.png" alt="" /></div>
<p class="aligncenter piefoto">This is madness!</p>
<p>Comparando la cantidad de textos del juego en ingl�s con la cantidad de texto de otros RPGs m�ticos, la gr�fica vendr�a a ser:</p>
<div class="aligncenter"><img src="i/estadisticas2.png" alt="" /></div>
<p>No hemos sido capaces de encontrar en internet el script completo del Final Fantasy VII, VIII y otros RPGs que nos hubiera gustado meter en la comparaci�n. Si tienes el script extra�do de alg�n RPG, y quieres que lo incluyamos en la gr�fica, <a href="http://blog.tales-tra.com/contacto" title="">escr�benos</a> y lo haremos encantados, ya sea un juego moderno o un cl�sico.</p>

<a name="sec2"></a>
<h2>Calendario de Auldrant</h2>
<p><strong>Tales of the Abyss</strong> tiene su propio calendario: el calendario de Auldrant.</p>
<p>Hemos creado un conversor entre calendario gregoriano y calendario de Auldrant, en javascript. Puedes ver su funcionamiento echando un ojo al c�digo fuente de la p�gina.
<p>Gracias a <strong>Nanami</strong> por su aporte en el <a href="http://foro.tales-tra.com/viewtopic.php?f=33&t=1204">foro</a>. Referencias: <a href="http://aselia.wikia.com/wiki/Auldrant" target="_blank">Wiki de Aselia</a>, <a href="http://community.livejournal.com/loldrant/59707.html">Loldrant (I)</a>, <a href="http://community.livejournal.com/loldrant/59707.html">Loldrant (II)</a></p>

<script src="i/extras/auldrant.js"></script>
<style>
#calendar td, #calendar input, #calendar option, #calendar select {
	font: 13px "Courier New";
}

#error {
	color: red;
}

#set_earth, #set_auldrant {
	display: none;
}
#calendar td.field {
	font-weight: bold;
	padding-right: 10px;
	color: #7f7f7f;
}
</style>
<div class="box1" style="width:400px; margin: 50px auto;">
<h4>Calendario de Auldrant</h4>
<table id="calendar">
<tr><td class="field">Entrada:</td><td>
	<select id="c_from">
		<option value="auldrant">Auldrant</option>
		<option value="earth" selected>Tierra</option>
	</select>
</td></tr>
<tr><td class="field">D�a:</td><td><input type="text" name="days" id="c_day" value="1" size="8" /></td></tr>
<tr><td class="field">Mes:</td><td>
<input type="text" name="months" id="c_month" value="1" size="8" />
<select id="set_auldrant" onchange="$('c_month').value=this.value;">
	<option value="1">Rem Decan</option>
	<option value="2">Sylph Decan</option>
	<option value="3">Undine Decan</option>
	<option value="4">Gnome Decan</option>
	<option value="5">Ifrit Decan</option>
	<option value="6">Shadow Decan</option>
	<option value="7">Shadow Redecan</option>
	<option value="8">Ifrit Redecan</option>
	<option value="9">Gnome Redecan</option>
	<option value="10">Undine Redecan</option>
	<option value="11">Sylph Redecan</option>
	<option value="12">Luna Redecan</option>
	<option value="13">Lorelei Redecan</option>
</select>
<select id="set_earth" onchange="$('c_month').value=this.value;">
	<option value="1">Enero</option>
	<option value="2">Febrero</option>
	<option value="3">Marzo</option>
	<option value="4">Abril</option>
	<option value="5">Mayo</option>
	<option value="6">Junio</option>
	<option value="7">Julio</option>
	<option value="8">Agosto</option>
	<option value="9">Septiembre</option>
	<option value="10">Octubre</option>
	<option value="11">Noviembre</option>
	<option value="12">Diciembre</option>
</select>
</td></tr>
<tr><td class="field">Auldrant:</td><td id="result1"></td></tr>
<tr><td class="field">Tierra:</td><td id="result2"></td></tr>
<tr><td class="field">&nbsp;</td><td id="error"></td></tr>
</table>
</div>

<script>
setInterval(updateDate, 200);
</script>

<a name="sec3"></a>
<h2>Animaciones de zona</h2>
<p>Al entrar en una zona nueva del juego, en Tales of the Abyss aparece una peque�a animaci�n sobreimpresionada con el nombre del lugar. Esas animaciones aparecen poco pero son muy llamativas, y a pesar de que han sido una de las ediciones gr�ficas m�s tocapelotas, al final conseguimos traducirlas.</p>
<p>Para poder verlas y hacer modificaciones sin tener que hacer pruebas con el propio juego (es decir, parchear de nuevo el juego, probarlo en el emulador, etc.), creamos un simulador en Flash. Inicialmente era de lectura y escritura, y se pod�an modificar las animaciones en el propio editor, pero ahora mismo tambi�n se pueden modificar, aunque los cambios no se guardan.</p>
<p>Para aprovechar esto, hicimos un script que generaba las im�genes y los recortes, y los timeaba bas�ndose en las animaciones originales. Fue mucho curro, pero vali� la pena.</p>
<p>Si quieres toquetear el simulador, est� aqu�: <span class="tales"><a href="http://toa.tales-tra.com/tvt/simulator.php" title="Simulador de animaciones de zona en Tales of the Abyss">simulador de animaciones de zona</a>.</p>

<a name="sec4"></a>
<h2>Lenguaje f�nico</h2>
<p>Al igual que <strong><a href="http://toe.tales-tra.com/" title="Tales of Eternia en espa�ol">Tales of Eternia</a></strong>, Tales of the Abyss tiene su propio <em>idioma</em>. El idioma est� compuesto por glifos f�nicos, y cada uno se corresponde con un caracter occidental (por lo que realmente no es un idioma como tal, sino un juego de caracteres que se utiliza sobre palabras en ingl�s).</p>
<p>Los textos f�nicos que aparecen en el juego, en el logo y en fondo de esta p�gina est�n escritos usando estos glifos. Como decimos antes, la mayor�a est�n escritos en ingl�s aunque en algunos casos se utiliza la transcripci�n fon�tica que hacen los japoneses de algunas palabras inglesas, una especie de "engrish". Como consecuencia, se pueden ver algunas palabras extra�as escritas en el lenguaje f�nico.</p>

<p class="aligncenter"><img src="i/extras/fonic_table.png" /></p>
<p class="aligncenter piefoto"><a href="i/extras/fonic_table_psd.7z">Versi�n vectorizada en PSD. Para Photoshop CS3 o superior.</a></p>

<a name="sec5"></a>
<h2>Residuos</h2>
<p>En Tales of the Abyss quedan numerosos residuos de otras versiones, traducciones y juegos anteriores. En la versi�n japonesa dejaron el <a href="http://es.youtube.com/watch?v=C_m3ZwDDCvU">animatic del opening</a> entre los archivos del juego, aunque hace falta abrirlo para verlo ya que no se puede acceder a �l desde el propio juego.</p>
<p>Adem�s de eso, en el juego hay cosas que est�n en los archivos, pero no se llegan a usar. Habilidades, objetos, im�genes... Hay incluso residuos del <strong>Tales of Symponia</strong>, ya que emplearon el port de PS2 del Tales of Symphonia como base para programar el Abyss. Hay alguna skit del TOS, y alguna imagen suelta por ah�.</p>
<p class="aligncenter"><img src="i/extras1.png" /></p>
<p class="aligncenter piefoto">WAT</p>


<a name="sec6"></a>
<h2>Adem�s...</h2>

<ul>
	<li>Al margen del juego y su manual (y la gu�a de sidequests de esta misma p�gina), hemos traducido el art�culo sobre <a href="http://en.wikipedia.org/wiki/Tales_of_the_Abyss" title="Tales of the Abyss at Wikipedia">Tales of the Abyss de la Wikipedia inglesa para ponerlo en <a href="http://es.wikipedia.org/wiki/Tales_of_the_Abyss" title="Tales of the Abyss en Wikipedia">la espa�ola</a>. No pod�a ser que hubiera semejante basura de art�culo para un juego tan mol�n.</li>
	<li>En la traducci�n han participado cinco chicos, cuatro chicas y un mono tit�.</li>
	<li>Hemos tardado alrededor de un a�o y medio en terminar la traducci�n, lo que viene a ser <span class="tales">un trill�n de horas</span>, �o menos!</li>
	<li>La aplicaci�n online que utilizamos para traducir entre varios y desde cualquier ordenador se llama ACME. La hemos hecho nosotros, y es posible que pronto la liberemos.</p>
	<li>Tuvimos que separar la habitaci�n �sa en 50 de 200 bloques, entre otras cosas porque no hab�a navegador en este mundo capaz de manejar semejante montonazo de bloques. <span class="tales">ACME</span> mor�a.</li>
	<li>La traducci�n del script principal la hac�amos a ciegas. No ten�amos el nombre de quien hablaba en los di�logos, por lo que tuvimos que tirar de la memoria y del testeo. Lo mejor de todo es que aunque parece una putada, en la mayor�a de traducciones oficiales est�n en las mismas (y por eso se tienen que realizar exhaustiv�simos testeos).</li>
	<li>La tipograf�a de los textos en Tales of the Abyss es BakerSignet. Fuimos absolutamente incapaces de encontrar la utilizada en el men� principal, y pusimos AK13. Para el logo de la traducci�n, nos tuvimos que inventar varias letras para las palabras "en espa�ol", ya que la fuente utilizada por Namco es suya propia.</li>
	<li>El fondo de esta p�gina, y todos los glifos f�nicos, est�n vectorizados a mano. De hecho, gracias a eso pudimos hacer el manual de instrucciones, ya que ese dibujo se utiliza intensivamente en �l.</li>
	<li>El manual est� hecho con Indesign. La web con Photoshop y editores de texto normales. Somos hardcore, y el Dreamweaver es para ni�as. Por otra parte, no pasa la validaci�n W3C ni de puta co�a, pero no nos ha dado tiempo a m�s.
	<li>Durante el testeo, varios miembros del grupo hemos perdido el bazo, el cuero cabelludo y los test�culos, ya que eran apostados cuando aparec�an dudas sobre si iban a funcionar ciertas cosas del hacking, o si iba a crashear alguna zona. Por suerte, los actuales propietarios todav�a no han reclamado sus posesiones :E</li>
	<li>Tenemos un post de <span class="tales">OFFTOPIC</span> criminal en la zona privada con m�s de cien p�ginas. Se llama "Hilo para balbucear cuando se va todo tajado", y efectivamente, hay desvar�os et�licos de m�s de uno (en realidad, s�lo de uno).</li>
	<li>Tenemos <a href="http://es.youtube.com/group/talestra">un grupo en Youtube</a> donde te�ricamente colgamos v�deos capturados, y tal.</li>
	<li>Abrimos otro <a href="http://www.lastfm.es/group/Tales+FM">en Last.fm</a>, aunque desde entonces no nos miramos con los mismos ojos. Hay cosas que nunca deber�an salir a la luz.</li>
	<li>Realmente no conocemos ning�n mono tit�, pero hubiera estado bien.</li>
	<li>Durante los primeros meses de la traducci�n, y al margen de �sta, creamos un juego en Flash utilizando los sprites de Tales of Eternia. Realmente no era m�s que una prueba de concepto, pero permit�a a varias personas chatear en el Dojo R�gulus o en el espacio exterior, a los pies de Rem. Hell yeah.
	<li>En octubre de 2008 sale el <a href="http://foro.tales-tra.com/viewtopic.php?f=33&t=1185">anime de Tales of the Abyss</a>. GNAC prevalecer�.</li>
	<li>Si quieres organizar un proyecto de traducci�n de este estilo, te recomendamos utilizar SVN, wiki, foro oculto para coordinarse, y un blog o p�gina para darte a conocer. En <a href="http://romhackhispano.org">Romhack Hispano</a> te prestamos el espacio, y tenemos el <a href="http://foro.romhackhispano.org">foro montado</a> para que no te tengas que preocupar por nada.</li>
	<li>No estamos interesados en los insignificantes humanos.</li>
</ul>