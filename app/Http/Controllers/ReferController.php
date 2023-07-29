<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReferController extends Controller
{
    public function store(Request $request){

        $data = array('email' => $request->email);

        DB::table('referrals')->insert($data);

        $earning = count(DB::table('savings')->select('*')->get());

     

        if($earning > 0){
            $earning = DB::table('savings')->select('earning')->first(['earning'])->earning;

            $earning += 250;

            
            $data = array('earning' => $earning);
            DB::table('savings')->delete();
            DB::table('savings')->insert($data);
        }else{
            
            
            $data = array('earning' => 250);
            DB::table('savings')->delete();
            DB::table('savings')->insert($data);
        }

       return redirect('/');


    }

    public function show(){

        $earnings = DB::table('savings')->select('earning')->first(['earning'])->earning;
        $referrals = count(DB::table('referrals')->select('*')->get());
        
        return view('welcome', compact('earnings', 'referrals'));
      

    }
}
