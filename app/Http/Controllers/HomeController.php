<?php

namespace App\Http\Controllers;

use DB;
use App\Registers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $registers = Registers::all();
        return view('home',['reg'=>$registers]);
    }
    public function edit($editId){
        $RegEdit = DB::table('registers')->where('Id', '=',$editId)->first();
        return view('registersEdit',['reg'=>$RegEdit]);
    }
    public function update(Request $request){

        $register = Registers::find($request->registerId);
        $register->Name = $request->name;
        $register->Address = $request->address;
        $register->Number = $request->number;
        $register->Email = $request->email;
        $register->Password = $request->password;
        $register->ImageFile = $request->file;
        $register->save();

        return redirect('home')->with('message','Updated Successfully');
    }
    public function delete($userId){
        DB::table('registers')->where('Id', '=',$userId)->delete();
        return redirect('home')->with('message','Deleted Successfully');
    }
    public function search(Request $request){
        $query = $request->get('search');
        $registers = DB::table('registers')
         ->where('Id', 'like', '%'.$query.'%')
         ->orwhere('Name', 'like', '%'.$query.'%')
         ->orWhere('Address', 'like', '%'.$query.'%')
         ->orWhere('Number', 'like', '%'.$query.'%')
         ->orWhere('Email', 'like', '%'.$query.'%')
         ->orderBy('Id', 'asc')
         ->get();
        return view('home',['reg'=>$registers]);
    }
}
