<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Request;
use App\product;
use App\category;
use Auth;
use App\Http\Requests\productsRequest;
use Input,File;
use DB;    
use Request;

class productController extends Controller
{

	// Hiển thị danh sách sản phẩm
	public function getList() {
		$product = product::select('id', 'name','code','image','price','oldprice','cate_id')->get()->toArray();
		return view('backend.product.list',compact('product'));
	}

	// Hiển thị danh sách sản phẩm thumbnail
	public function getthumbanail() {
		$product = product::select('id', 'name','code','image','price','oldprice','cate_id')->where('cate_id','=',1)->get()->toArray();

		$product1 = product::select('id', 'name','code','image','price','oldprice','cate_id')->where('cate_id','=',2)->get()->toArray();
		return view('backend.product.listthum',compact('product','product1'));

		 
	}
 	 
	 

    // chạy đến file add trong folder view
	public function addProduct() {
		$category = category::select('id','cat_name','parent_id')->get()->toArray();
		return view('backend/product/add', compact('category'));
	}

    // Lấy dữ liệu vừa nhập và lưu lại
	public function postAdd(productsRequest $request) {
    	$product = new product; // ten model
    	$file_name = $request->file('image')->getClientOriginalName();
    	$product->name = $request->name;
    	$product->code = $request->code;
    	$product->image = $file_name; 
    	$product->price = $request->price; 
    	$product->oldprice = $request->oldprice;
    	$product->cate_id = $request->cate_id;
    	$request->file('image')->move('public/backend/images/',$file_name);
    	$product->save();
    	return redirect()->route('backend.product.getList')->with('success','Thêm sản phẩm thành công!'); 
    	 
    }

    // delete product follow id
	public function delete($id) {
		$product = product::find($id);
		File::delete('public/backend/images/'.$product->image);
		$product->delete($id);
		return back()->with('success','Xóa sản phẩm thành công!');
	}

	// Edit product follow id
	public function edit($id) {
		$cate = category::select('id', 'cat_name','parent_id')->get()->toArray();
		$product = product::find($id);
		$product_img = product::findOrFail($id)->get()->toArray();
		return view('backend.product.edit',compact('cate','product','product_img'));
	}

	public function postEdit($id,Request $request) {
		$product = product::find($id);
		$img_current = 'public/backend/images/'. Request::input('img_current');
		$product->name = Request::input('name');
		$product->code = Request::input('code');
		if(!empty(Request::file('image')))
		{
			$file_name = Request::file('image')->getClientOriginalName();
			$product->image = $file_name;
			Request::file('image')->move('public/backend/images/',$file_name);
			if(File::exists($img_current))
			{
				File::delete($img_current);
			}
		}
		$product->price = Request::input('price');
		$product->cate_id = Request::input('cate_id');
		
		$product->save();
		return redirect()->route('backend.product.getList')->with('success','Sửa sản phẩm thành công!');
	}
}
