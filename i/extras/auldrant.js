function $(id) { return document.getElementById(id); }

var calendars = {
	'earth' : {
		'days'    : ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'],
		'months'  : ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'],
		'monthsl' : [31,      29,        31,      30,      31,     30,      31,      31,       30,           31,        30,          31         ]
	},
	'auldrant' : {
		'days'    : ['remday', 'lunaday', 'ifritday', 'undineday', 'sylphday', 'loreleiday', 'gnomeday'],
		'months'  : ['rem decan', 'sylph decan', 'undine decan', 'gnome decan', 'ifrit decan', 'shadow decan', 'shadow redecan', 'ifrit redecan', 'gnome redecan', 'undine redecan', 'sylph redecan', 'luna redecan', 'lorelei redecan'],
		'monthsl' : [58,          58,            58,             58,            58,            58,             58,               58,              58,              58,               58,              58,             60               ]
	},
	'getString' : function(calendar, day, month) {
		return calendar.months[month] + ' ' + (day + 1);
	},
	'getDayInYear' : function (calendar, day, month) {
		var ml = calendar.monthsl;
		var count = 0;

		if ((day < 0) || (day >= ml[month])) throw('Día inválido');
		if ((month < 0) || (month >= ml.length)) throw('Mes inválido');

		for (var n = 0; n < month; n++) count += ml[n];	
		return count + day;
	},
	'getDayMonth' : function (calendar, yday) {
		var ml = calendar.monthsl;
		var count = 0;
		for (var n = 0; n < ml.length; n++) {
			if (yday < count + ml[n]) return [yday - count, n];
			count += ml[n];
		}
		throw('Día inválido');
	},
	'getDaysAYear' : function(calendar) {
		var ml = calendar.monthsl;
		var count = 0;
		for (var n = 0; n < ml.length; n++) count += ml[n];
		return count;
	},
	'convert' : function(_from, _to, _day, _month) {
		var c_from = calendars[_from];
		var c_to   = calendars[_to];
		var c_from_count = calendars.getDaysAYear(c_from) - 1;
		var c_to_count   = calendars.getDaysAYear(c_to) - 1;
		
		var day   = _day;
		var month = _month;
		try {
			var yday  = calendars.getDayInYear(c_from, day, month);
			var yday2 = Math.floor((yday * c_to_count) / c_from_count);
			var dm = calendars.getDayMonth(c_to, yday2);
			return calendars.getString(c_to, dm[0], dm[1]);
		} catch (e) {
			//return 'error: ' + e;
			throw(e);
		}
	}
};

var last_day_month = '';
function updateDate() {
	var day   = parseInt($('c_day').value) - 1;
	var month = parseInt($('c_month').value) - 1;
	var cfrom = $('c_from').value;
	var day_month = '' + day + '_' + month+ '_' + cfrom;
	
	setMonthType($('c_from').value);
	setMonth(month);
	
	if (last_day_month == day_month) return; last_day_month = day_month;
	
	try {
		$('result1').innerHTML = calendars.convert(cfrom, 'auldrant', day, month);
		$('result2').innerHTML = calendars.convert(cfrom, 'earth', day, month);
		$('error').innerHTML = '';
		
	} catch (e) {
		$('error').innerHTML = 'error: ' + e;
	}
}

var lastType = '';
function setMonthType(type) {
	if (type == lastType) return; lastType = type;
	var types = { 'auldrant' : 'none', 'earth' : 'none' };
	types[type] = 'inline';
	for (var k in types) $('set_' + k).style.display = types[k];
}

var lastMonth = -1;
function setMonth(month) {
	if (month == lastMonth) return; lastMonth = month;
	try { $('set_earth').selectedIndex = month; } catch (e) { }
	try { $('set_auldrant').selectedIndex = month; } catch (e) { }	
}
