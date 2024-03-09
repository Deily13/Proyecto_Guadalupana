document.querySelector("form").addEventListener("submit", function (event) {
    var email = document.getElementById("email").value;
    var emailconf = document.getElementById("emailconf").value;
    if (email !== emailconf) {
        alert("Los correos electrónicos no coinciden.");
        event.preventDefault();
    }
});

document.querySelector('form').addEventListener('submit', function (event) {
    var idnum = document.getElementById('idnum');
    var phone = document.getElementById('phone');

    if (!/^\d*$/.test(idnum.value)) {
        alert('Por favor, ingresa solo números en el campo de "N. Identificación".');
        event.preventDefault();
    }

    if (!/^\d*$/.test(phone.value)) {
        alert('Por favor, ingresa solo números en el campo de "Número de Celular".');
        event.preventDefault();
    }
});

document.getElementById('phone').addEventListener('input', function (e) {
    e.target.value = e.target.value.replace(/[^\d]/g, '').substring(0, 10);
});

document.getElementById('idnum').addEventListener('input', function (e) {
    e.target.value = e.target.value.replace(/[^\d]/g, '').substring(0, 20);
});

document.querySelector('form').addEventListener('submit', function (event) {
    // Evita que el formulario se envíe
    event.preventDefault();

    // Define los campos que son obligatorios
    var requiredFields = ['fname', 'lname', 'slname', 'idtype', 'idnum', 'email', 'emailconf', 'phone', 'gender'];

    // Verifica cada campo para ver si está vacío
    for (var i = 0; i < requiredFields.length; i++) {
        var field = document.getElementById(requiredFields[i]);
        if (field.value === '') {
            alert('Por favor, llene el campo: ' + field.placeholder);
            return;
        }
    }

    // Si todos los campos están llenos, envía el formulario
    this.submit();
});

/* document.addEventListener('contextmenu', function (e) {
    e.preventDefault();
}); */