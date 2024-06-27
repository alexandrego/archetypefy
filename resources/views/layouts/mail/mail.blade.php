<div style="
        max-width: 100vw;
        font-family: Arial, Helvetica, sans-serif;
        padding: 20px;
        line-height: 1.5;
        letter-spacing: 0.6px;

        background-color: #000;
        color: #fff;

        display: flex;
        flex-direction: column;
        align-items: center;
    ">

    <div style="
            width: 100%;
        ">
        <img src="https://archetypefy.com.br/wp-content/webp-express/webp-images/uploads/2024/06/LOGO_Prancheta-1-1024x1024.png.webp" width="150" />
    </div>

    <div style="
            width: 100%;
            font-size:16px;
            text-align:justify;
        ">
        <p>
            Olá, {{ session('nome') }}, se você tentou acessar sua conta conosco segue abaixo seu código para acesso a sua conta, se não foi você pode desconsiderar esse e-mail, alguém pode ter digitado o e-mail por engano.
        </p>
    </div>

    <div style="
            width: 100%;
            margin: 20px 0;
            font-size:14px;
            text-align:justify;
        ">
        <p>
            Código de confirmação: {{ session('confirmCode') }}
        </p>
    </div>

    <div style="
            width: 100%;
            font-size:12px;
            text-align:justify;
        ">
        <p>
            Este é um código único que espira em 2 minutos, então fique tranquilo que estamos cuidando da segurança da sua conta.
        </p>
    </div>

</div>
