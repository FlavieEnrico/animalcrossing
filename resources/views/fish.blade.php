@foreach ($response as $row)
<img src="{{ $row->icon_uri }}" height="100px" alt="{{ $row->{'file-name'} }}">
<p>{{ $row->{'file-name'} }}</p>
@endforeach