<?php

namespace App\Http\Controllers;

use DB;
use App\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(){
        $message = Messages::all();
        return view('messages',['msg'=>$message]);
    }
    public function store(Request $request){
    	$msg = new Messages;
    	$msg->FisrtName = $request->fname;
    	$msg->LastName = $request->lname;
    	$msg->Email = $request->email;
    	$msg->Message = $request->message;

    	$msg->save();
    	return redirect()->back();
    }   
    public function delete($userId){
        DB::table('messages')->where('ID', '=',$userId)->delete();
        return redirect('messages')->with('message','Deleted successfully');
    }
    public function search(Request $request){
        $query = $request->get('search');
        $message = DB::table('messages')
         ->where('ID', 'like', '%'.$query.'%')
         ->orwhere('FisrtName', 'like', '%'.$query.'%')
         ->orWhere('LastName', 'like', '%'.$query.'%')
         ->orWhere('Email', 'like', '%'.$query.'%')
         ->orWhere('Message', 'like', '%'.$query.'%')
         ->orderBy('ID', 'asc')
         ->get();
        return view('messages',['msg'=>$message]);
    }
}
