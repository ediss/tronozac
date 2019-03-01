<h1>Edise, {{ $name }} je porucio {{ $quantity }} Tronozac(a). Model : {{ $model }} </h1>

    Podaci o porudzbini : <br/>

    <p>Adresa : {{ $address }} <br/>
       E-mail : {{ $email }}<br/>
       Broj telefona : {{ $phone }}<br/>
       Model : {{$model}}<br/>
       Kolicina : {{ $quantity }}<br/>
       Boja : @if(isset($color))
                @foreach ($color as $c) {{ $c }}, @endforeach
              @endif

      Napomena @if(isset($note)) {{ $note }} @endif
    </p>

