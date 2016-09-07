@extends('dev.layout.template')
@section('css')
<link href="{{asset('/js/testimonial/css/reset.css')}}" rel="stylesheet">
<link href="{{asset('/js/testimonial/css/style.css')}}" rel="stylesheet">
<script type="text/javascript" src="{{asset('/js/testimonial/js/modernizr.js')}}"></script>
@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-8">
		<h2>Smarty</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li>JS</li>
			<li class="active"><strong>Smarty</strong></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="ibox-content p-xl">
				<div class="row">
					<a href="{{ URL::to('http://www.smarty.net/download') }}" target="_blank">Download on Github</a>
				</div>
			</div>
		</div>
	</div>
</div>
@include('dev.layout.inc-footer')
@stop

@section('js')

@stop