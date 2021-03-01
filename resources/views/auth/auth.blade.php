@extends('../default')
 {{-- title --}}
@section('title')
    Iottech HRM
@endsection

{{-- style --}}
@section('style')
    <link rel="stylesheet" href="{{ asset('lbasset/auth/auth.css') }}?cache=<?php echo time();?>">
@endsection
{{-- script --}}
@section('script')
    <script src="{{ asset('lbasset/auth/admin.js') }}?cache=<?php echo time();?>"></script>
@endsection
{{-- header --}}
@section('header')
   
@endsection

{{-- section --}}
@section('section')
   <div class="admin-auth d-flex justify-content-center align-items-center" style="background: url({{asset('lbasset/img/Background.jpg')}}); ">
    <div class="page py-4">
        <div class="branding">
            <h1 class="text-white text-center">HRM</h1>
            <p class="text-white text-center">IOTTECH HRM SOLUTIONS</p>
        </div>
    <div class="px-4">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#admin" data-toggle="tab">ADMIN</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#employee" data-toggle="tab">EMPLOYEE</a>
        </li>

      </ul>

      <div class="tab-content py-4">
        <div id="admin" class="active tab-pane">
            <div class="alert alert-warning d-none">
                <i class="fa fa-warning text-dark"></i>
                Register admin panel from your personal PC.
                Once you register,you will only access your admin panel from this PC.
                <i class="fa fa-times-circle close mt-2 text-danger" data-dismiss="alert"></i>
            </div>
            <form class="admin-form">
                @csrf
                
                <div class="form-group">
                    <label>ADMIN ID</label>
                    <input type="email" class="form-control border-0 rounded-0 company-estd" name="adminid" placeholder="admine@gmail.com">
                </div>

                <div class="form-group">
                    <label>PASSWORD</label>
                    <input type="password" class="form-control border-0 rounded-0 company-password" name="password" placeholder="******">
                </div>

                <div class="form-group mt-4">

                    <button class="btn btn-danger rounded-0 float-left">
                    <i class="fa fa-sign-in"></i>
                    LOGIN
                    </button>

                    <div class="preloader">
                        <div class="spinner"></div>
                        <div class="spinner-2"></div>
                    </div>
                </div>
            </form>
        </div>

        <div id="employee" class="tab-pane fade">
            <form class="employee-form">
                <div class="form-group">
                    <label>USERNAME</label>
                    <input type="email" class="form-control border-0 rounded-0" name="username" placeholder="employee@gmail.com">
                </div>

                <div class="form-group">
                    <label>PASSWORD</label>
                    <input type="password" class="form-control border-0 rounded-0" name="password" placeholder="******">
                </div>

                <div class="form-group mt-4">
                    <button class="btn btn-danger rounded-0 float-left">
                    <i class="fa fa-sign-in"></i>
                    LOGIN
                    </button>

                    <div class="preloader">
                        <div class="spinner"></div>
                        <div class="spinner-2"></div>
                    </div>

                </div>
            </form>
        </div>


      </div>
    </div>
    </div>
   </div>
@endsection
{{-- footer --}}
@section('footer')

@endsection