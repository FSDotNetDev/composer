@extends('dev.layout.template')
@section('css')
<link href="{{asset('/js/testimonial/css/reset.css')}}" rel="stylesheet">
<link href="{{asset('/js/testimonial/css/style.css')}}" rel="stylesheet">
<script type="text/javascript" src="{{asset('/js/testimonial/js/modernizr.js')}}"></script>
@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-8">
		<h2>ADODB</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li>JS</li>
			<li class="active"><strong>ADODB</strong></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="ibox-content p-xl">
				<div class="row">
					<a href="{{ URL::to('http://adodb.org/dokuwiki/doku.php') }}" target="_blank">Download on Github</a>
					<a href="{{ URL::to('http://www.thaibeginner.com/php-adodb-class-%E0%B8%AA%E0%B8%B3%E0%B8%AB%E0%B8%A3%E0%B8%B1%E0%B8%9A-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%95%E0%B8%B4%E0%B8%94%E0%B8%95%E0%B9%88%E0%B8%AD-database-%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%9C/') }}">Learn</a>
				</div>
			</div>
		</div>
	</div>
</div>
@include('dev.layout.inc-footer')
@stop

@section('js')

@stop