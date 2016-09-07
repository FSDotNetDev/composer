@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>File upload</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li><a>Forms</a></li>
			<li class="active"><strong>File upload</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content animated fadeIn">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Dropzone Area</h5>
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
					<form id="my-awesome-dropzone" class="dropzone" action="#">
						<div class="dropzone-previews"></div>
						<button type="submit" class="btn btn-primary pull-right">Submit this form!</button>
					</form>
					<div>
						<div class="m text-right"><small>DropzoneJS is an open source library that provides drag'n'drop file uploads with image previews: <a href="https://github.com/enyo/dropzone" target="_blank">https://github.com/enyo/dropzone</a></small> </div>
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
		Dropzone.options.myAwesomeDropzone = {
			autoProcessQueue: false,
			uploadMultiple: true,
			parallelUploads: 100,
			maxFiles: 100,
			// Dropzone settings
			init: function() {
				var myDropzone = this;
				this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
					e.preventDefault();
					e.stopPropagation();
					myDropzone.processQueue();
				});
				this.on("sendingmultiple", function() {
				});
				this.on("successmultiple", function(files, response) {
				});
				this.on("errormultiple", function(files, response) {
				});
			}
		}
   });
</script>
@stop