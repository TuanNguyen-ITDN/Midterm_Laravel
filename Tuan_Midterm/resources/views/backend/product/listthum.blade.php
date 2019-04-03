<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Danh sách sản phẩm </title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('public/css/app.css')}}">
	<style type="text/css">
		#css{
			text-align: center;
		}
		#mau{
			text-align: center;
			color: red;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="bang">
					<div class="hoc">
						</br></br><h2 style="text-align: center;color: red;">Danh sách sản phẩm vừa nhập </h2> </br>
					</div>
					<div class="row">
						<h3 style=" color:orange;">Thời trang nam</h3>
					</div>
					<div class="row">
					@foreach($product as $value)
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<div class="thumbnail">
								<img id="css" style="margin-left: 50px;" src="{!! asset('public/backend/images/'.$value["image"]) !!}"height="250"	 width="250" alt="{!! $value["name"] !!}"  alt="">
								<div class="caption">
									 
									<p id="css">{!! $value["name"] !!}</p> 
									<p id="css" > {!!$value["code"]!!}</p>
									<p id="mau">{!!$value["price"]!!}đ          <strike>{!!$value["oldprice"]!!} đ</strike> </p>
									 
									<p id="css">
										<button type="button"  onclick="xl()" class="btn btn-warning">Đặt mua</button>
									</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					  
					<div class="row">
						<h3  style=" color:orange;"> Thời trang Nữ</h3>
					</div>
					<div class="row">
					@foreach($product1 as $value)
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<div class="thumbnail">
								<img id="css" style="margin-left: 50px;" src="{!! asset('public/backend/images/'.$value["image"]) !!}"height="250"	 width="250" alt="{!! $value["name"] !!}"  alt="">
								<div class="caption">
									 
									<p id="css">{!! $value["name"] !!}</p> 
									<p id="css" > {!!$value["code"]!!}</p>
									<p id="mau">{!!$value["price"]!!}đ          <strike>{!!$value["oldprice"]!!} đ</strike> </p>
									 
									<p id="css">
										<button type="button"  onclick="xl()" class="btn btn-warning">Đặt mua</button>
									</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>	 
						
					 
				</div><!-- /.bang -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</body>
<script type="text/javascript">
	function xl(){
	 alert("Thank you for your order ");
}
</script>
</html>
