@extends('app')

@section('content')

  <h1>{{ $article->title }}</h1>
  <hr>
  
  <articles>
    {{ $article->body }}
  </articles>
  
@stop