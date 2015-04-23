<div>
	<input type="checkbox" id="show_dungeon" onchange="showType('dungeon',this.checked);" checked /><label for="show_dungeon">Mostrar mazmorras</label>
	<input type="checkbox" id="show_city" onchange="showType('city',this.checked);" /><label for="show_city">Mostrar ciudades</label>
	<input type="checkbox" id="show_extract" onchange="showType('extract',this.checked);" /><label for="show_extract">Mostrar puntos de búsqueda</label>
	<input type="checkbox" id="show_other" onchange="showType('other',this.checked);" /><label for="show_other">Mostrar otros</label>
</div>
<div>
	Buscar: <input type="text" name="search" id="search" />
	<input type="checkbox" id="show_label" onchange="showLabelsChange(this.checked);" /><label for="show_label">Mostrar etiquetas</label>
	<input type="checkbox" id="show_overlay1" onchange="showOverlay('1', this.checked);" /><label for="show_overlay1">Capa política</label>
	<input type="checkbox" id="show_coords" onchange="showCoords(this.checked);" /><label for="show_coords">Coordenadas</label>
</div>

<div id="map" style="width:720px;height:540px;background:url('i/map/map5.jpg');position:relative;">
	<div id="overlay1" style="width:720px;height:540px;background:url('i/map/overlay1.png');position:absolute;top:0;left:0;"></div>
	<div id="coords">0,0</div>
</div>

<style>
.hide {
	display:none;
}
.far .label {
	display: none;
}
.near .label {
	display: block;
	border:1px solid #7f7f7f;background:white;padding:0 2px;
}

.label2 {
	display: none;
}

.english .label2 {
	display: block;
	color: #7f7f7f;
	text-style: italic;
	font-size: 0.9em;
}

#coords {
	position: absolute;
	left: 0;
	top: 0;
	font: 14px Arial;
	color: black;
	background: white;
	padding:2px 5px;
	border:1px solid black;
	display:none;
}
</style>

<script>
/*
Programado por Tales Translations - soywiz 2008
Localizaciones: Tales of the Abyss World Map by Cyliya y el propio juego.
*/

function $(id) { return document.getElementById(id); }

function showOverlay(id, v) {
	$('overlay' + id).style.visibility = v ? 'visible' : 'hidden';
}

var backShowLabel;
var backSearch;
var filterText = '';

function showCoords(v) {
	$('coords').style.display = v ? 'block' : 'none';
}

setInterval(function() {
	var search = $('search');
	if (backSearch == search.value) return;
	backSearch = search.value;
	if (search.value.length) {
		if (!$('show_label').disabled) {
			$('show_label').disabled = true;
			backShowLabel = $('show_label').checked;
			$('show_label').checked = true;
		}
	} else {
		if ($('show_label').disabled) {
			$('show_label').checked = backShowLabel;
			$('show_label').disabled = false;
		}
	}
	filterText = search.value;
	showLabelsChange();
}, 150);

var map_o = $('map');
var coords_o = $('coords');
var points = {};
var showingLabels = false;
var shows = {};
shows['dungeon'] = true;
shows['city']    = true;
shows['extract'] = true;
shows['other']    = true;
var showPolitic = true;

for (var t in shows) {
	$('show_' + t).checked = shows[t];
}

showOverlay(1, $('show_overlay1').checked = showPolitic);

function showType(type, v) {
	shows[type] = v;
	updatePoints();
}

function getDist(x1, y1, x2, y2) {
	return Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
}

var pSelected = null, minDist = 9999;

function updatePoints() {
	var filterTextReg = new RegExp(filterText, 'gi');
	for (var k in points) { var p = points[k];
		var s = true;
		if (filterText.length) {
			s = false;
			if (p.name1.search(filterTextReg) != -1) s = true;
			if (p.name2.search(filterTextReg) != -1) s = true;
		}
		if (!shows[p.type] || !s) {
			p.className = 'hide';
		} else {
			if (p == pSelected) {
				p.className = 'near english';
				p.style.zIndex = 2;
			} else {
				p.className = showingLabels ? 'near' : 'far';
				p.style.zIndex = 1;
			}
		}
	}
}

var stopMove = false;
var stopMoveTimeout = null;
var backE;

