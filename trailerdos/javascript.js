//Funcion para alternar entre estilos
function hop(id, a, b)
{
   var o = document.getElementById(id);
   o.className = (o.className != a) ? a : b;
}