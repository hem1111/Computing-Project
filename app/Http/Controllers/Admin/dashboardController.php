<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class dashboardController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admins');
    }

    public function index(){

        $data['categories'] = Category::select('id','image', 'category_name')
            ->where('status','1')
            ->get();

        $data['rows'] =Product::select('id','product_name','price','quantity_size','image',
            'category_id','status','created_at')
            ->orderBy('created_at', 'desc')
            ->limit(9)
            ->get();

        return view('admin.index',compact('data'));
    }

    public  function categoryProduct($id){
        $data=[];
        $data['category']=Category::find($id);

        $data['rows'] =Product::select('product.id','category.category_name as category','product_name','price','quantity_size','product.image',
            'category_id','product.status','created_at')
            ->join('category','category.id','=','product.category_id')
            ->orderBy('created_at', 'desc')
            ->where('product.category_id',$data['category']->id)
            ->get();

        return view('admin.product.categoryProduct',compact('data'));

    }

}
