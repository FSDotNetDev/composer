@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-9">
		<h2>Contacts</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li>App Views</li>
			<li class="active"><strong>Contacts</strong></li>
		</ol>
	</div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		@foreach($contact as $value)
		<div class="col-lg-4">
			<div class="contact-box">
				<a href="profile">
					<div class="col-sm-4">
						<div class="text-center">
							<img alt="image" class="img-circle m-t-xs img-responsive" src="{{asset($value->user_image)}}">
							<div class="m-t-xs font-bold">{{ $value->authority_name }}</div>
						</div>
					</div>
					<div class="col-sm-8">
						<h3><strong>{{ $value->user_name }} {{ $value->user_surname }}</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>CodeInsane, Inc.</strong><br>
							{{ $value->user_address }} <br>
							<!-- 795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br> -->
							<abbr title="Phone">P:</abbr> {{ $value->user_phone }}
						</address>
					</div>
					<div class="clearfix"></div>
				</a>
			</div>
		</div>
		@endforeach
		@foreach($contact as $value)
		<div class="col-lg-4">
			<div class="contact-box">
				<a href="profile">
					<div class="col-sm-4">
						<div class="text-center">
							<img alt="image" class="img-circle m-t-xs img-responsive" src="{{asset($value->user_image)}}">
							<div class="m-t-xs font-bold">{{ $value->authority_name }}</div>
						</div>
					</div>
					<div class="col-sm-8">
						<h3><strong>{{ $value->user_name }} {{ $value->user_surname }}</strong></h3>
						<p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
						<address>
							<strong>CodeInsane, Inc.</strong><br>
							{{ $value->user_address }} <br>
							<!-- 795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br> -->
							<abbr title="Phone">P:</abbr> {{ $value->user_phone }}
						</address>
					</div>
					<div class="clearfix"></div>
				</a>
			</div>
		</div>
		@endforeach
	</div>
</div>
@include('admin.layout.inc-footer')
@stop

@section('js')
<script type="text/javascript">
	$(document).ready(function(){
		$('.contact-box').each(function() {
			animationHover(this, 'pulse');
		});
	});
</script>
@stop