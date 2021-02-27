@extends('../../default')
 {{-- title --}}
@section('title')
    Iottech HRM
@endsection

{{-- style --}}
@section('style')
    <link rel="stylesheet" href="{{ asset('lbasset/auth/css/employee.css') }}" />
@endsection
{{-- script --}}
@section('script')
    <script src="{{ asset('lbasset/auth/js/employee.js') }}"></script>
@endsection
{{-- header --}}
@section('header')
    <h1 class="text-danger">header</h1>
@endsection

{{-- section --}}
@section('section')
<div class="admin-auth d-flex justify-content-center align-items-center">
    <div class="form-div bg-white rounded-sm">
        <form>
            @csrf
            <input type="text" class="form-control" name="email" placeholder="user id" required />
            
        </form>
    </div>
</div>
@endsection
{{-- footer --}}
@section('footer')
    footer
@endsection