map_o.onmousemove = function(e) {
	if (!e && window.event) e = window.event;
	
	if (stopMove) {
		backE = e;
		//stopMove = false;
		return;
	}
	
	var mx, my;
	
	if (e.pageX !== undefined) {
		mx = (e.pageX - map_o.offsetLeft);
		my = (e.pageY - map_o.offsetTop);
	} else {
		mx = e.x;
		my = e.y;
	}

	coords_o.innerHTML = mx + ', ' + my;

	minDist = 9999;
	pSelected = null;
	
	for (var k in points) { var p = points[k];
		var dist = getDist(p.x, p.y, mx, my);
		
		if (dist < 20) {
			if (dist < minDist) {
				pSelected = p;
				minDist = dist;
				//coords_o.innerHTML += '@' + dist;
			}
		}
	}
	updatePoints();
};


function showLabelsChange(v) {
	if (v === undefined) v = $('show_label').checked;
	showingLabels = v;
	updatePoints();
}

function setPoint(type, x, y, name1, name2) {
	var point_o = document.createElement('div');
	with (point_o.style) {
		left = x + 'px';
		top  = y + 'px';
		position = 'absolute';
		//background = 'white';
		font = "12px Arial";
	}
	point_o.className = 'far';
	switch (type) {
		default:
		case 'dungeon': point_o.innerHTML = '<img src="i/map/p1.png" style="margin:-4px -4px;" />'; break;
		case 'city':    point_o.innerHTML = '<img src="i/map/p2.png" style="margin:-4px -4px;" />'; break;
		case 'extract': point_o.innerHTML = '<img src="i/map/p3.png" style="margin:-4px -4px;" />'; break;
		case 'other':   point_o.innerHTML = '<img src="i/map/p4.png" style="margin:-4px -4px;" />'; break;
	}
	point_o.innerHTML += '<div class="label">' + name2 + '<div class="label2">' + name1 + '</div></div>';
	map_o.appendChild(point_o);
	point_o.x = x;
	point_o.y = y;
	point_o.type = type;
	point_o.name1 = name1;
	point_o.name2 = name2;
	points['_' + x + ',' + y] = point_o;
	point_o.onmouseover = function(e) {
		pSelected = point_o;
		updatePoints();
		stopMove = true;
		if (stopMoveTimeout) {
			clearTimeout(stopMoveTimeout);
			stopMoveTimeout = null;
		}
	};
	
	point_o.onmouseout = function(e) {
		if (stopMoveTimeout) {
			clearTimeout(stopMoveTimeout);
			stopMoveTimeout = null;
		}
		stopMoveTimeout = setTimeout(function() { stopMove = false; map_o.onmousemove(backE); }, 100);
	};
}

// Mazmorras
setPoint('dungeon', 171,  84, "Nebilim's Crag", "Peñasco de Nebilim");
setPoint('dungeon', 230, 117, "Mt. Roneal", "Monte Roneal");
setPoint('dungeon', 165, 187, "Aramis Spring", "Manantial de Aramís");
setPoint('dungeon', 183, 239, "Mt. Zaleho", "Monte Zaleho");
setPoint('dungeon', 145, 367, "Ortion Cavern", "Caverna de Ortion");
setPoint('dungeon', 365,  41, "Absorption Gate", "Portal de la Absorción");
setPoint('dungeon', 169, 324, "Meggiora Highlands", "Montañas de Meggiora");
setPoint('dungeon', 213, 341, "Meggiora Highlands", "Montañas de Meggiora");
setPoint('dungeon', 448, 349, "Zao Ruins", "Ruinas Zao");
setPoint('dungeon', 370, 489, "Radiation Gate", "Portal de la Radiación");
setPoint('dungeon', 515, 141, "Mushroom Road", "Camino de las Setas");
setPoint('dungeon', 495, 171, "Theor Forest", "Bosque de Theor");
setPoint('dungeon', 540, 167, "Cheagle Woods", "Bosque de los Cheagles");
setPoint('dungeon', 587, 259, "Shurrey Hill", "Colina de Shurrey");
setPoint('dungeon', 537, 296, "Fubras River", "Río Fubras");
setPoint('dungeon', 584, 404, "Choral Castle", "Castillo de Coral");
setPoint('dungeon', 467, 447, "Tower of Rem", "Torre de Rem");
setPoint('dungeon', 383, 228, "Tataroo Valley", "Valle de Tataroo");
setPoint('dungeon', 382, 236, "Eldrant", "Eldrant");
setPoint('dungeon', 363, 406, "Inista Marsh", "Pantano de Inista");
setPoint('dungeon', 564, 360, "Deo Pass", "Paso de Deo");

