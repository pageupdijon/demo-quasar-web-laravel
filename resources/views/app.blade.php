@extends('layouts.page')

@push('styles')
    @vite('resources/css/app.scss')
    @inertiaHead
@endpush

@push('scripts')
    @vite('resources/js/app.js')
@endpush

@section('content')
    @inertia
@endsection
