@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Edit Profile</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li><a href="profile">Profile</a></li>
			<li class="active"><strong>Edit</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-5">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Change Password</h5>
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
					<form class="form-horizontal m-t-md" action="{{ URL::to('admin/edit/password') }}" method="post">
						<div class="form-group">
							<label class="font-noraml">รหัสผ่านเดิม</label>
							<input type="password" class="form-control" placeholder="" name="password_old">
						</div>
						<div class="form-group">
							<label class="font-noraml">รหัสผ่านเใหม่</label>
							<input type="password" class="form-control" placeholder="" name="password_new">
						</div>
						<div class="form-group">
							<label class="font-noraml">ยืนยันรหัสผ่าน</label>
							<input type="password" class="form-control" placeholder="" name="password_check">
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<button class="btn btn-white" type="submit">Cancel</button>
							<button class="btn btn-primary" type="submit">Save changes</button>
						</div>
					</form>				
				</div>
			</div>
		</div>
		<div class="col-lg-7">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Edit Profile</h5>
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
					<form class="form-horizontal m-t-md" action="#">
						<div class="form-group">
							<label class="col-sm-2 control-label">ชื่อ</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="" name="user_name">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">นามสกุล</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="" name="user_lastname">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">เพศ</label>
							<div class="col-sm-10">
								<div class="checkbox i-checks"><input type="radio" checked="" value="M" name="sex"> ชาย</label></div>
								<div class="checkbox i-checks"><input type="radio" value="F" name="sex"> หญิง</label></div>
							</div>
						</div>
						<div class="form-group" id="data_1">
							<label class="col-sm-2 control-label">วันเเกิด</label>
							<div class="col-sm-10">
								<div class="input-group date">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<input type="text" class="form-control" value="03/04/2014" name="user_birthday">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">ที่อยู่</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="" name="user_address">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">อธิบาย</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="" name="user_aboutme">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">อีเมล์</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="" name="user_email">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">เบอร์มือถือ</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" data-mask="(099) 999-9999" placeholder="" name="user_phone">
								<span class="help-block">(999) 999-9999</span>
							</div>
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="hr-line-dashed"></div>
						<div class="form-group">
							<div class="col-sm-10">
								<button class="btn btn-white" type="submit">Cancel</button>
								<button class="btn btn-primary" type="submit">Save changes</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title  back-change">
					<h5>Image cropper <small>http://fengyuanchen.github.io/cropper/</small></h5>
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
					<p>A simple jQuery image cropping plugin.</p>
					<div class="row">
						<div class="col-md-6">
							<div class="image-crop"><img src="{{asset('/assets/img/p3.jpg')}}"></div>
						</div>
						<div class="col-md-6">
							<h4>Preview image</h4>
							<div class="img-preview img-preview-sm"></div>
							<h4>Comon method</h4>
							<p>You can upload new image to crop container and easy download new cropped image.</p>
							<div class="btn-group">
								<label title="Upload image file" for="inputImage" class="btn btn-primary">
									<input type="file" accept="image/*" name="file" id="inputImage" class="hide">
									Upload new image
								</label>
								<label title="Donload image" id="download" class="btn btn-primary">Download</label>
							</div>
							<h4>Other method</h4>
							<p>You may set cropper options with <code>$({image}).cropper(options)</code></p>
							<div class="btn-group">
								<button class="btn btn-white" id="zoomIn" type="button">Zoom In</button>
								<button class="btn btn-white" id="zoomOut" type="button">Zoom Out</button>
								<button class="btn btn-white" id="rotateLeft" type="button">Rotate Left</button>
								<button class="btn btn-white" id="rotateRight" type="button">Rotate Right</button>
								<button class="btn btn-warning" id="setDrag" type="button">New crop</button>
							</div>
						</div>
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
		var $image = $(".image-crop > img")
		$($image).cropper({
			aspectRatio: 1.618,
			preview: ".img-preview",
			done: function(data) {
				// Output the result data for cropping image.
			}
		});
		var $inputImage = $("#inputImage");
		if (window.FileReader) {
			$inputImage.change(function() {
				var fileReader = new FileReader(),
					files = this.files,
					file;
				if (!files.length) {
					return;
				}
				file = files[0];
				if (/^image\/\w+$/.test(file.type)) {
					fileReader.readAsDataURL(file);
					fileReader.onload = function () {
						$inputImage.val("");
						$image.cropper("reset", true).cropper("replace", this.result);
					};
				} else {
					showMessage("Please choose an image file.");
				}
			});
		} else {
			$inputImage.addClass("hide");
		}
		$("#download").click(function() {
			window.open($image.cropper("getDataURL"));
		});
		$("#zoomIn").click(function() {
			$image.cropper("zoom", 0.1);
		});
		$("#zoomOut").click(function() {
			$image.cropper("zoom", -0.1);
		});
		$("#rotateLeft").click(function() {
			$image.cropper("rotate", 45);
		});
		$("#rotateRight").click(function() {
			$image.cropper("rotate", -45);
		});
		$("#setDrag").click(function() {
			$image.cropper("setDragMode", "crop");
		});
		$('#data_1 .input-group.date').datepicker({
			todayBtn: "linked",
			keyboardNavigation: false,
			forceParse: false,
			calendarWeeks: true,
			autoclose: true
		});
		$('#data_2 .input-group.date').datepicker({
			startView: 1,
			todayBtn: "linked",
			keyboardNavigation: false,
			forceParse: false,
			autoclose: true
		});
		$('#data_3 .input-group.date').datepicker({
			startView: 2,
			todayBtn: "linked",
			keyboardNavigation: false,
			forceParse: false,
			autoclose: true
		});
		$('#data_4 .input-group.date').datepicker({
			minViewMode: 1,
			keyboardNavigation: false,
			forceParse: false,
			autoclose: true,
			todayHighlight: true
		});
		$('#data_5 .input-daterange').datepicker({
			keyboardNavigation: false,
			forceParse: false,
			autoclose: true
		});
		var elem = document.querySelector('.js-switch');
		var switchery = new Switchery(elem, { color: '#1AB394' });
		var elem_2 = document.querySelector('.js-switch_2');
		var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });
		var elem_3 = document.querySelector('.js-switch_3');
		var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });
		$('.i-checks').iCheck({
			checkboxClass: 'icheckbox_square-green',
			radioClass: 'iradio_square-green',
		});
		$('.demo1').colorpicker();
		var divStyle = $('.back-change')[0].style;
		$('#demo_apidemo').colorpicker({
			color: divStyle.backgroundColor
		}).on('changeColor', function(ev) {
			divStyle.backgroundColor = ev.color.toHex();
		});
	});
	var config = {
		'.chosen-select'           : {},
		'.chosen-select-deselect'  : {allow_single_deselect:true},
		'.chosen-select-no-single' : {disable_search_threshold:10},
		'.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
		'.chosen-select-width'     : {width:"95%"}
	}
	for (var selector in config) {
		$(selector).chosen(config[selector]);
	}
	$("#ionrange_1").ionRangeSlider({
		min: 0,
		max: 5000,
		type: 'double',
		prefix: "$",
		maxPostfix: "+",
		prettify: false,
		hasGrid: true
	});
	$("#ionrange_2").ionRangeSlider({
		min: 0,
		max: 10,
		type: 'single',
		step: 0.1,
		postfix: " carats",
		prettify: false,
		hasGrid: true
	});
	$("#ionrange_3").ionRangeSlider({
		min: -50,
		max: 50,
		from: 0,
		postfix: "°",
		prettify: false,
		hasGrid: true
	});
	$("#ionrange_4").ionRangeSlider({
		values: [
			"January", "February", "March",
			"April", "May", "June",
			"July", "August", "September",
			"October", "November", "December"
		],
		type: 'single',
		hasGrid: true
	});
	$("#ionrange_5").ionRangeSlider({
		min: 10000,
		max: 100000,
		step: 100,
		postfix: " km",
		from: 55000,
		hideMinMax: true,
		hideFromTo: false
	});
	$(".dial").knob();
	$("#basic_slider").noUiSlider({
		start: 40,
		behaviour: 'tap',
		connect: 'upper',
		range: {
			'min':  20,
			'max':  80
		}
	});
	$("#range_slider").noUiSlider({
		start: [ 40, 60 ],
		behaviour: 'drag',
		connect: true,
		range: {
			'min':  20,
			'max':  80
		}
	});
	$("#drag-fixed").noUiSlider({
		start: [ 40, 60 ],
		behaviour: 'drag-fixed',
		connect: true,
		range: {
			'min':  20,
			'max':  80
		}
	});
</script>
@stop