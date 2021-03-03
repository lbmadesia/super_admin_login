@extends('../default')
 {{-- title --}}
@section('title')
    Iottech HRM
@endsection

{{-- style --}}
@section('style')
    <link rel="stylesheet" href="{{ asset('lbasset/hrm/css/index.css') }}?cache=<?php echo time();?>">
@endsection
{{-- script --}}
@section('script')
    <script src="{{ asset('lbasset/hrm/js/index.js') }}?cache=<?php echo time();?>"></script>
@endsection
{{-- header --}}
@section('header')

@endsection

{{-- section --}}
@section('section')
<div class="lb-main-page d-flex">
    <div class="left-side bg-light shadow-lg">
       <div class="shadow-lg d-flex justify-content-between align-items-center px-2 pt-2 bg-white" style="padding-bottom: 10px;">
           <img src="{{ asset('lbasset/img/logo.png') }}" alt="IOTTECH SOFTWARE" />
       </div>
           <div class="left-manu">
            <ul class="list-group">
                <li class="list-group-item  border-0 bg-light left-menu-item d-flex justify-content-between align-items-left"><span><i class="fa fa-dashboard" aria-hidden="true"></i> <span class="textt-hide">&nbsp;&nbsp;Dashboard</span></span></li>
          {{-- start payroll manage --}}
          <li data-toggle="collapse" data-target="#li-col-0" aria-expanded="false" class="list-group-item li-group-dropdown  border-0 bg-light left-menu-item d-flex justify-content-between align-items-center"><span><i class="fa fa-usd" aria-hidden="true"></i> <span class="textt-hide"><span class="textt-hide">&nbsp;&nbsp;Payroll Management</span></span><i class="fa fa-angle-left angle-left" aria-hidden="true"></i></li>
          <div id="li-col-0" class="collapse bg-white">
             <ul class="list-group bg-white textt-hide">
                 <li  data-type="manage_salary" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Manage Salary</span></li>
                 <li  data-type="salary_list" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Salary List</span></li>
                 <li  data-type="make_payment" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Make Payment</span></li>
                 <li  data-type="generate_payslip" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Generate Payslip</span></li>
                 <li  data-type="salary_sheet" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Salary Sheet</span></li>
                 <li  data-type="manage_bonus" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Manage Bonus</span></li>
             </ul>        
         </div>
          {{-- start attendance --}}
           <li data-toggle="collapse" data-target="#li-col-1" aria-expanded="false" class="li-group-dropdown list-group-item  border-0 bg-light left-menu-item d-flex justify-content-between align-items-center"><span><i class="fa fa-calendar" aria-hidden="true"></i> <span class="textt-hide">&nbsp;&nbsp;Attendance</span></span><i class="fa fa-angle-left angle-left" aria-hidden="true"></i></li>
         <div id="li-col-1" class="collapse bg-white">
            <ul class="list-group bg-white textt-hide">
                <li  data-type="make_attendance" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Make Attendance</span></li>
                <li  data-type="import_attendance" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Import Attendance</span></li>
                <li  data-type="make_attendance" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Attendance Sheet</span></li>
            </ul>        
        </div>
        {{-- start employee management --}}
        <li data-toggle="collapse" data-target="#li-col-2" aria-expanded="false" class="li-group-dropdown list-group-item  border-0 bg-light left-menu-item d-flex justify-content-between align-items-center"><span><i class="fa fa-users" aria-hidden="true"></i> <span class="textt-hide">&nbsp;&nbsp;Employee Management</span></span><i class="fa fa-angle-left angle-left" aria-hidden="true"></i></li>
        <div id="li-col-2" class="collapse bg-white">
           <ul class="list-group bg-white textt-hide">
               <li  data-type="new_mployee" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;New Employee</span></li>
               <li  data-type="manage_mployee" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Manage Employee</span></li>
               <li  data-type="manage_reference" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;New Reference</span></li>
               <li  data-type="new_reference" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Manage Reference</span></li>
           </ul>        
       </div>
     {{-- start leave management  --}}
     <li data-toggle="collapse" data-target="#li-col-3" aria-expanded="false" class="li-group-dropdown list-group-item  border-0 bg-light left-menu-item d-flex justify-content-between align-items-center"><span><i class="fa fa-paper-plane" aria-hidden="true"></i> <span class="textt-hide">&nbsp;&nbsp;Leave Management</span></span><i class="fa fa-angle-left angle-left" aria-hidden="true"></i></li>
         <div id="li-col-3" class="collapse bg-white">
            <ul class="list-group bg-white textt-hide">
                <li  data-type="new_leave_category" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;New Leave Category</span></li>
                <li  data-type="leave_category_list" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Leave Category List</span></li>
                <li  data-type="new_leave_application" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;New Leave Application</span></li>
                <li  data-type="leave_application_list" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Leave Application List</span></li>
                <li  data-type="leave_application_manage" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Leave Application Manage</span></li>
                <li  data-type="leave_application_manage" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Leave Reports</span></li>
            </ul>        
        </div>
        {{-- start notice board --}}
        <li data-toggle="collapse" data-target="#li-col-4" aria-expanded="false" class="li-group-dropdown list-group-item  border-0 bg-light left-menu-item d-flex justify-content-between align-items-center"><span><i class="fa fa-bell-o" aria-hidden="true"></i> <span class="textt-hide">&nbsp;&nbsp;Notice Board</span></span><i class="fa fa-angle-left angle-left" aria-hidden="true"></i></li>
        <div id="li-col-4" class="collapse bg-white">
           <ul class="list-group bg-white textt-hide">
               <li  data-type="new_notice" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;New Notice</span></li>
               <li  data-type="notice_list" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Notice List</span></li>
           </ul>        
       </div>
       {{-- start expense Management --}}
       <li data-toggle="collapse" data-target="#li-col-5" aria-expanded="false" class="li-group-dropdown list-group-item  border-0 bg-light left-menu-item d-flex justify-content-between align-items-center"><span><i class="fa fa-minus" aria-hidden="true"></i> <span class="textt-hide">&nbsp;&nbsp;Expense Management</span></span><i class="fa fa-angle-left angle-left" aria-hidden="true"></i></li>
       <div id="li-col-5" class="collapse bg-white">
          <ul class="list-group bg-white textt-hide">
              <li  data-type="new_expense_category" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;New Expense Category</span></li>
              <li  data-type="expense_category_list" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Expense Category List</span></li>
              <li  data-type="create_expense" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Create Expense</span></li>
              <li  data-type="create_expense_List" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Create Expense List</span></li>
          </ul>        
      </div>
{{-- start client --}}
<li data-toggle="collapse" data-target="#li-col-6" aria-expanded="false" class="li-group-dropdown list-group-item  border-0 bg-light left-menu-item d-flex justify-content-between align-items-center"><span><i class="fa fa-reddit-alien" aria-hidden="true"></i> <span class="textt-hide">&nbsp;&nbsp;Client Management</span></span><i class="fa fa-angle-left angle-left" aria-hidden="true"></i></li>
<div id="li-col-6" class="collapse bg-white">
   <ul class="list-group bg-white">
       <li  data-type="new_client" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;New Client</span></li>
       <li  data-type="new_client" class="list-group-item border-0 bg-light d-flex  justify-content-left align-items-center collapse-item pl-5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> &nbsp;&nbsp;&nbsp;Manage Client</span></li>
   </ul>        
