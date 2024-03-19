<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function asistenpage (){
        $asisten= User::all();       
        return view ('asisten.asistenpage',['asisten'=>$asisten]);
    }


}
