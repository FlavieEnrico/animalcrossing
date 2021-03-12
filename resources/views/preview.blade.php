<head>
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
<div>
@foreach ($response as $row)
<?php 
$replaced = Str::of($row->{'file-name'})->replace('_', ' ');
$string = Str::of($replaced)->ucfirst();
?>
<div>
    <div>
    <a href="{{ $row->{'file-name'} }}"><img src="{{ $row->icon_uri }}" alt="{{ $row->{'file-name'} }}"></a>
</div>
<p>
<a href="{{ $row->{'file-name'} }}"><?php echo $string;?></a>
</p>
</div>
@endforeach
</div>