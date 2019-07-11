<?php

namespace App\Http\Controllers;

use DB;
use App\Registers;
use Illuminate\Http\Request;

class RegistersController extends Controller
{
    public function index(){
        $reg = Registers::all();
        return view('registration',['reg'=>$reg]);
    }
    public function store(Request $request){
    	$register = new Registers;
    	$register->Name = $request->name;
    	$register->Address = $request->address;
    	$register->Number = $request->number;
    	$register->Email = $request->email;
    	$register->Password = $request->password;
    	$register->ImageFile = $request->file;

    	$register->save();
    	return redirect('registration')->with('message','Registration Successfully'); 
    }
}