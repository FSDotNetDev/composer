@extends('dev.layout.template')
@section('css')
<style type="text/css">
	#container_counter {
		margin: 50px auto;
		width: 700px;
		color: #555;
	}
	#countdown_dashboard {
		height: 110px;
	}
	.dash {
		width: 110px;
		height: 114px;
		background: transparent url('lwtcountdown/images/dash.png') 0 0 no-repeat;
		float: left;
		margin-left: 20px;
		position: relative;
	}
	.dash .digit {
		font-size: 55pt;
		font-weight: bold;
		float: left;
		width: 55px;
		text-align: center;
		font-family: Times;
		color: #555;
		position: relative;
	}
	.dash_title {
		position: absolute;
		display: block;
		bottom: 0px;
		right: 6px;
		font-size: 9pt;
		color: #555;
		text-transform: uppercase;
		letter-spacing: 2px;
	}
</style>
@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-8">
		<h2>jwtCountdown</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li>JS</li>
			<li class="active"><strong>jwtCountdown</strong></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="ibox-content p-xl">
				<div class="row">
					<a href="{{ URL::to('http://www.littlewebthings.com/projects/countdown/') }}" target="_blank">Download on Website</a>
					<hr>
					<div id="container_counter">
						<div id="countdown_dashboard">
							<div class="dash weeks_dash">
								<span class="dash_title">weeks</span>
								<div class="digit">0</div>
								<div class="digit">0</div>
							</div>
							<div class="dash days_dash">
								<span class="dash_title">days</span>
								<div class="digit">0</div>
								<div class="digit">0</div>
							</div>
							<div class="dash hours_dash">
								<span class="dash_title">hours</span>
								<div class="digit">0</div>
								<div class="digit">0</div>
							</div>
							<div class="dash minutes_dash">
								<span class="dash_title">minutes</span>
								<div class="digit">0</div>
								<div class="digit">0</div>
							</div>
							<div class="dash seconds_dash">
								<span class="dash_title">seconds</span>
								<div class="digit">0</div>
								<div class="digit">0</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('dev.layout.inc-footer')
@stop

@section('js')
<script type="text/javascript" src="{{asset('/jquery/jquery.jwtcountdown.js')}}"></script>
<script type="text/javascript">
$(function(){
	$('#countdown_dashboard').countDown({
		targetDate: {
			'day': 		1,
			'month': 	1,
			'year': 	2017,
			'hour': 	0,
			'min': 		0,
			'sec': 		0
			// time set as UTC
			// 'utc':      true				
		},
		// onComplete function
		onComplete: function() { 
		
		}			
	});
});
</script>
@stop