</div>
{{-- start profile, change password and logout --}}
<li class="list-group-item  border-0 bg-light left-menu-item d-flex justify-content-between align-items-left"><span><i class="fa fa-cog" aria-hidden="true"></i> <span class="textt-hide">&nbsp;&nbsp;Setting</span></span></li>
<li class="list-group-item  border-0 bg-light left-menu-item d-flex justify-content-between align-items-left"><span><i class="fa fa-user" aria-hidden="true"></i> <span class="textt-hide">&nbsp;&nbsp;Profile</span></span></li>
<li class="list-group-item  border-0 bg-light left-menu-item d-flex justify-content-between align-items-left"><span><i class="fa fa-key" aria-hidden="true"></i> <span class="textt-hide">&nbsp;&nbsp;Change Password</span></span></li>
<li class="list-group-item  border-0 bg-light left-menu-item d-flex justify-content-between align-items-left"><span><i class="fa fa-lock" aria-hidden="true"></i> <span class="textt-hide">&nbsp;&nbsp;Logout</span></span></li>
          
              </ul>
           </div>
    </div>
    <div class="right-side">
        {{-- start header --}}
        <div class="header bg-white shadow-sm d-flex justify-content-between align-items-center">
            <div class="left-icon p-2" id="cog" lbaction="full">
                 <span class="material-icons" >
                     horizontal_split
                     </span>
               </div>    
             
                  <div class="right-icon d-flex justify-content-center align-items-center p-2 pr-3"><span class="material-icons">
                     account_circle
                     </span> <span class="">ADMIN</span>
                 </div> 
         </div>
        {{-- end header --}}


        {{-- start fullscreen icon --}}
        <div class=" d-flex justify-content-center align-items-center fullscreen-div" id="fullscreen" lbaction="full">
            <i class="fa fa-arrows-alt" aria-hidden="true" style="font-size: 25px;color:white;"></i>
        </div>
    </div>
</div>
@endsection
{{-- footer --}}
@section('footer')

@endsection