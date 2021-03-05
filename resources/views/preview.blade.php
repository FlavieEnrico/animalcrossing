<div style="display:flex;flex-wrap:wrap;">
@foreach ($response as $row)
<div style="width:15%;margin-left:30px;margin-right:30px; background-color:grey; Margin-top:25px;padding: 15px 15px 15px 15px;border-radius:25px;">
<img src="{{ $row->icon_uri }}" height="100px" alt="{{ $row->{'file-name'} }}">
<a href="{{ $row->{'file-name'} }}">{{ $row->{'file-name'} }}</a>
</div>
@endforeach
</div>