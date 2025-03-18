@foreach($ocene as $ocena)
    <p>{{$ocena->predmet}} {{$ocena->ocena}} {{$ocena->profesor}}</p>
@endforeach

