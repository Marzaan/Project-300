<?php

namespace App\Http\Controllers;

use DB;
use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $regAd = Products::all();
        return view('products',['ad'=>$regAd]);
    }
    public function search(Request $request){
        $query = $request->get('search');
        $regAd = DB::table('products')
         ->where('UserID', 'like', '%'.$query.'%')
         ->orwhere('UserName', 'like', '%'.$query.'%')
         ->orWhere('ProductName', 'like', '%'.$query.'%')
         ->orWhere('Price', 'like', '%'.$query.'%')
         ->orWhere('Description', 'like', '%'.$query.'%')
         ->orWhere('Mobile', 'like', '%'.$query.'%')
         ->orderBy('Serial', 'asc')
         ->get();
        return view('products',['ad'=>$regAd]);
    }
    public function delete($userId){
        DB::table('products')->where('Serial', '=',$userId)->delete();
        return redirect('products')->with('message','Deleted Successfully');
    }
}

/*.... Ajax Searching......
    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('products')
         ->where('UserName', 'like', '%'.$query.'%')
         ->orWhere('ProductName', 'like', '%'.$query.'%')
         ->orWhere('Price', 'like', '%'.$query.'%')
         ->orWhere('Description', 'like', '%'.$query.'%')
         ->orWhere('Mobile', 'like', '%'.$query.'%')
         ->orderBy('Serial', 'asc')
         ->get();
      }
      else
      {
       $data = DB::table('products')
         ->orderBy('Serial', 'asc')
         ->get();
      }
      $total_row = $data->count();
      $i=0;
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.++$i.'</td>
         <td>'.$row->UserID.'</td>
         <td>'.$row->UserName.'</td>
         <td>'.$row->ProductName.'</td>
         <td>'.$row->Selected.'</td>
         <td>'.$row->Price.'</td>
         <td>'.$row->Description.'</td>
         <td>'.$row->Mobile.'</td>
         <td>'.$row->Image.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
      );

      echo json_encode($data);
     }
}
... End Function ...
<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('searchaction') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>
*/