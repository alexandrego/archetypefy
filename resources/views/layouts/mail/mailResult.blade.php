<div style="max-width:100vw;font-family:Arial, Helvetica, sans-serif;padding:20px;line-height:1.5;letter-spacing:0.6px;background-color:#000;color:#fff;">

    <div style="width:100%;display:flex;flex-direction:column;align-items:center;">
        <img src="https://archetypefy.com.br/wp-content/webp-express/webp-images/uploads/2024/06/LOGO_Prancheta-1-1024x1024.png.webp" width="150" />
    </div>

    <div style="width:100%;font-size:16px;text-align:justify;color:#fff;">
            Olá, {{ session('fullName') }}, Parabéns por completar o seu teste, agora você esta pronto(a) para começar a caminhar na direção certa.
    </div>

    <div style="width:100%;margin:20px 0;font-size:14px;align-items:center;color:#fff;">
            Seu principal arquétipo é: {{ session('resultadoFinal') }}
    </div>

    <div style="width:100%;font-size:12px;text-align:justify;color:#fff;">
            Baixe o seu PDF em anexo.
    </div>

</div>
