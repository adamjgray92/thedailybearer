@extends('layouts.app')

@section('title', ucwords($name))

@section('content')

  @isset($name)
    <h1>Results for {{ ucwords($name) }}</h1>
  @endisset

@endsection

