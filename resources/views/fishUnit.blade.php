@foreach ($response as $row)
<ul>
    <li>Name: {{ $row->{'file-name'} }}</li>
    <li>Location: {{ $row->availability->location }}</li>
    <li>Rarity: {{ $row->availability->rarity }}</li>
    <li>Size: {{ $row->shadow }}</li>
    <li>Price: {{ $row->price}}</li>
    <li>Price if bought by CJ: {{$row->{'price-cj'}}}</li>
    <li> Catchphrase: {{$row->{'catch-phrase'}}}</li>
    
</ul>
<img src="{{ $row->image_uri }}" height="300px" alt="{{ $row->{'file-name'} }}">
@endforeach