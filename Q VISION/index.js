var abrirPopup = document.getElementById('abrir_popup'),
    overlay = document.getElementById('pagina_completa'),
    popup = document.getElementById('popup'),
    cerrarPopup = document.getElementById('cerrar_popup');

abrirPopup.addEventListener('click', function () {
    overlay.classList.add('active');  
    popup.classList.add('active');  
});

cerrarPopup.addEventListener('click', function () {
    overlay.classList.remove('active');  
    popup.classList.remove('active');    
});

const terminos = document.getElementById('terminos'),
    politicas = document.getElementById('politicas'),
    boton = document.getElementById('btn_registro');

    function checkStatus() {
        if (terminos.checked && politicas.checked) {
            boton.disabled = false;
        } else {
            boton.disabled = true;
        }
    }

    terminos.addEventListener('change', checkStatus);
    politicas.addEventListener('change', checkStatus);