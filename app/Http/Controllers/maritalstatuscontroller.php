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


class maritalstatuscontroller extends Controller
{
	function index()
    {
   $country_list = DB::table('maritalstatus')
         ->orderBy('id')
         ->get();

     $gender_list = DB::table('gender')
         ->orderBy('id')
         ->get();
     return view('index')->with('status_list', $country_list)->with('gerder_list', $gender_list);
 }
}
