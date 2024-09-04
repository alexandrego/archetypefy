function buscando() {
    let busca = document.getElementById("buscar");

    busca.innerHTML = `<button type="button" class="btn btn-secondary" id="buscar">Buscar</button>`;
}

function mascaraCPF(cpf) {
    // Remove caracteres não numéricos
    cpf.value = cpf.value.replace(/\D/g, '');

    // Aplica a máscara
    cpf.value = cpf.value.replace(/(\d{3})(\d)/, '$1.$2');
    cpf.value = cpf.value.replace(/(\d{3})(\d)/, '$1.$2');
    cpf.value = cpf.value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
}
function mascaraCelular(campo) {
    // Remove todos os caracteres que não são dígitos
    campo.value = campo.value.replace(/\D/g, '');

    // Aplica a máscara
    if (campo.value.length >= 2) {
        campo.value = '(' + campo.value.substring(0, 2) + ') ' + campo.value.substring(2);
    }
    if (campo.value.length >= 9) {
        campo.value = campo.value.substring(0, 10) + '-' + campo.value.substring(10, 14); // Limita a 4 dígitos após o traço
    }
}

