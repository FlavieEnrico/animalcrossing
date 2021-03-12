@extends('layout.head')
@section('content')
<div>
@foreach ($response as $row)
<?php 
$replaced = Str::of($row->{'file-name'})->replace('_', ' ');
$converted = Str::of($replaced)->title();
?>
<div>
    <div>
    <a href="{{ $row->{'file-name'} }}"><img src="{{ $row->icon_uri }}" alt="{{ $row->{'file-name'} }}"></a>
</div>
<p>
<a href="{{ $row->{'file-name'} }}"><?php echo $converted;?></a>
</p>
</div>
@endforeach
</div>
@endsection