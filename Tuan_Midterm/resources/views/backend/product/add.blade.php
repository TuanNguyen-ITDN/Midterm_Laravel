<!DOCTYPE html>
<html>
<head>
	<title>Learning laravel with Tuan so cute</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('public/css/app.css')}}">
	<style type="text/css">
		#color{
			color: red;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		 </br> </br> <center><h2 class="page-header">Tuan_Midterm <!-- <small>&hearts; Add &hearts;</small>  --></h2></center> </br>
		<!-- Display error -->
		@if($errors->any())
            <div class="alert alert-danger">
            
                @foreach ($errors->all() as $error)
                     {!! $error !!} </br>
                @endforeach
              
            </div>
        @endif
		<form   action="{{ URL::action('productController@postAdd') }}" enctype="multipart/form-data" method="POST" role="form" class="form-horizontal registration-form" >
			{{ csrf_field() }}
			<input type="hidden" name="_token" value="{!! csrf_token() !!}" />

			<div class="row">
				<div class="  col-md-4  "></div>
				<div class="form-group col-md-4">
					<h4  id="color">Tên sản phẩm</h4> 
					<input type="text" class="form-control" name="name" placeholder="Enter product's name">
				</div>
			</div>
			<div class="row">
				<div class="  col-md-4  "></div>
				<div class="form-group col-md-4">
					<h4  id="color">Code sản phẩm</h4> 
					<input type="text" class="form-control" name="code" placeholder="Enter product's code">
				</div>
			</div>
			<div class="row">
				<div class="  col-md-4  "></div>
				<div class="form-group col-md-4">
					<h4  id="color">Hình ảnh</h4> 
					<input type="file"   name="image" >
				</div>
			</div>
			 
			<div class="row">
				<div class="  col-md-4  "></div>
				<div class="form-group col-md-4">
					<h4  id="color">Giá sản phẩm</h4> 
					<input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
				</div>
			</div>
			<div class="row">
				<div class="  col-md-4  "></div>
				<div class="form-group col-md-4">
					<h4  id="color">Giá cũ sản phẩm</h4> 
					<input type="text" class="form-control" id="oldprice" name="oldprice" placeholder="Enter old  price">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<h4  id="color">Danh Mục</h4> 
					<select class="form-control" name="cate_id" id="cate_id">
						<option value="">Mời bạn chọn:</option>
						<!-- $category trong hàm getAdd của file ProductsController -->
						@foreach($category as $cate)
						<option value="{!! $cate['id']!!}"> {!! $cate['cat_name'] !!}</option>
						@endforeach
					</select>
				</div>
			</div>
			<center>
				<button type="submit" class="btn btn-primary">OK</button>
				<button type="Reset" class="btn btn-danger">Nhập lại</button>
			</center>
		</form>

	</div>



	
	
	
</body>
</html>