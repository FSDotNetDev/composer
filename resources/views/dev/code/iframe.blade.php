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
		<h2>iframe</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li>Code</li>
			<li class="active"><strong>iframe</strong></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="ibox-content p-xl">
				<div class="row">
					<iframe scrolling="no" width="100%" height="600px" src="{{asset('media/flipbook/index.html')}}" border="0"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
@include('dev.layout.inc-footer')
@stop

@section('js')

@stop