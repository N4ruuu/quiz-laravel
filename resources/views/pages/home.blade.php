@extends('layouts.app')

@section('content')
    @include('pages.home.hero')
    @include('pages.home.marquee')
    @include('pages.home.menu')
    @include('pages.home.stats')
@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}" defer></script>
@endpush
