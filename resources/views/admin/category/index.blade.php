@extends('admin.layout.template')
@section('css')
<style>
	body.DTTT_Print { background: #fff; }
	.DTTT_Print #page-wrapper { margin: 0; background:#fff; }
	button.DTTT_button, div.DTTT_button, a.DTTT_button {
		border: 1px solid #e7eaec;
		background: #fff;
		color: #676a6c;
		box-shadow: none;
		padding: 6px 8px;
	}
	button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
		border: 1px solid #d2d2d2;
		background: #fff;
		color: #676a6c;
		box-shadow: none;
		padding: 6px 8px;
	}
	.dataTables_filter label { margin-right: 5px; }

	/* For the "inset" look only */

	/* ::-webkit-scrollbar {
			width: 12px;  for vertical scrollbars
			height: 12px; for horizontal scrollbars
	}
	::-webkit-scrollbar-track {
			background: #e6e6e6;
	}
	::-webkit-scrollbar-thumb {
			background: #1ab394;
	} */

	::-webkit-scrollbar{
	width: 10px;
}

::-webkit-scrollbar-track-piece{
	background-color: #FFF;
}

::-webkit-scrollbar-thumb{
	background-color: #CBCBCB;
	outline: 2px solid #FFF;
	outline-offset: -2px;
	border: .1px solid #B7B7B7;
}

