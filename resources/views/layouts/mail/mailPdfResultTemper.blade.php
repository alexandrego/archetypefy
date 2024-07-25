<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Identidade de Temperamentos</title>
</head>
<body>
    <div style="max-width:100vw;font-family:Arial, Helvetica, sans-serif;padding:20px;line-height:1.5;letter-spacing:0.6px;background-color:#fff;color:#000;">

    <div style="width:100%;display:flex;flex-direction:column;align-items:center;">
        <img src="https://archetypefy.com.br/wp-content/webp-express/webp-images/uploads/2024/06/LOGO_Prancheta-1-1024x1024.png.webp" width="100" />
    </div>

    <div style="width:100%;font-size:16px;text-align:justify;color:#000;">
            Olá, {{ session('fullName') }}, Parabéns por completar o seu teste, agora você esta pronto(a) para começar a caminhar na direção certa.
    </div>

    <div style="width:100%;margin:20px 0;font-size:16px;align-items:center;color:#000;">
            Seu principal temperamento é: <span style="font-size:18px"><strong>{{ session('resultadoFinalTemper') }}</strong>
    </div>

    <div style="width:100%;font-size:15px;text-align:justify;color:#000;">
            O temperamento {{ session('resultadoFinalTemper') }} descreve uma pessoa que é....
    </div>

    </div>
</body>
</html>
