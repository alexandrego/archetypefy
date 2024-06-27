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

  <!-- Scripts -->
  <script src="src/assets/js/scripts.js"></script>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('src/assets/img/favicon.png') }}">


  <title>@yield('title')</title>
</head>
<body class="roboto-regular">
  @yield('content')

  <script src="/src/assets/js/pageQuestions.js"></script>
</body>
</html>
