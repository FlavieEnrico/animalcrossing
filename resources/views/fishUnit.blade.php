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
<?php 
$row=$response;
$replaced = Str::of($row->{'file-name'})->replace('_', ' ');
$converted = Str::of($replaced)->title();
?>
<a href=".">◄</a>
<ul>
    <li><h2><?php echo $converted; ?></h2></li>
    <li>Location: {{ $row->availability->location }}</li>
    <li>Rarity: {{ $row->availability->rarity }}</li>
    <li>Size: {{ $row->shadow }}</li>
    <li>Availability:
         <?php 
          $month = [1 => "January", 
                    2 => "February", 
                    3 => "March",
                    4 => "April",
                    5 => "May",
                    6 => "June",
                    7 => "July",
                    8 => "August",
                    9 => "September",
                    10 => "October",
                    11 => "November",
                    12 => "December"];
         if ($row->availability->isAllDay =="true"){
             echo "All day, ";
         }
         else {
            echo $row->availability->time;
         }
         if ($row->availability->isAllYear =="true"){
            echo "All year";
        }
        else {
            echo $row->availability->{'month-northern'};
        }
         ?>
    </li>
    <li>Price: {{ $row->price}}</li>
    <li> CJ Price: {{$row->{'price-cj'} }}</li>
    <li> Catchphrase: {{$row->{'catch-phrase'} }}</li>
</ul>
<img src="{{ $row->image_uri }}" height="300px" alt="{{ $row->{'file-name'} }}">
</div>