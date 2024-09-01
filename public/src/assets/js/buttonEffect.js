function entrar() {
    const btnSaveLead = document.getElementById('buttonCadastrar');

    btnSaveLead.innerHTML = `
        <div id="buttonCadastrar" class="buttonCadastrar buttonCadastrar-disabled">
            <button disabled>Entrando ...</button>
        </div>
    `;
}

function confSec() {
    const btnSaveLead = document.getElementById('buttonCadastrar');

    btnSaveLead.innerHTML = `
        <div id="buttonCadastrar" class="buttonCadastrar buttonCadastrar-disabled">
            <button disabled>Confirmando ...</button>
        </div>
    `;
    console.log("funcionando");
}
function avancando() {
    const btnSaveLead = document.getElementById('btnQuestion');

    btnSaveLead.innerHTML = `
        <div id="btnQuestion" class="btnQuestion">
            <input type="text" value="Salvando ..." disabled class="btnSDisabled"/>
        </div>
    `;
}
function btnVoltar() {
    const btnSaveLead = document.getElementById('btnVoltar');

    btnSaveLead.innerHTML = `
        <a href="/startTest" id="btnVoltar" onclick="btnVoltar()" class="btnSDisabled">Voltando ...</a>
    `;
}

// Mostra a página somente após todos os elementos carregados na tela
window.onload = function() {
    const myDiv = document.getElementById('fade-in');
    myDiv.classList.add('visible'); // Adiciona a classe 'visible' após o carregamento
}

function verifyPassword() {
    var senha = document.getElementById("crieSenha").value;
    var confirmSenha = document.getElementById("confirmSenha").value;

    if (senha !== confirmSenha) {
        alert("As senhas não coincidem. Por favor, verifique e tente novamente.");
        return false; // Impede o envio do formulário
    }

    return true; // Permite o envio do formulário
}
