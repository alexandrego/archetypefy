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
