<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
class AdminController extends Controller
{
    public function Index(){
        return view('backend.Auth.login');
    }
    public function AdminLogin(Request $request){
            $input_data=$request->all();
        if(Auth::attempt(['email'=>$input_data['email'],'password'=>$input_data['password'],'is_admin' => 1])){

            // return view('/backend.master'); backend.inc.admin_content
            return view('backend.inc.admin_content');

        }else{
            Session::flash('message', "Email or Password is incorrect!");
            return Redirect::back();
        }
    }
    public function AdminLogout(){
            Auth::logout();
            Session::flush();
            return Redirect::to ('/admin');
    }
    public function AdminProfile(){
            $id =Auth::id();
            $user_data = User::where('id',$id)->get();
            return view ('backend.AdminProfile.profile',compact('user_data'));
    }
    public function Dashbord(){
            $this->AdminAuthCheck();
            return view('backend.inc.admin_content');
            // agr issue kry tu is mai  backend.master vew retun kerwa do 
    }
    public function AdminAuthCheck(){
            $admin_id=Auth::id();
        if ($admin_id) {
            return;
        }else{
            return Redirect::to('/admin')->send();
        }

    }
     public function AdminUpadte(Request $request,$id){
         $user = User::findOrFail($id);

             $user->email =$request->input('email');

            $new_pass=Hash::make($request->input('password'));

            $data = $user->password =$new_pass;

             $user->save();

        Session::flash('message', "Profile Updated Successfully");

             return Redirect::back();
            
            
           

        }
}