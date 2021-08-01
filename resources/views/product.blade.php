@extends ('layouts.main')

@section('title', 'Produto')

@section('content')

@if ($id != null)
<p>Exibindo produtos id: {{$id}}</p>
@endif

@endsection