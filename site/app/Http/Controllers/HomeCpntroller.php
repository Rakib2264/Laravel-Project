<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\ServicesModel;

class HomeCpntroller extends Controller
{
   function HomeIndex(){


      // Ip Get
       $UserIP=$_SERVER['REMOTE_ADDR'];
       // Date Time
       date_default_timezone_set("Asia/Dhaka");
       $timeDate= date("Y-m-d h:i:sa");
       VisitorModel::insert(['ip_address'=>$UserIP,'visit_time'=>$timeDate]);

       $ServicesData=json_decode(ServicesModel::all());

       return view('Home',['ServicesData'=>$ServicesData]);

   }
}
