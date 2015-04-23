<div style="width:250px;float:right;margin-left:35px;">
  <div class="box1">
    <h2>Tabla de contenidos</h2>
    <ol>
      <li><a href="#sec1">Sobre el parche</a></li>
      <li><a href="#sec2">Requisitos</a></li>
      <li><a href="#sec3">¿Dónde comprar el juego?</a></li>
      <li><a href="#sec4">Crear una ISO</a></li>
      <li><a href="#sec5">Aplicación del parche</a></li>
      <li><a href="#sec6">Hacer funcionar el juego</a></li>
      <li><a href="#sec7">Versión "undub"</a></li>
      <li><a href="#sec8">Localismos y expresiones</a></li>
      <li><a href="#sec9">Preguntas y respuestas</a></li>
    </ol>
  </div>
</div>
<a name="sec1"></a>
<div id="warning">
	<p><strong>Aviso importante</strong>: el parcheador crea una carpeta "temp" junto al ejecutable al arrancar. En ella se guardan archivos temporales, y permite retomar el parcheado en caso de cancelarlo desde el punto en el que se había quedado, sin tener que volver a generar todos los archivos.</p>
	<p>Sin embargo, puede ocasionar problemas. Si has parcheado una ISO (por ejemplo, la versión normal del juego) y quieres parchear otra (por ejemplo, la <em>undub</em>), no olvides eliminar esa carpeta "temp". Si no lo haces, es posible que se queden partes del juego sin traducir.</p>
	<p>Además, en caso de que el programa diera un error por cualquier motivo, no vuelvas a intentar parchear sin más, porque pueden surgir problemas y se queden cosas sin traducir. Mejor, ciérralo y vuélvelo a abrir. Un juego correctamente parcheado debería tener todos los textos traducidos (con un par de excepciones muy concretas), tenlo en cuenta.</p>
</div>
<h2>Sobre el parche</h2>
<p>El parcheador es un pequeño programa que procesa la imagen de disco del juego original y crea una ISO modificada, generando y sustituyendo los archivos necesarios para que pase de estar en inglés a estar en español.</p>
<p>El proceso tarda entre 20 y 50 minutos dependiendo del ordenador en el que se ejecute, dada la ingente cantidad de información que ha de procesar. En ordenadores antiguos o con el disco duro en no muy buenas condiciones, el proceso puede alargarse hasta varias horas. Como referencia, en un AMD 2X 5600 con 2GB de RAM y dos discos duros SATAII (y la ISO original en uno y la parcheada en otro), tarda 20 minutos.</p>
<p>La interfaz del programa es extremadamente sencilla para que no haya ninguna posibilidad de error a la hora de parchear el juego.</p>
<p class="aligncenter"><img src="i/parcheador.png" title="Captura" /></p>
<p>Una vez iniciado el programa, simplemente hay que escoger la ISO que se quiere parchear en primer lugar, y el nombre y lugar en el que se guardará la ISO ya parcheada. No hay ningún problema si la original está en un disco duro y la parcheada se guarda en otro.</p>
<p>En este momento sólo existe versión para Windows, así que para parchear el juego en Mac o Linux tendrás que utilizar alguna de las herramientas de las que disponen para virtualizar Windows (recomendamos Parallels en el primer caso, y VMware en el segundo). Quizá en un futuro portemos el parcheador a estos sistemas operativos.</p>
<a name="sec2"></a>
<h2>Requisitos</h2>
<p>Para poder jugar al Tales of the Abyss en español, necesitarás:</p>
<ul>
  <li>El parche, que debes descargar desde <a href="?s=main">la portada</a>.</li>
  <li>Una ISO de la versión americana de <strong>Tales of the Abyss</strong> (no funcionará la versión japonesa).</li>
  <li>Un PC con sistema operativo Windows.</li>
  <li>Aproximadamente 9,5GB libres de disco duro.</li>
  <li>Una PS2 modificada para cargar copias de seguridad.</li>