// Ciudades
setPoint('city', 263, 109, "Keterburg", "Keterburg");
setPoint('city', 287, 114, "Keterburg Bay", "Bahía de Keterburg");
setPoint('city', 418, 141, "Grand Chokmah", "Gran Chokmah");
setPoint('city', 152, 198, "Daath Bay", "Bahía de Daath");
setPoint('city', 226, 239, "Daath", "Daath");
setPoint('city', 277, 239, "Yulia City", "Ciudad de Yulia");
setPoint('city', 131, 268, "Nam Cobanda Isle", "Isla de Nam Cobandai");
setPoint('city', 247, 314, "Sheridan", "Sheridan");
setPoint('city', 241, 340, "Port Sheridan", "Puerto Sheridan");
setPoint('city', 233, 386, "Port Belkend", "Puerto Belkend");
setPoint('city', 217, 410, "Belkend", "Belkend");
setPoint('city', 333, 348, "Baticul", "Baticul");
setPoint('city', 395, 312, "Chesedonia", "Chesedonia");
setPoint('city', 413, 342, "Desert Oasis", "Oasis del desierto");
setPoint('city', 554, 211, "Engeve", "Engeve");
setPoint('city', 565, 252, "St. Binah", "San Binah");
setPoint('city', 521, 338, "Kaitzur", "Kaitzur");
setPoint('city', 517, 408, "Kaitzur Navel Port", "Puerto de Kaitzur");

// Semillas
setPoint('other', 281, 361, "Dorgria Seed", "Semilla de Dorgria");
setPoint('other', 490, 303, "Renakeal Seed", "Semilla de Renakeal");
setPoint('other', 173, 171, "Charak Seed", "Semilla de Charak");
setPoint('other', 352, 291, "Pen Pen Seed", "Semilla de Pen Pen");
setPoint('other', 248, 295, "Estema Seed", "Semilla de Estema");
setPoint('other', 537, 408, "Bom Bom Seed", "Semilla de Bom Bom");
setPoint('other', 156, 415, "Oriora Seed", "Semilla de Oriora");
setPoint('other', 502, 120, "Refined Flightstone", "Piedra de vuelo refinada");
setPoint('other', 205, 108, "Some Other Flightstone", "Otra piedra de vuelo");

// Sword Dancer
setPoint('other', 521, 199, "Sword Dancer", "Espadachín infernal");

// Otros Lugares
setPoint('other', 444, 246, "Rotelro Bridge", "Puente de Rotelro");
setPoint('other', 326, 205, "Qliphoth Entrance/Exit", "Entrada/Salida al Qliphoth");

// Puntos de búsqueda
setPoint('extract', 482, 288, "Punto de búsqueda", "1");
setPoint('extract', 556, 178, "Punto de búsqueda", "2");
setPoint('extract', 596, 223, "Punto de búsqueda", "3");
setPoint('extract', 548, 298, "Punto de búsqueda", "4");
setPoint('extract', 387, 408, "Punto de búsqueda", "5");
setPoint('extract', 434, 328, "Punto de búsqueda", "6");
setPoint('extract', 188, 356, "Punto de búsqueda", "7");
setPoint('extract', 203, 190, "Punto de búsqueda", "8");
setPoint('extract', 394, 340, "Punto de búsqueda", "9");
setPoint('extract', 543, 131, "Punto de búsqueda", "10");
setPoint('extract', 396, 262, "Punto de búsqueda", "11");
setPoint('extract', 242, 135, "Punto de búsqueda", "12");
setPoint('extract', 223, 427, "Punto de búsqueda", "13");
setPoint('extract', 132, 353, "Punto de búsqueda", "14");
setPoint('extract', 156, 116, "Punto de búsqueda", "15");
setPoint('extract', 442, 372, "Punto de búsqueda", "16");
setPoint('extract', 286, 181, "Punto de búsqueda", "17");
setPoint('extract', 377, 163, "Punto de búsqueda", "18");

</script>

<div>
<p>Al colocarte encima de los lugares aparece el nombre en español y debajo el nombre en inglés.</p>
<p>El filtro de búsqueda usa expresiones regulares. La búsqueda se hace tanto en inglés como en español y es insensible a mayúsculas. Puedes colocar cosas tipo:</p>
<ul>
	<li>seed - Lugares que contengan <strong>"seed"</strong></li>
	<li>^el - Lugares que empiecen por <strong>"el"</strong> (Eldrant)</li>
	<li>port$ - Lugares que acaben en <strong>"port"</strong></li>
	<li>^1$ - Lugar que sea exactamente <strong>"1"</strong> (evita "11")</li>
	<li>seed|sword - Lugares que contengan la palabra <strong>"seed"</strong> o la palabra <strong>"sword"</strong></li>
</ul>
</div>
