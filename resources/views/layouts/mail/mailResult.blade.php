<div style="max-width:100vw;font-family:Arial, Helvetica, sans-serif;padding:20px;line-height:1.5;letter-spacing:0.6px;background-color:#fff;color:#000;">

    <div style="width:100%;display:flex;flex-direction:column;align-items:center;">
        <img src="https://archetypefy.online/src/assets/img/logo.svg" width="100" />
    </div>

    <div style="width:100%;font-size:16px;text-align:justify;color:#000;">
            Olá, {{ session('fullName') }}, Parabéns por completar o seu teste, agora você esta pronto(a) para começar a caminhar na direção certa.
    </div>

    <div style="width:100%;margin:20px 0;font-size:14px;align-items:center;color:#000;">
            Seu principal arquétipo é: {{ session('resultadoFinal') }}
    </div>

    <div style="width:100%;font-size:12px;text-align:justify;color:#000;">
            Baixe o seu PDF em anexo.
    </div>

</div>
