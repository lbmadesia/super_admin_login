@extends('default')
 {{-- title --}}
@section('title')
    Iottech HRM
@endsection

{{-- style --}}
@section('style')
    <link rel="stylesheet" href="{{ asset('lbasset/css/index.css') }}" />
@endsection
{{-- script --}}
@section('script')
    <script src="{{ asset('lbasset/js/index.js') }}"></script>
@endsection
{{-- header --}}
@section('header')
    <h1 class="text-danger">header</h1>
@endsection

{{-- section --}}
@section('section')
    section
@endsection
{{-- footer --}}
@section('footer')
    footer
@endsection