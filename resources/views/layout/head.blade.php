<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>ACNH Critterpedia</title>
  <link rel="icon" href="https://acnhapi.com/v1/icons/bugs/1" />
  <link href="{{ asset('/css/reset.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<div>
<h1><a href="../">ACNH Critterpedia</a></h1>
<nav>
    <a href="../fish/">Fish</a>
    <a href="../sea/">Sea Creatures</a>
    <a href="../bugs/">Bugs</a>
</nav>
</div>
<body>
    @yield('content')
    <footer>
    <p> Made by Flavie Enrico - API by ACNHAPI</p>
    </footer>
</body>
</html>