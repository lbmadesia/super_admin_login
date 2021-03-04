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
    {{-- code of header --}}
@endsection

{{-- section --}}
@section('section')
<div class="notepage">
    <i class="fa fa-warning icon text-danger"></i>
    <h1 class="text-danger">Opps! Not Found</h1>
</div>
@endsection
{{-- footer --}}
@section('footer')
    {{-- coide of footer --}}
@endsection