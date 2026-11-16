@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    @include('pages.gallery.banner')
    @include('pages.gallery.grid')
    @include('pages.gallery.lightbox')
@endsection

@push('scripts')
    <script src="{{ asset('js/gallery.js') }}" defer></script>
@endpush
