<?php 
$month = date("F");   
?>
<head>
  <meta charset="utf-8">
  <title>ACNH Critterpedia</title>
  <link rel="icon" href="https://acnhapi.com/v1/icons/bugs/1" />
  <link href="{{ asset('/css/reset.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/switch.css') }}" rel="stylesheet">
</head>
<div>
<h1><a>ACNH Critterpedia</a></h1>
<nav>
    <a href="fish/">Fish</a>
    <a href="sea/">Sea Creatures</a>
    <a href="bugs/">Bugs</a>
</nav>
</div>
<body>
<div>
<h2>Critters of the month: <em><?php echo $month; ?></em></h2>
<span class="switch">
        <p>Northern hemisphere</p>
        <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round"  type="checkbox">
        <label for="cmn-toggle-1"></label>
        <p>Southern hemisphere</p>
</span>
<p id="selected"></p>
</div>
</body>