
/* */
var contador;
function calificar(item) {
    contador = item.id[0];
    let nombre = item.id.substring(1);
    for (let i = 0; i < 5; i++) {
        if (i < contador) {
            document.getElementById((i + 1) + nombre).style.color = "orange";
        }
        else {
            document.getElementById((i + 1) + nombre).style.color = "black";
        }
    }

}
let totalCalificaciones = 0;
let totalSumatoriaCalificaciones = 0;
localStorage.setItem('totalSumatoriaCalificaciones', totalSumatoriaCalificaciones);
localStorage.setItem('totalCalificaciones', totalCalificaciones);
function mensaje() {
    totalCalificaciones++;
    localStorage.setItem('totalCalificaciones', totalCalificaciones);
    const calificaciones = localStorage.getItem('totalCalificaciones');
    const sumatoriaCalificaciones = localStorage.getItem('totalSumatoriaCalificaciones');
    var aux = parseInt(sumatoriaCalificaciones) + parseInt(contador);
    let promedio = aux / parseInt(calificaciones);
    localStorage.setItem('totalSumatoriaCalificaciones', aux);

    const calificacion_repuesta = document.getElementById("calificacion-usuario");
    const promedio_calificacion = document.getElementById("promedio-calificacion");
    calificacion_repuesta.innerText = "Gracias por calificar usted nos dio " + contador + " estrellas";
    document.getElementById("alert-success").style.display = "block";
    promedio_calificacion.innerText = "Promedio de calificacion: " + promedio;
}



const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': 'b6ae8eed03mshc5c8ca7bd2d1ccbp1315bcjsn6f4f32428361',
		'X-RapidAPI-Host': 'bb-finance.p.rapidapi.com'
	}
};