</ul>
<p>Como decimos, es posible que más adelante saquemos versión para Linux o Mac del parcheador.</p>
<a name="sec3"></a>
<h2>¿Dónde comprar el juego?</h2>
<p>Es complicado encontrar Tales of the Abyss en tiendas españolas, ya que nunca pisó suelo europeo oficialmente. No obstante, es relativamente fácil encontrarlo en tiendas de importación, así que si tienes alguna cerca, puedes echar un ojo.</p>
<p>Donde sí es fácil encontrarlo es en cualquier tienda online que envíe juegos americanos a países europeos. Habitualmente recomendamos <a href="http://www.play-asia.com/paOS-13-71-43-49-en-15-tales+of+the+abyss-70-1iux.html" title="">Play Asia</a>, porque suele tener el juego a muy buen precio (poco más de 20 euros).
<a name="sec4"></a>
<h2>Crear una ISO</h2>
<p>Puedes crear una imagen de disco a partir de tu DVD original del juego con cualquier programa de creación y grabación de imágenes. Nosotros recomendamos <a href="http://www.imgburn.com" title="Imgburn">ImgBurn</a>, un programa gratuito, fácil de usar y que funciona muy bien. La ISO generada debería pesar 4.048.191.488 bytes y estar en formato .iso.</p>
<p>Si haciendo la ISO correctamente, se diera el caso de que el archivo pesa distinto a la cifra que damos, en principio no habría por qué preocuparse. No obstante, no sabemos qué puede implicar eso (cambios internos en el juego por ser distintas ediciones, quién sabe), así que si tu ISO no pesa lo indicado, prueba a volver a crearla. Si por segunda vez pesa distinto, parchéala, porque lo más seguro es que no pase nada.</p>
<a name="sec5"></a>
<h2>Aplicación del parche</h2>
<p>Hemos creado el parche de forma que aplicar la traducción al juego sea fácil como contar hasta tres. No obstante, los pasos concretos a seguir son:</p>
<ol>
  <li>Haz una ISO del juego.</li>
  <li><a href="?s=main">Descarga</a> y extrae el parcheador en la carpeta que quieras.</li>
  <li><a href="http://tracker.tales-tra.com/">Descarga</a> el paquete de vídeos que corresponda a tu versión del juego (o bien la normal, o bien la <em>undub</em>), y colócalo en la misma carpeta en la que extrajiste el parcheador.</li>
  <li>Abre el parcheador, y selecciona la ISO que hiciste del Tales of the Abyss</li>
  <li>Selecciona dónde quieres que se guarde la nueva ISO traducida, y con qué nombre.</li>
  <li>Pulsa el botón &laquo;Parchear&raquo;</li>
