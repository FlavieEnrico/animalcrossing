<?php 
$month = date("F");   
?>
<head>
  <meta charset="utf-8">
  <title>ACNH Critterpedia</title>
  <link rel="icon" href="https://acnhapi.com/v1/icons/bugs/1" />
  <link href="{{ asset('/css/reset.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<div>
<h1><a>ACNH Critterpedia</a></h1>
<nav>
    <a href="./fish/">Fish</a>
    <a href="./sea/">Sea Creatures</a>
    <a href="./bugs/">Bugs</a>
</nav>
</div>
<body>
<div>
<p>Welcome to the Animal Crossing: New Horizons Critterpedia! Here you'll be able to find all of the informations you need about any critter in the game. Moreover, on this welcome page, you'll find a cool random critter!</p>
<h2 style="width:100%">Random Critter:</h2>
<?php 
$replaced = Str::of($response->{'file-name'})->replace('_', ' ');
$converted = Str::of($replaced)->title();
?>
<div style="width:100%">
    <div>
    <a href="./{{ $chosenCritterType }}/{{ $response->{'file-name'} }}"><img src="{{ $response->icon_uri }}" alt="{{ $response->{'file-name'} }}"></a>
</div>
<p>
<a href="{{ $response->{'file-name'} }}"><?php echo $converted;?></a>
</p>
</div>
</div>
  <footer>
    <p> Made by Flavie Enrico - API by ACNHAPI</p>
  </footer>
</body>
</html>