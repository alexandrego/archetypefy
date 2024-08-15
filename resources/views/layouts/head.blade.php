<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Styles -->
  <link rel="stylesheet" href="src/assets/css/global.css">
  <link rel="stylesheet" href="src/assets/css/index.css">
  <link rel="stylesheet" href="src/assets/css/dashboard.css">
  <link rel="stylesheet" href="src/assets/css/startTest.css">
  <link rel="stylesheet" href="src/assets/css/questions.css">
  <link rel="stylesheet" href="src/assets/css/result.css">
  <link rel="stylesheet" href="src/assets/css/resultComportamento.css">
  <link rel="stylesheet" href="src/assets/css/configDashboard.css">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('src/assets/img/favicon.png') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>@yield('title')</title>
</head>
<body class="roboto-regular fade-in" id="fade-in">
  @yield('content')

  <!-- Scripts -->
  <script src="src/assets/js/scripts.js"></script>
  <script src="/src/assets/js/pageQuestions.js"></script>
  <script src="/src/assets/js/buttonEffect.js"></script>
  <script src="/src/assets/js/maskPhone.js"></script>
  <script src="/src/assets/js/configDashboard.js"></script>

  {{-- Bootstrap --}}
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
