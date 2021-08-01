@extends ('layouts.main')

@section('title', 'HDC Events')

@section('content')


<h1>Alguma coisa, hihi. Humor e Piadas xD</h1>
<img src="/img/banner.jpg" alt="Banner">
@if(20 > 15)
<p>A condição é true;</p>
@endif

<p>{{$nome}}</p>

@if($nome === 'Pedro')
<p>O nome é Pedro</p>
@elseif($nome == 'paula')
<p>O nome é {{ $nome }}</p>
<p>Sua idade é {{$idade}} anos</p>
@else
<p>O nome não é Pedro</p>
@endif

@for($i=0; $i < count($arr); $i++) <p>{{$arr[$i]}}</p>
    @endfor

    @foreach($nomes as $nome)
    <p>{{$nome}}</p>
    <p>{{$loop -> index}}</p>
    @endforeach

    @php
    $name = 'james';
    echo $name;
    @endphp

    <!-- Comentário em HTML -->
    {{-- Comentários em Blade --}}
    @endsection