<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sửa sản phẩm  </title>
    <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
</head>
<body>
    <div class="container">
        <center><h1>Update products</h1></center>
        <!-- Display error -->
        @if($errors->any())
            <div class="alert alert-danger">
             
                @foreach ($errors->all() as $error)
                     {!! $error !!}</br>
                @endforeach
             
            </div>
        @endif
        <!-- //Display error -->
        <form method="post" action="{{URL::action('productController@edit',$product->id)}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="{!! old ('name',isset($product)?$product['name']:NULL) !!}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">code:</label>
                    <input type="text" class="form-control" name="code" value="{!! old ('code',isset($product)?$product['code']:NULL) !!}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="image">Image:</label>
                    <input type="file" name="image" value="{!! isset($product)?$product['image']:NULL !!}">
                    <img src="{!! asset('public/backend/images/'.$product['image']) !!}" width="100">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" name="price" value="{!! old ('price',isset($product)?$product['price']:NULL) !!}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="price">Old Price:</label>
                    <input type="text" class="form-control" name="oldprice" value="{!! old ('oldprice',isset($product)?$product['oldprice']:NULL) !!}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Danh mục:</label>
                    <select class="form-control" name="cate_id" id="cate_id">
                        <option>Mời bạn chọn</option>
                         
                        @foreach($cate as $cat)
                            <option value="{!! $cat['id'] !!}" {!! $cat['id'] == $product['cate_id']?'selected' : '' !!}>-- {!! $cat['cat_name'] !!}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- button add -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" style="margin-left: 15px">Save</button>
                </div>
            </div>
            <!-- /butto add -->
        </form>
    </div>
</body>
</html>