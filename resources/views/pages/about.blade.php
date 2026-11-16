@extends('layouts.app')

@section('title', 'About')

@section('content')
    @include('pages.about.banner')
    @include('pages.about.biodata')
    @include('pages.about.skills')
@endsection
