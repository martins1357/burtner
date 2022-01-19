<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Account;
use App\Models\Plan;
use App\Models\Activity;
use App\Models\Transaction;
use App\Models\Application;
use App\Models\Token;

use App\Models\fakeTransaction;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\GeneralMailer;
 
 
class UserController extends Controller
{
   public function index(Request $request)
   {
       return view('index');
   }
 
   public function About(Request $request)
   {
       return view('about');
   }
 
   public function faq(Request $request)
   {
       return view('faq');
   }
 
 
   public function contact(Request $request)
   {
       return view('contact');
   }
 
   public function home(Request $request)
   {
       return view('home');
   }
 
   public function pricing(Request $request)
   {
       return view('pricing');
   }
 
   public function services(Request $request)
   {
       return view('services');
   }
   public function login(Request $request)
   {
       return view('login');
   }
   public function antifraud(Request $request)
   {
       return view('antifraud');
   }
   public function history(Request $request)
   {
       return view('history');
   }
   public function portfolio(Request $request)
   {
       return view('portfolio');
   }
   public function security(Request $request)
   {
       return view('security');
   }
   public function cryptocurrency(Request $request)
   {
       return view('cryptocurrency');
   }
   public function forex(Request $request)
   {
       return view('forex');
   }
   public function realestate(Request $request)
   {
       return view('realestate');
   }
   public function escrowservices(Request $request)
   {
       return view('escrowservices');
   }
   public function personalloans(Request $request)
   {
       return view('personalloans');
   }
   public function cannibisstock(Request $request)
   {
       return view('cannibisstock');
   }
 
 
 
 
 
 
   public function dashboard(Request $request){
       return view('customer.index');
   }
   public function wallet(Request $request){
       return view('customer.wallet');
   }
   public function deposit(Request $request){
       return view('customer.deposit');
   }
   public function convert(Request $request){
       return view('customer.convert');
   }
       public function plan(Request $request){
           return view('customer.plan');
       }
       public function withdraw(Request $request){
           return view('customer.withdraw');
       }
       public function partners(Request $request){
           return view('customer.partners');
       }
       public function customerHistory(Request $request, $name)
  
       {
           if($name == 'add'){
               return view('customer.add-history');
           }
           elseif($name == 'withdraw'){
               return view('customer.withdraw-history');
           }elseif($name == 'exchange'){
               return view('customer.exchange-history');
           }
       }
      
       public function settings(Request $request, $name)
      
       {
           if($name == 'general'){
               return view('customer.general-setting');
           }
           elseif($name == 'payment'){
               return view('customer.payment-setting');
           }elseif($name == 'security'){
               return view('customer.security-setting');
           }
       }
 
  
   // public function logout(Request $request){
   //     return view('customer.logout');
   // }
 
 
 
 
 
   public function dashboardadmin(Request $request){
       return view('admin.index');
   }
   public function despositadmin(Request $request, $name)
      
   {
       if($name == 'active'){
           return view('admin.active-deposit');
       }
       elseif($name == 'all'){
           return view('admin.all-deposit');
      
       }
      
  
   }
   public function withdrawadmin(Request $request, $name)
      
   {
       if($name == 'active'){
           return view('admin.active-withdraw');
       }
   }
   public function investmentadmin(Request $request, $name)
      
   {
       if($name == 'active'){
           return view('admin.active-investment');
       }
       elseif($name == 'all'){
           return view('admin.all-investment');
      
       }
      
  
   }
   public function walletadmin(Request $request)
     { 
  
    return view('admin.wallet');
      
     }
     public function usersadmin(Request $request, $name)
      
   {
       if($name == 'customer'){
           return view('admin.customer');
       }
       elseif($name == 'admin'){
           return view('admin.admin');
      
       }
      
  
   }
   public function planadmin(Request $request)
     { 
  
    return view('admin.plan');
     }
 
     public function applicationadmin(Request $request)
     { 
  
    return view('admin.application');
     }
     public function profileadmin(Request $request)
     { 
  
    return view('admin.profile');
     }
 
     public function register(Request $request, $ref = null)
         {
 
            if ($request->method() == "GET") {
                 if(!empty($request->user()->id)){ return redirect()->route('user.login');}
                 return view("auth.register",["ref"=>$ref]);
             }
             $data = (object) $request->all();
             $data ->status = 1;
            
             $validated =  $request->validate([
                 "firstname" => ["required"],
                 "lastname" => ["required"],
                 "username" =>["required", "unique:users,username"],
                 "email" => ["required", "unique:users,email"],
                 "referral" => ["nullable", "exists:users,username"],
                 "phone" => ["required", "unique:users,phone"],
                 "password" =>["required", "between:6,15", "confirmed"],
                 "password_confirmation" => ["required"],
                 "country" => ["required"],
                 "pin" => ["required", "digits:6", "numeric"],  
             ]);
 
 
            $user =  User::create([
                   "firstname" => $data->firstname,
                   "lastname" => $data->lastname,
                   "username" => $data->username,
                   "email" => $data->email,
                   "phone" => $data->phone,
                   "country" => $data->country,
                   "referral" => $data->referral,
                   "password" => Hash::make($data->password),
                   "pin"=> $data->pin,
                   'status' => 1,
               ]);
 
            if (!empty($user)) {
                       Account::create([
                           "user_id" => $user->id,
   
                           "bitcoin_address" => "0000000000",
                           "usdt_address" => "0000000000",
                           "ethereum_address" => "0000000000",
                           "litecoin_address" => "0000000000",
                           "bitcoincash_address" => "0000000000",
                           "binancecoin_address" =>"0000000000",
                           "dodgecoin_address" => "0000000000",
                      ]);
                       return  redirect()->route('user.login');
                   } else {
                       return abort(500, "Server Error");
                   }




                   
      
 
                                     
 
    }
    public function userlogin(Request $request)
    {


        if ($request->method() == "GET") {
            if(!empty($request->user()->id)){ return redirect()->route('user.dashboard.view');} 

            return view("auth.login");
        }
        $data = (object) $request->all();


        $validated =  $request->validate([
            "email" => ["required"],
            "password" => ["required"]
        ]);

        $user = User::where("email", "=", "{$data->email}")->get()->first();
        if ($user && Hash::check($data->password, $user->password)) {
            if ($user->status != 1) {
                return view("auth.login", ["noMatch"=>"Your account has been suspended by the administration, please report to ".config("app.email")]);
            }
            Auth::loginUsingId($user->id);
            $route = ($user->role  == 1) ? "admin.dashboard.view" : "user.dashboard.view";
            return redirect()->route($route);
        } else {
            return view("auth.login", ["noMatch"=>"Invalid Login Detail"]);
        }
    }
}