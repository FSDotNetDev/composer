@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-9">
		<h2>Event</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li class="active"><strong>Event</strong></li>
		</ol>
	</div>
</div>
<div class="wrapper wrapper-content">
	<div class="row">
		<div class="col-lg-5">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Image Event</h5>
					<div class="ibox-tools">
						<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#">Config option 1</a></li>
							<li><a href="#">Config option 2</a></li>
						</ul>
						<a class="close-link"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="ibox-content">
					<div class="carousel slide" id="carousel1">
						<div class="carousel-inner">
							<div class="item active"><img alt="image" class="img-responsive" src="{{asset('/assets/img/p_big3.jpg')}}"></div>
							<div class="item"><img alt="image" class="img-responsive" src="{{asset('/assets/img/p_big1.jpg')}}"></div>
							<div class="item"><img alt="image" class="img-responsive" src="{{asset('/assets/img/p_big2.jpg')}}"></div>
						</div>
						<a data-slide="prev" href="#carousel1" class="left carousel-control"><span class="icon-prev"></span></a>
						<a data-slide="next" href="#carousel1" class="right carousel-control"><span class="icon-next"></span></a>
					</div>
				</div>
			</div>
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Image Company</h5>
					<div class="ibox-tools">
						<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#">Config option 1</a></li>
							<li><a href="#">Config option 2</a></li>
						</ul>
						<a class="close-link"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="ibox-content">
					<div class="carousel slide" id="carousel1">
						<div class="carousel-inner">
							<div class="item active"><img alt="image" class="img-responsive" src="{{asset('/assets/img/p_big3.jpg')}}"></div>
							<div class="item"><img alt="image" class="img-responsive" src="{{asset('/assets/img/p_big1.jpg')}}"></div>
							<div class="item"><img alt="image" class="img-responsive" src="{{asset('/assets/img/p_big2.jpg')}}"></div>
						</div>
						<a data-slide="prev" href="#carousel1" class="left carousel-control"><span class="icon-prev"></span></a>
						<a data-slide="next" href="#carousel1" class="right carousel-control"><span class="icon-next"></span></a>
					</div>
				</div>
			</div>
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Image CSR</h5>
					<div class="ibox-tools">
						<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#">Config option 1</a></li>
							<li><a href="#">Config option 2</a></li>
						</ul>
						<a class="close-link"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="ibox-content">
					<div class="carousel slide" id="carousel1">
						<div class="carousel-inner">
							<div class="item active"><img alt="image" class="img-responsive" src="{{asset('/assets/img/p_big3.jpg')}}"></div>
							<div class="item"><img alt="image" class="img-responsive" src="{{asset('/assets/img/p_big1.jpg')}}"></div>
							<div class="item"><img alt="image" class="img-responsive" src="{{asset('/assets/img/p_big2.jpg')}}"></div>
						</div>
						<a data-slide="prev" href="#carousel1" class="left carousel-control"><span class="icon-prev"></span></a>
						<a data-slide="next" href="#carousel1" class="right carousel-control"><span class="icon-next"></span></a>
					</div>
				</div>
			</div>
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Image Employee</h5>
					<div class="ibox-tools">
						<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#">Config option 1</a></li>
							<li><a href="#">Config option 2</a></li>
						</ul>
						<a class="close-link"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="ibox-content">
					<div class="carousel slide" id="carousel1">
						<div class="carousel-inner">
							<div class="item active"><img alt="image" class="img-responsive" src="{{asset('/assets/img/p_big3.jpg')}}"></div>
							<div class="item"><img alt="image" class="img-responsive" src="{{asset('/assets/img/p_big1.jpg')}}"></div>
							<div class="item"><img alt="image" class="img-responsive" src="{{asset('/assets/img/p_big2.jpg')}}"></div>
						</div>
						<a data-slide="prev" href="#carousel1" class="left carousel-control"><span class="icon-prev"></span></a>
						<a data-slide="next" href="#carousel1" class="right carousel-control"><span class="icon-next"></span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-7">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Activity</h5>
					<div class="ibox-tools">
						<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#">Config option 1</a></li>
							<li><a href="#">Config option 2</a></li>
						</ul>
						<a class="close-link"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="ibox-content ">
					<div class="carousel slide" id="carousel2">
						<ol class="carousel-indicators">
							<li data-slide-to="0" data-target="#carousel2"  class="active"></li>
							<li data-slide-to="1" data-target="#carousel2"></li>
							<li data-slide-to="2" data-target="#carousel2" class=""></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img alt="image"  class="img-responsive" src="{{asset('/assets/img/p_big1.jpg')}}">
								<div class="carousel-caption"><p>This is simple caption 1</p></div>
							</div>
							<div class="item ">
								<img alt="image"  class="img-responsive" src="{{asset('/assets/img/p_big3.jpg')}}">
								<div class="carousel-caption"><p>This is simple caption 2</p></div>
							</div>
							<div class="item">
								<img alt="image"  class="img-responsive" src="{{asset('/assets/img/p_big2.jpg')}}">
								<div class="carousel-caption"><p>This is simple caption 3</p></div>
							</div>
						</div>
						<a data-slide="prev" href="#carousel2" class="left carousel-control"><span class="icon-prev"></span></a>
						<a data-slide="next" href="#carousel2" class="right carousel-control"><span class="icon-next"></span></a>
					</div>
				</div>
			</div>
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Animation and Caption</h5>
					<div class="ibox-tools">
						<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#">Config option 1</a></li>
							<li><a href="#">Config option 2</a></li>
						</ul>
						<a class="close-link"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="ibox-content ">
					<div class="carousel slide" id="carousel2">
						<ol class="carousel-indicators">
							<li data-slide-to="0" data-target="#carousel2"  class="active"></li>
							<li data-slide-to="1" data-target="#carousel2"></li>
							<li data-slide-to="2" data-target="#carousel2" class=""></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img alt="image"  class="img-responsive" src="{{asset('/assets/img/p_big1.jpg')}}">
								<div class="carousel-caption"><p>This is simple caption 1</p></div>
							</div>
							<div class="item ">
								<img alt="image"  class="img-responsive" src="{{asset('/assets/img/p_big3.jpg')}}">
								<div class="carousel-caption"><p>This is simple caption 2</p></div>
							</div>
							<div class="item">
								<img alt="image"  class="img-responsive" src="{{asset('/assets/img/p_big2.jpg')}}">
								<div class="carousel-caption"><p>This is simple caption 3</p></div>
							</div>
						</div>
						<a data-slide="prev" href="#carousel2" class="left carousel-control"><span class="icon-prev"></span></a>
						<a data-slide="next" href="#carousel2" class="right carousel-control"><span class="icon-next"></span></a>
					</div>
				</div>
			</div>
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Animation and Caption</h5>
					<div class="ibox-tools">
						<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#">Config option 1</a></li>
							<li><a href="#">Config option 2</a></li>
						</ul>
						<a class="close-link"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="ibox-content ">
					<div class="carousel slide" id="carousel2">
						<ol class="carousel-indicators">
							<li data-slide-to="0" data-target="#carousel2"  class="active"></li>
							<li data-slide-to="1" data-target="#carousel2"></li>
							<li data-slide-to="2" data-target="#carousel2" class=""></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img alt="image"  class="img-responsive" src="{{asset('/assets/img/p_big1.jpg')}}">
								<div class="carousel-caption"><p>This is simple caption 1</p></div>
							</div>
							<div class="item ">
								<img alt="image"  class="img-responsive" src="{{asset('/assets/img/p_big3.jpg')}}">
								<div class="carousel-caption"><p>This is simple caption 2</p></div>
							</div>
							<div class="item">
								<img alt="image"  class="img-responsive" src="{{asset('/assets/img/p_big2.jpg')}}">
								<div class="carousel-caption"><p>This is simple caption 3</p></div>
							</div>
						</div>
						<a data-slide="prev" href="#carousel2" class="left carousel-control"><span class="icon-prev"></span></a>
						<a data-slide="next" href="#carousel2" class="right carousel-control"><span class="icon-next"></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('admin.layout.inc-footer')
@stop