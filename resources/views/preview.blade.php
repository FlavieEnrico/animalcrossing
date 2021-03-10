<head>
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<div>
@foreach ($response as $row)
<div>
    <div>
<img src="{{ $row->icon_uri }}" height="100px" alt="{{ $row->{'file-name'} }}">
</div>
<p>
<a href="{{ $row->{'file-name'} }}">{{ $row->{'file-name'} }}</a>
</p>
</div>
@endforeach
</div>