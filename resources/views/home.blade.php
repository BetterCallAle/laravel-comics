@extends('layouts.app')

@section('title')
    DC Comics Homepage
@endsection

@section('content')
    @include('partials.home-comics-section')

    @include('partials.home-shop')
   
@endsection