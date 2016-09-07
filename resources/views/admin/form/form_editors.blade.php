@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Text Editor</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li><a>Forms</a></li>
			<li class="active"><strong>Text Editor</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Wyswig Summernote Editor</h5>
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
				<div class="ibox-content no-padding">
					<div class="summernote">
						<h3>Lorem Ipsum is simply</h3>
						dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
						when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
						typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
						<br/><br/>
						<ul>
							<li>Remaining essentially unchanged</li>
							<li>Make a type specimen book</li>
							<li>Unknown printer</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<h2>Summernote</h2>
					<p>Super Simple WYSIWYG Editor on Bootstrap</p>
					<div class="alert alert-warning">
						Full documentation for Summernote.js, including examples and API calls, keybored shortcuts, PHP Examples, Django installation, and Rails (gem) integration can be found at:
						<a href="http://hackerwins.github.io/summernote/features.html#api">http://hackerwins.github.io/summernote/features.html#api</a>
						<!--<div class="summernote">summernote 2</div>-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Example of Edit by click and save as a html</h5>
					<button id="edit" class="btn btn-primary btn-xs m-l-sm" onclick="edit()" type="button">Edit</button>
					<button id="save" class="btn btn-primary  btn-xs" onclick="save()" type="button">Save</button>
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
				<div class="ibox-content no-padding">
					<div class="click2edit wrapper p-md">
						<h3>Lorem Ipsum is simply</h3>
						dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
						when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
						typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
						<br/><br/>
						<ul>
							<li>Remaining essentially unchanged</li>
							<li>Make a type specimen book</li>
							<li>Unknown printer</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('admin.layout.inc-footer')
@stop

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		$('.summernote').summernote();
   });
	var edit = function() {
		$('.click2edit').summernote({focus: true});
	};
	var save = function() {
		var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
		$('.click2edit').destroy();
	};
</script>
@stop