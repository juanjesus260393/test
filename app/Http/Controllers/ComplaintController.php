<?php

namespace unitec\Http\Controllers;

use Illuminate\Http\Request;

use unitec\Http\Requests;
use unitec\Http\Requests\RegisterRequest;
use Mail;
use DB;
use Session;
use Redirect;
use unitec\Complaint;
use unitec\Http\Controllers\Controller;

class ComplaintController extends Controller
{

	
   public function getComplaints(){
   	  $complaints = \unitec\Complaint::all();
   	  return view('complaintoptions.complaint',compact('complaints'));
   }

     public function store(RegisterRequest $request)
    { 
       
       $name = $request['name'];
       $am = $request['am'];
       $ap = $request['ap'];
       $gen = $request['gen'];
       $edad = $request['edad'];
       $ec = $request['ec'];
       $email = $request['email'];
       $pass = $request['pass'];
       $inte = $request['inte'];
       $opcion = $request['opcion'];
       DB::insert('INSERT INTO registros(name, firtsname, lastname, gender, age, maritalstatus, email, pass,inte,opcion) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$name,$am,$ap,$gen,$edad,$ec,$email, $pass, $inte, $inte]);
       return redirect('/home')->with([ 'name' => $name ]);
    }


     public function create(RegisterRequest $request)
    { 
       $email = $request['email'];
       $pass = $request['pass'];
       $login = DB::table('registros')->where('email', $email)
                       ->orWhere('pass', $pass)
                       ->get();
      foreach ($login as $user)
      {
          $value = $user->name;
      }               
       return redirect('/home')->with([ 'name' => $value ]);
    }


}
