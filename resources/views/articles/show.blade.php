@extends('app')



@section('content')
  <h1>{{ $article->title }}</h1>




          <p>
            {{$article->body}}
          </p>
          <small>{{$article->published_at}}</small>


@stop
