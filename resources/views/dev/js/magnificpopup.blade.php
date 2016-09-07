@extends('dev.layout.template')
@section('css')

@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-8">
		<h2>Magnific Popup</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li>JS</li>
			<li class="active"><strong>Magnific Popup</strong></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="ibox-content p-xl">
				<div class="row">
					<a href="{{ URL::to('https://github.com/dimsemenov/Magnific-Popup') }}" target="_blank">Download on Github</a>
					<hr>
					
				</div>
			</div>
		</div>
	</div>
</div>
@include('dev.layout.inc-footer')
@stop

@section('js')
<script type="text/javascript" src="{{asset('/jquery/jquery.countdown.js')}}"></script>
<script type="text/javascript">
	/*$("#getting-started")
	.countdown("2017/01/01", function(event) {
		$(this).text(
			event.strftime('%D days %H:%M:%S')
		);
	});*/
</script>
@stop