function calificar(seccion, calificacion) {
    var calificacionDiv = document.getElementById("calificacion".concat(seccion));
    var estrellas = calificacionDiv === null || calificacionDiv === void 0 ? void 0 : calificacionDiv.querySelectorAll('.estrella');
    estrellas === null || estrellas === void 0 ? void 0 : estrellas.forEach(function (estrella, index) {
        if (index < calificacion) {
            estrella.style.color = 'gold'; // Cambiar el color de la estrella seleccionada
        }
        else {
            estrella.style.color = 'black'; // Restaurar el color de las estrellas no seleccionadas
        }
    });
    // Aquí puedes enviar la calificación al servidor o realizar otras acciones necesarias
}
