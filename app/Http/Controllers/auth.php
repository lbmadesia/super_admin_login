<?php

namespace App\Http\Controllers;
use App\Models\Staffs;
use App\Models\Moduls;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
session_start();
class auth extends Controller
{
    protected $data;
    protected $db;
    protected $other;
    protected $macAddress;
    protected $response;
    // START REGISTER SUPER ADMIN
  public function adminlogin(Request $request){
    $this->data = Staffs::where("role","Super Admin")->get();
    if (count($this->data) != 0) {
        return redirect('/404');
    }
    else{
        $this->data = $request->all();
        // staret macAddress access
        ob_start();
    system('ipconfig/all');
    $mycom=ob_get_contents(); 
    ob_clean(); 
    $findme = "Physical";
    $pmac = strpos($mycom, $findme); 
    $this->macAddress=substr($mycom,($pmac+36),17);
//    end macAddress access
        try{
            $email = $this->data["email"];
            $password = md5($this->data["password"]);
            $this->db = new Staffs();
            $this->db->name = "Super Admin";
            $this->db->email = $this->data["email"];
            $this->db->password = md5($this->data["password"]);
            $this->db->role = "Super Admin";
            $this->db->status = "1";
            $this->db->mac_address =  $this->macAddress;
            $this->db->save();
            $this->other = Staffs::where([["email","=",$email],["password","=",$password]])->get();
            if (count($this->other) != 0) {
               foreach($this->other as $this->response)
               {
                $this->db = new Moduls();
                $this->db->staff_id = $this->response->id;
                $this->db->save();
               }
            }
            session()->flash('admin',"ready");
            return redirect('/login');
        }
        catch(QueryException $e){
            session()->flash('error',"something wrong");
            return redirect('/error');
        
            }
   }    
   unset($this->data);
   unset($this->db);
   unset($this->other);
   unset($this->macAddress);
   unset($this->response);
   unset($mycom);
   unset($findme);
   unset($pmac);
}
//  END SUPER ADMIN
//  start staff login 
public function stafflogin(Request $request){
    $this->data = $request->all();
    $email = $this->data['email'];
    $password = md5($this->data['password']);
    // staret macAddress access
    ob_start();
    system('ipconfig/all');
    $mycom=ob_get_contents(); 
    ob_clean(); 
    $findme = "Physical";
    $pmac = strpos($mycom, $findme); 
    $this->macAddress=substr($mycom,($pmac+36),17);
//    end macAddress access
     $this->other = Staffs::where([["email","=",$email],["password","=",$password]])->get();
     if (count($this->other) != 0) {
        foreach($this->other as $this->response)
        {
            if($this->response->role == "Super Admin"){
    // start super admin code here 
                if($this->response->mac_address == $this->macAddress){
                    $this->other = Moduls::where("staff_id",$this->response->id)->get();
                    if (count($this->other) != 0) {
                        foreach($this->other as $this->response){
                            session()->flash('authenticationiottech',["role"=>"superadmin","allow"=>$this->response]);
                            return redirect('/hrm');
                            break;
                        }
                    }
                        else{
                            session()->flash('error',"we will soon catched you");
                            return redirect('/error');
                        }
                   }
                else{
                    return response(array("status"=>"error","data"=>"please login from right system"),401)->header("Content-Type","application/json");
                }
    // end super admin code here  
            }
            else{
    // start staff login code ================================================================

    //session()->flash('authenticationiottech',["role"=>"superadmin","allow"=>"all"]);
    session()->flash('error',"you have no page !");
    return redirect('/error');
    // end staff login code ==================================================================
            } 
        }
     }
     else{
        return response(array("status"=>"error","data"=>"userid or password wrong"),401)->header("Content-Type","application/json");
     }


    unset($this->data);
    unset($this->db);
    unset($this->other);
    unset($this->macAddress);
    unset($this->response);
    unset($mycom);
    unset($findme);
    unset($pmac);
}
//  end staff login 
}
