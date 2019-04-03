<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;




class productsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * 
     * @return array
     */
    public function rules()
    {
        return [
            'name'        =>'required|unique:products,name',
            'code'        => 'required',
            'image'       => 'required|image',
            'price'       => 'required|numeric',
            'oldprice'    => 'required|numeric',
            'cate_id'     =>'required|numeric'
        ];
    }

    public function messages (){
        return[
            'name.required'           =>'Vui lòng nhập tên sản phẩm !',
            'name.unique'             =>'Tên sản phẩm đã tồn tại !',
            'code.required'           =>'Vui lòng nhập code của sản phẩm !' ,
            'image.required'          =>'Vui lòng chọn ảnh cho sản phẩm !',
            'image.image'             =>'Hình ảnh không đúng định dạng !',
            'price.required'          =>'Vui lòng nhập giá sản phẩm !',
            'price.numeric'           =>'Giá phải là số!',
            'oldprice.required'       =>'Vui lòng nhập giá cũ của sản phẩm !',
            'oldprice.numeric'        =>' Giá phải là số !',
            'cate_id.required'        =>'Vui lòng chọn danh mục !',
        ];
    }
}
