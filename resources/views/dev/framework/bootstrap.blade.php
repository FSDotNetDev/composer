@extends('dev.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-sm-4">
		<h2>Bootstrap</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li>Framework</li>
			<li class="active"><strong>Bootstrap</strong></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="ibox-content p-xl">
				<div class="row">
					<div class="col-lg-12">
						<a href="{{ URL::to('https://github.com/akveo/blur-admin') }}">Download on Github</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('dev.layout.inc-footer')
@stop

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		$('#loading-example-btn').click(function () {
			btn = $(this);
			simpleLoad(btn, true)
			/*Ajax example
				$.ajax().always(function () {
					 simpleLoad($(this), false)
				});*/
			simpleLoad(btn, false)
		});
	});
	function simpleLoad(btn, state) {
		if (state) {
			btn.children().addClass('fa-spin');
			btn.contents().last().replaceWith(" Loading");
		} else {
			setTimeout(function () {
				btn.children().removeClass('fa-spin');
				btn.contents().last().replaceWith(" Refresh");
			}, 2000);
		}
	}
</script>
@stop