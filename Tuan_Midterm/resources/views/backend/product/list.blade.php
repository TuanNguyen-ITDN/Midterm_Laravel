<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Danh sách sản phẩm </title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('public/css/app.css')}}">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="bang">
					<div class="hoc">
					</br>
						<h2> Danh sách sản phẩm vừa nhập</h2> 
						<a href="{!! url('backend/product/listthum') !!}"><i class="fa fa-plus-circle"></i>&nbsp;<button type="button" class="btn btn-danger">Về trang chủ </button></a>&nbsp;&nbsp;</br></br>
					</div>
					
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>Id</th>
								<th>Tên sản phẩm</th>
								<th>Code</th>
								<th>Hình ảnh</th>
								<th>Giá sản phẩm</th>
								<th>Giá cũ sản phẩm</th>
								<th>Category</th>  
								<th >Thao tác</th>
							</tr>
						</thead>
						<tbody>
							@foreach($product as $value)
							<tr>
								<td> {!! $value["id"] !!} </td>
								<td>{!! $value["name"] !!}</td>
								<td>{!! $value["code"] !!}</td>
								<td>
									<img src="{!! asset('public/backend/images/'.$value["image"]) !!}" width="100" alt="{!! $value["name"] !!}">
								</td>
								<td>{!! $value["price"] !!}</td>
								<td>{!! $value["oldprice"] !!}</td>
								
								 
								<td> {!! $value["cate_id"] !!} </td>

								<td>
									<a href="{!! url('backend/product/add') !!}"><i class="fa fa-plus-circle"></i>&nbsp;Thêm</a>&nbsp;&nbsp;
									<a href="{!! url('backend/product/edit',$value["id"]) !!}"><i class="fa fa-pencil"></i>&nbsp;Sửa</a>&nbsp;&nbsp;
									<a href="{!! url('backend/product/delete',$value["id"]) !!}"><i class="fa fa-trash"></i>&nbsp;Xóa</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div><!-- /.bang -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</body>
</html>