<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archetypefy - Código de segurança</title>
</head>
<body>
    <div style="max-width:100vw;font-family:Arial, Helvetica, sans-serif;padding:20px;line-height:1.5;letter-spacing:0.6px;background-color:#fff;color:#000;">

        <div style="width:100%;display:flex;flex-direction:column;align-items:center;justify-content: center;">
            <div>
                <img src="https://archetypefy.online/src/assets/img/logo.svg" width="100" />
            </div>
        </div>

        <div style="width:100%;font-size:16px;text-align:justify;color:#000;">
                Olá {{ $userName }}, se você tentou acessar sua conta conosco segue abaixo seu código para acesso a sua conta, se não foi você pode desconsiderar esse e-mail, alguém pode ter digitado o e-mail por engano.
        </div>

        <div style="width:100%;margin:20px 0;font-size:14px;align-items:center;color:#000;">
                Código de confirmação: <strong>{{ $confirmCode }}</strong>
        </div>

        <div style="width:100%;font-size:12px;text-align:justify;color:#000;">
                Este é um código único que espira em 2 minutos, então fique tranquilo que estamos cuidando da segurança da sua conta.
        </div>

    </div>
</body>
</html>
