@extends('layouts.app')

@section('title', 'What\'s hot')

@section('content')

  @isset($tags)
    @foreach($tags as $tag)

      <p>{{ $tag->name }}</p>

    @endforeach
  @endisset

@endsection

