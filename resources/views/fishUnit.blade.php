@extends('layout.head')
@section('content')
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
            echo $row->availability->time.", ";
         }
         if ($row->availability->isAllYear =="true"){
            echo "All year";
        }
        else {
            echo $row->availability->{'month-northern'}." for the Northern Hemisphere, ";
            echo $row->availability->{'month-southern'}." for the Southern Hemisphere.";
        }
         ?>
    </li>
    <li>Price: {{ $row->price}} bells</li>
    <li> CJ Price: {{$row->{'price-cj'} }} bells</li>
    <li> Catchphrase: {{$row->{'catch-phrase'} }}</li>
</ul>
<img src="{{ $row->image_uri }}" height="300px" alt="{{ $row->{'file-name'} }}">
</div>
@endsection