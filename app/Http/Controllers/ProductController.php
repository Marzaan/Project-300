<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    public function index(){
        $regAd = Products::all();
        return view('product',['ad'=>$regAd]);
    }
    public function index2(){
        $regAd = Products::all();
        return view('index',['ad'=>$regAd]);
    }
    public function search(Request $request){
        $query = $request->get('search');
        $regAd = DB::table('products')
         ->Where('ProductName', 'like', '%'.$query.'%')
         ->orWhere('Price', 'like', '%'.$query.'%')
         ->orWhere('Description', 'like', '%'.$query.'%')
         ->orderBy('Serial', 'asc')
         ->get();
        return view('product',['ad'=>$regAd]);
    }
    public function sort(Request $request){
       $regAd = DB::table('products')->orderBy('Price','asc')->get();
       return view('product',['ad'=>$regAd]);
    }
    public function fruits(Request $request){
       $regAd = DB::table('products')->where('Selected', '=',0)->orderBy('Price','asc')->get();
       return view('product',['ad'=>$regAd]);
    }
    public function vegetables(Request $request){
       $regAd = DB::table('products')->where('Selected', '=',1)->orderBy('Price','asc')->get();
       return view('product',['ad'=>$regAd]);
    }
    public function store(Request $request){

        $product = new Products;
        $product->UserID = $request->userid;
        $product->UserName = $request->username;
        $product->ProductName = $request->productname;
        $product->Selected = $request->producttype;
        $product->Price = $request->price;
        $product->Description = $request->description;
        $product->Mobile = $request->number;
        $product->Image = $request->file;

        $product->save();
        return redirect('addproduct')->with('message','Product Uploaded Successfully');
    }
}
