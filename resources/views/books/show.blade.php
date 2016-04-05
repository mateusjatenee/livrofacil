@extends('app')

@section('html-class', 'class="landing"')

@section('content')
    @include('partials.navbar')
    <books-show id="{{ $ad->id }}"></books-show>
@endsection
