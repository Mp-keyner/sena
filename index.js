const inputHorasExtras = document.getElementById('inputHorasExtras');
  const opcSi = document.getElementById('opcSi');
  const opcNo = document.getElementById('opcNo');

  // Agregar evento para controlar la habilitación y deshabilitación del input de texto
  opcSi.addEventListener('change', function() {
    if (opcSi.checked) {
      inputHorasExtras.removeAttribute('disabled');
    } else {
      inputHorasExtras.setAttribute('disabled', 'disabled');
    }
  });

  opcNo.addEventListener('change', function() {
    if (opcNo.checked) {
      inputHorasExtras.setAttribute('disabled', 'disabled');
    } else {
      inputHorasExtras.removeAttribute('disabled');
    }
  });

