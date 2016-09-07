@extends('dev.layout.template')
@section('css')
<style type="text/css">
	body { padding: 0;margin: 0;}
	.read{ position: fixed; bottom: 0; width:100%; height: 100% !important; }
	iframe { margin:0 !important; padding:0; overflow:hidden;border: none;}
</style>
@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>barcode</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li>Code</li>
			<li class="active"><strong>barcode</strong></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="ibox-content p-xl">
				<div class="row">
					<a href="{{ URL::to('http://barcode-coder.com/en/barcode-php-class-203.html') }}" target="_blank">Download on Website</a>
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

@stop