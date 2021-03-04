<?php

namespace App\Http\Controllers;
use App\Models\Staffs;
use Illuminate\Http\Request;
session_start();

class admin extends Controller
{
   protected $data;
   protected $other;
   protected $db;
   public function __construct(){
    //
   }
   public function result(){
    $this->data = Staffs::where("role","Super Admin")->get();
    if (count($this->data) != 0) {
       session()->flash('admin',"ready");
    }
    return response()->view("auth.auth")->header('Content-Type','text/html')->setStatusCode(200);
	unset($this->data);
	unset($this->db);
	unset($this->other);
   //return view('auth.auth');
   }
}