::-webkit-scrollbar-thumb:hover{
	background-color: #909090;
}
</style>
@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Category</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li class="active"><strong>Category</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>หมวดหมู่</h5>
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
					<div>
						<a onclick="addRow();" class="btn btn-primary">Add</a>
					</div>
					<table class="table table-striped table-bordered table-hover dataTables-example" >
						<thead>
						<tr>
							<th>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="contact" name="type" onclick="checkall(this);">
									</label>
								</div>
							</th>
							<th>ID</th>
							<th>รูป</th>
							<th>ชื่อหมวดหมู่หนังสือ</th>
							<th>จำนวนหนังสือ</th>
							<th>อัพเดทโดย</th>
							<th>จัดการ</th>
						</tr>
						</thead>
						<tbody>
						@foreach($category as $key => $value)
						<tr class="gradeX">
							<td style="width:40px;"><input type="checkbox" name="chkDel[]" id="chkDel{{ $key + 1 }}" value="{{ $category[$key]['category_id'] }}"></td>
							<td style="width:40px;" align="center">{{ $category[$key]['category_id'] }}</td>
							<td align="center"><img src="{{ URL::asset('media/category') }}/{{ $category[$key]['category_image'] }}" alt="{{ $category[$key]['category_name'] }}" style="width:80px;"></td>
							<td>{{ $category[$key]['category_name'] }}</td>
							<td>{{ $category[$key]['book_count'] }}</td>
							<td>{{ $category[$key]['user_name'] }}</td>
							<td style="width:50px;" align="center">
								<a href="{{ URL::to('admin/category/detail') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
								<a onclick="editRow('{{ $category[$key]['category_id'] }}', '{{ $category[$key]['category_name'] }}', '{{ $category[$key]['category_surname'] }}')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								<a href="{{ URL::to('admin/category/delete') }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- set up the modal to start hidden and fade in and out -->
<div id="addModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- dialog body -->
			<div class="modal-body">
				<label>Add Category</label>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- dialog buttons -->
			<div class="modal-footer">
				<div class="row">
					<div class="col-md-12">
						<form class="form-horizontal" action="{{ URL::to('admin/category/add') }}" method="post">
							<div class="form-group"><p class="col-md-3 control-label">ชื่อหมวดหมู่</p>
								<div class="col-md-8"><input type="text" class="form-control" placeholder="นวนิยาย" name="name"></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">ชื่อภาษาอังกฤษ</p>
								<div class="col-md-8"><input type="text" class="form-control" placeholder="Novel" name="eng"></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label"></p>
								<div class="col-md-8">
									<div class="image-crop" style="display: none">
										<img src="{{asset('/assets/img/p3.jpg')}}">
									</div>
									<div class="img-preview img-preview-sm"></div>
								</div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">อัพโหลดรูปภาพ</p>
								<div class="col-md-3">
									<label title="Upload image file" for="inputImage" class="btn btn-info pull-left">
										<input type="file" accept="image/*" name="image" id="inputImage" class="hide">
										Browse
									</label>								
								</div>
							</div>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="text-right">
								<div class="form-group">
									<div class="col-md-11">
										<button type="reset" class="btn btn-default">Reset</button>
										<button type="submit" class="btn btn-info">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- set up the modal to start hidden and fade in and out -->
<div id="editModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- dialog body -->
			<div class="modal-body">
				<label>Edit Category</label>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- dialog buttons -->
			<div class="modal-footer">
				<div class="row">
					<div class="col-md-12">
						<form class="form-horizontal" action="{{ URL::to('admin/category/edit') }}" method="post">
							<div class="form-group"><p class="col-md-3 control-label">ชื่อหมวดหมู่</p>
								<div class="col-md-8"><input type="text" class="form-control" placeholder="นวนิยาย" name="name" id="name"></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">ชื่อภาษาอังกฤษ</p>
								<div class="col-md-8"><input type="text" class="form-control" placeholder="Novel" name="eng" id="eng"></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label"></p>
								<div class="col-md-8">
									<div class="image-crop" style="display: none">
										<img src="{{asset('/assets/img/p3.jpg')}}">
									</div>
									<div class="img-preview img-preview-sm"></div>
								</div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">อัพโหลดรูปภาพ</p>
								<div class="col-md-3">
									<label title="Upload image file" for="inputImage" class="btn btn-info pull-left">
										<input type="file" accept="image/*" name="image" id="inputImage" class="hide">
										Browse
									</label>								
								</div>
							</div>
							<input type="hidden" name="id" id="id">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="text-right">
								<div class="form-group">
									<div class="col-md-11">
										<button type="reset" class="btn btn-default">Reset</button>
										<button type="submit" class="btn btn-info">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('admin.layout.inc-footer')
@stop

@section('js')
<!-- Image Preview & Crop -->
<script>
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
<!-- Page-Level Scripts -->
<script>
	$(document).ready(function() {
		$('.dataTables-example').dataTable({
			responsive: true,
			"dom": 'T<"clear">lfrtip',
			"tableTools": {
				"sSwfPath": "{{ asset('assets/js/plugins/dataTables/swf/copy_csv_xls_pdf.swf') }}"
			}
		});
		/* Init DataTables */
		var oTable = $('#editable').dataTable();
	});
	function fnClickAddRow() {
		$('#editable').dataTable().fnAddData([
			"Custom row",
			"New row",
			"New row",
			"New row",
			"New row" 
		]);
	}
</script>
<!-- Row Check All -->
<script>
	function checkall(vol) {	
		var i = 1;
		for (i = 1; i <= 10; i++) {
			if (vol.checked == true) {				
				document.getElementById("chkDel" + i).checked = true;
			} else {
				document.getElementById("chkDel" + i).checked = false;				
			}
		}
	}
</script>
<!-- Bootbox Add New Row -->
<script>
	function addRow() {
		$("#addModal").modal({			// wire up the actual modal functionality and show the dialog
			"backdrop"  : "static",
			"keyboard"  : true,
			"show"      : true			// ensure the modal is shown immediately
		});
	}
</script>
<!-- Bootbox Edit Row -->
<script>
	function editRow(id, name, eng) {
		$("#id").val(id);
		$("#name").val(name);
		$("#eng").val(eng);
		$("#editModal").modal({			// wire up the actual modal functionality and show the dialog
			"backdrop"  : "static",
			"keyboard"  : true,
			"show"      : true			// ensure the modal is shown immediately
		});
	}
</script>
@stop