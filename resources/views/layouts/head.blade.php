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

  <!-- Scripts -->
  <script src="src/assets/js/scripts.js"></script>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('src/assets/img/favicon.png') }}">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>@yield('title')</title>
</head>
<body class="roboto-regular fade-in" id="fade-in">
  @yield('content')

  <script src="/src/assets/js/pageQuestions.js"></script>
  <script src="/src/assets/js/buttonEffect.js"></script>
  <script src="/src/assets/js/maskPhone.js"></script>
</body>
</html>