</ol>
<p>Una vez hecho eso, sólo tendrás que esperar a que el proceso termine. Cuando haya terminado, aparecerá un mensaje indicando que el proceso de parcheo ha terminado satisfactoriamente, y cuánto rato le ha costado.</p>
<a name="sec6"></a>
<h2>Hacer funcionar el juego</h2>
<p>Una vez tengas la ISO con el juego traducido, deberás grabarla en un DVD con el programa de creación y grabación de isos que prefieras, como el <a href="http://www.imgburn.com/">ImgBurn</a> mencionado anteriormente. Para poder cargar el DVD una vez lo hayas grabado deberás tener una PS2  modificada de manera que puedas cargar copias de seguridad, ya sea con chip, disco duro, cog-swap, etc. Con cualquiera de estos métodos correctamente utilizados podrás jugar al Tales of the Abyss en español.</p>
<p>En el caso concreto de que prefieras jugar desde un disco duro mediante <strong>HDLoader</strong>, deberás utilizar el HDLoader 0.8b, un HDLoader parcheado. Si utilizas el HDLoader normal, el juego se te bloqueará en el Bosque de los Cheagles (aunque no es cosa de la traducción, ya que pasa lo mismo si se juega con el juego sin parchear). El HDLoader 0.8b es relativamente fácil de encontrar por internet.</p>
<p>Si sólo utilizas disco duro, y por lo tanto no puedes lanzar el HDLoader modificado a través del lector de la consola, lo mejor que puedes hacer es meter la ISO del HDLoader 0.8b en el disco duro como si fuera un juego más (ha de ser un HDLoader 0.8b preparado específicamente para ser lanzado así), y ejecutarlo desde el HDLoader normal. Una vez ahí, mientras aparece la pantalla de carga, mantén pulsada la tecla direccional <span class="tales">arriba</span>, para activar el modo <span class="tales">MDMA0</span>. No necesitarás poner ningún otro modo especial para que el juego corra sin problema.</p>
<a name="sec7"></a>
<h2>Versión "undub"</h2>
<p>La versión <em>undub</em> es una modificación del juego que se puede obtener por internet, en la que las voces inglesas fueron sustituidas por las originales de la versión japonesa. Además las skits están dobladas, cosa que en la versión americana no ocurre. Aparentemente nuestro parche funciona sin problemas sobre esta versión modificada, pero no podemos asegurar que no vayan a surgir problemas en algún momento a lo largo de la aventura.</p>
<p>Puesto que la <em>undub</em> es una versión modificada de manera no oficial, existen varias versiones ligeramente distintas por lo que no podemos pretender que la traducción sea compatible con todas. Por lo tanto, si por cualquier motivo el juego no funcionase sobre alguna de estas versiones <em>undub</em>, no haremos absolutamente nada para remediarlo.</p>
<p>Así pues, recomendamos utilizar la versión oficial con voces inglesas, porque ésa la hemos probado a fondo, y no falla.</p>
<a name="sec8"></a>
<h2>Localismos y expresiones</h2>
<p>Para la traducción hemos empleado español de España, con alguna expresión propia de aquí que quizá suene extraña a oídos de latinoamericanos o gente de otras regiones hispanohablantes. No obstante, hemos intentado que sean las menos.</p>
<p>Por otro lado, hemos intentado respetar en la medida de lo posible la traducción de los pocos Tales que han llegado traducidos oficialmente a nuestro país, pero como todo, puede haber fallos en ese aspecto, así que esperamos que lo entendáis.</p>
<a name="sec9"></a>
<h2>Preguntas y respuestas</h2>
<p><strong>El parcheador me da un error al comprobar el md5</strong></p>
<p>El parcheador comprueba que los archivos ejecutables del juego que va a tocar sean iguales a aquellos con los que hemos trabajado, para evitar problemas. Sabemos que hay gente a la que les está fallando, y por ahora todos se habían descargado el juego por internet, por lo que no vamos a hacer nada por resolver el asunto. Si a alguien con la ISO extraida de su juego original (y capaz de demostrarlo) le ocurre, puede dirigirse a nosotros a través del <a href="http://foro.tales-tra.com" title="Foro de Tales Translations">foro</a> para que tratemos de solucionarlo.</p>
<p>Es posible que se lanzase a la venta una revisión del juego corrigiendo algo, pero ojalá no sea el caso porque es un follón apañarlo todo, ya que los textos del ejecutable y los relocs calculados a las bravas no servirían si el juego está recompilado de nuevo y no es un fix de alguna instrucción.</p>
<p><strong>¡La ISO generada ocupa exactamente lo mismo!</strong></p>
<p>Efectivamente, es lo normal. El juego regenera archivos internos de la ISO, pero deja todo lo demás igual. Ocupa exactamente lo mismo, pero su contenido es diferente.</p>
<p><strong>Se me cuelga el juego al arrancar, o al rato</strong>
<p>A algunas personas les pasa. Generalmente es por no utilizar correctamente el método de carga, o por no haber grabado el juego adecuadamente. No olvides grabar a la menor velocidad disponible, y evita meter mucho esfuerzo al ordenador mientras tanto.</p>
<p><strong>Las skits del juego me salen sin voces, pero he visto vídeos donde sí las tienen</strong></p>
<p>El juego original americano no tiene voces en las skits. Si has oído voces, posiblemente sean de la versión <em>undub</em>, en su versión 2.0 o mayor.</p>
<p><strong>No puedo abrir el parcheador. Me pone que no hay programa para abrir la extensión 7z</strong></p>
<p>Las últimas versiones de WinRAR lo abren. Algunos compresores gratuitos también lo hacen: <a href="http://7-zip.org" title="7Z">www.7-zip.org</a></p>
<p><strong>Estoy usando disco duro para jugar al Tales of the Abyss y me va bien, pero al llegar al Bosque de los Cheagles y luchar contra un ligre, el juego se me cuelga</strong></p>
<p>Eso pasa con el original también. Hay que usar un HDLoader parcheado, el 0.8b o superior, activando el modo <span class="tales">MDMA0</span> (pulsando <span class="tales">arriba</span> en la pantalla de carga, como explicamos más arriba).</p>
<p><strong>He parado el parcheador a mitad, lo he vuelto a volver a parchear y le ha costado mucho menos. ¿Es normal?</strong></p>
<p>Lo primero que hace el parcheador es duplicar la ISO; esto lleva un tiempo. Si la ISO de destino ya existe y tiene el mismo tamaño, no se duplicará, se usará tal cual presuponiendo que es la que toca.</p>
<p>Por otra parte, el parcheador crea una carpeta "temp" donde coloca los datos intermedios y no se borran al terminar de parchear. Es posible que el parcheador no funcione correctamente si hay datos en la carpeta "temp" de un parcheo anterior.</p>
<p>Hay que tener <span class="tales">especial</span> cuidado de borrar la carpeta "termp" si se van a parchear la ISO normal y luego la <em>undub</em>. Además, si el parcheador falla, lo mejor es cerrarlo y volverlo a abrir para volver a dar a parchear.</p>
<p>Tammbién es conveniente cerrar el parcheador antes de empezar a utilizar la ISO traducida.</p>
<p><strong>¡Me salen cosas (textos del script y/o skits) en inglés!</strong></p>
<p>Esto está muy relacionado con la pregunta anterior. Algunas personas que han parcheado ambas versiones (la normal y la <em>undub</em>) una detrás de la otra han tenido problemas con la segunda ISO. Como ya hemos comentado, para no tener estos problemas hay que hacer lo siguiente:</p>
<ul><li>Cerrar el parcheador</li>
<li>Borrar la carpeta "temp" con <span class="tales">todos</span> los ficheros
<li>Iniciar el parcheador normalmente</li></ul>
<p>&nbsp;</p>
<p>------ <br/>Estas instrucciones están actualizadas en la medida de lo posible, pero si quieres ver la FAQ más actualizada, <a href="http://foro.tales-tra.com/viewtopic.php?f=15&t=1169" title="FAQ">acude a nuestro foro</a>.</p>