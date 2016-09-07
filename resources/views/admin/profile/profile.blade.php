@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Profile</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li><a>Extra Pages</a></li>
			<li class="active"><strong>Profile</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content">
	<div class="row animated fadeInRight">
		<div class="col-md-4">
			<div class="ibox float-e-margins">
				<div class="ibox-title"><h5>Profile Detail</h5></div>
					<div>
						<div class="ibox-content no-padding border-left-right"><img alt="image" class="img-responsive" src="{{asset('/assets/img/profile_big.jpg')}}"></div>
							<div class="ibox-content profile-content">
								@foreach($profile as $value)
								<h4><strong>{{ $value->user_name }} {{ $value->user_surname }}</strong></h4>
								<p><i class="fa fa-map-marker"></i> {{ $value->user_address }}</p>
								<h5>About me</h5>
								<p>{{ $value->user_aboutme }}</p>
								<div class="row m-t-lg">
									<div class="col-md-4">
										<span class="bar">5,3,9,6,5,9,7,3,5,2</span>
										<h5><strong>169</strong> Posts</h5>
									</div>
									<div class="col-md-4">
										<span class="line">5,3,9,6,5,9,7,3,5,2</span>
										<h5><strong>28</strong> Following</h5>
									</div>
									<div class="col-md-4">
										<span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span>
										<h5><strong>240</strong> Followers</h5>
									</div>
								</div>
								@endforeach
								<div class="user-button">
									<div class="row">
										<div class="col-md-6">
											<button type="button" class="btn btn-primary btn-sm btn-block" onclick="edit();"><i class="fa fa-heart"></i> Edit Profile</button>
										</div>
										<div class="col-md-6">
											<button type="button" class="btn btn-default btn-sm btn-block" onclick="change();"><i class="fa fa-heart"></i> Change Password</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="ibox-title">
						<h5>Small todo list</h5>
						<div class="ibox-tools">
							<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							<a class="close-link"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="ibox-content">
						<ul class="todo-list m-t small-list">
							<!-- <li>
								<a href="#" class="check-link"><i class="fa fa-check-square"></i></a>
								<span class="m-l-xs todo-completed">Buy a milk</span>
							</li>
							<li>
								<a href="#" class="check-link"><i class="fa fa-square-o"></i></a>
								<span class="m-l-xs">Go to shop and find some products.</span>
							</li>
							<li>
								<a href="#" class="check-link"><i class="fa fa-square-o"></i></a>
								<span class="m-l-xs">Send documents to Mike</span>
								<small class="label label-primary"><i class="fa fa-clock-o"></i> 1 mins</small>
							</li>
							<li>
								<a href="#" class="check-link"><i class="fa fa-square-o"></i></a>
								<span class="m-l-xs">Go to the doctor dr Smith</span>
							</li>
							<li>
								<a href="#" class="check-link"><i class="fa fa-check-square"></i></a>
								<span class="m-l-xs todo-completed">Plan vacation</span>
							</li>
							<li>
								<a href="#" class="check-link"><i class="fa fa-square-o"></i></a>
								<span class="m-l-xs">Create new stuff</span>
							</li> -->
							@foreach($dolist as $value)
							<li>
								<a href="#" class="check-link"><i class="fa fa-square-o"></i></a>
								<span class="m-l-xs">{{ $value->dolist_name }}</span>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="col-md-8">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>Activites</h5>
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
							<div>
								<div class="feed-activity-list">
									<div class="feed-element">
										<a href="#" class="pull-left"><img alt="image" class="img-circle" src="{{asset('/assets/img/a1.jpg')}}"></a>
										<div class="media-body ">
											<small class="pull-right text-navy">1m ago</small>
											<strong>Sandra Momot</strong> started following <strong>Monica Smith</strong>. <br>
											<small class="text-muted">Today 4:21 pm - 12.06.2014</small>
											<div class="actions">
												<a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
												<a class="btn btn-xs btn-danger"><i class="fa fa-heart"></i> Love</a>
											</div>
										</div>
									</div>
									<div class="feed-element">
										<a href="#" class="pull-left"><img alt="image" class="img-circle" src="{{asset('/assets/img/profile.jpg')}}"></a>
										<div class="media-body ">
											<small class="pull-right">5m ago</small>
											<strong>Monica Smith</strong> posted a new blog. <br>
											<small class="text-muted">Today 5:60 pm - 12.06.2014</small>
										</div>
									</div>
									<div class="feed-element">
										<a href="#" class="pull-left"><img alt="image" class="img-circle" src="{{asset('/assets/img/a2.jpg')}}"></a>
										<div class="media-body ">
											<small class="pull-right">2h ago</small>
											<strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
											<small class="text-muted">Today 2:10 pm - 12.06.2014</small>
											<div class="well">
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
												Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
											</div>
											<div class="pull-right">
												<a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
												<a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
												<a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
											</div>
										</div>
									</div>
									<div class="feed-element">
										<a href="#" class="pull-left"><img alt="image" class="img-circle" src="{{asset('/assets/img/a3.jpg')}}"></a>
										<div class="media-body ">
											<small class="pull-right">2h ago</small>
											<strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>
											<small class="text-muted">2 days ago at 8:30am</small>
											<div class="photos">
												<a target="_blank" href="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg"> 
													<img alt="image" class="feed-photo" src="{{asset('/assets/img/p1.jpg')}}">
												</a>
												<a target="_blank" href="http://37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg"> 
													<img alt="image" class="feed-photo" src="{{asset('/assets/img/p3.jpg')}}">
												</a>
											</div>
									</div>
								</div>
								<div class="feed-element">
									<a href="#" class="pull-left"><img alt="image" class="img-circle" src="{{asset('/assets/img/a4.jpg')}}"></a>
									<div class="media-body ">
										<small class="pull-right text-navy">5h ago</small>
										<strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
										<small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
										<div class="actions">
											<a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
											<a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
										</div>
									</div>
								</div>
								<div class="feed-element">
									<a href="#" class="pull-left"><img alt="image" class="img-circle" src="{{asset('/assets/img/a5.jpg')}}"></a>
									<div class="media-body ">
										<small class="pull-right">2h ago</small>
										<strong>Kim Smith</strong> posted message on <strong>Monica Smith</strong> site. <br>
										<small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
										<div class="well">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
											Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
										</div>
										<div class="pull-right"><a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a></div>
									</div>
								</div>
								<div class="feed-element">
									<a href="#" class="pull-left"><img alt="image" class="img-circle" src="{{asset('/assets/img/profile.jpg')}}"></a>
									<div class="media-body ">
										<small class="pull-right">23h ago</small>
										<strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
										<small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
									</div>
								</div>
								<div class="feed-element">
									<a href="#" class="pull-left"><img alt="image" class="img-circle" src="{{asset('/assets/img/a7.jpg')}}"></a>
									<div class="media-body ">
										<small class="pull-right">46h ago</small>
										<strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
										<small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
									</div>
								</div>
							</div>
							<button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@include('admin.layout.inc-footer')
@stop

@section('js')
<script>
	function edit() {		
		window.location.href = "{{ URL::to('admin/profile/edit') }}";
	}
	function change() {
		window.location.href = "{{ URL::to('admin/profile/edit') }}";
	}
</script>
@stop