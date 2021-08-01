@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
<h1>Compre seu produto aqui mundano!</h1>
<a href="/">Volte para casa, pequeno gafanhoto</a>
@if($busca != '')
<p>O usuário está buscando por: {{$busca}}</p>
@endif
@endsection