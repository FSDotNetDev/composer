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
		<h2>Banner</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li class="active"><strong>Banner</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>แบนเนอร์</h5>
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
							<th>ชื่อแบนเนอร์</th>
							<th>ชื่อ title</th>
							<th>ลิงก์</th>
							<th>อัพเดทโดย</th>
							<th>จัดการ</th>
						</tr>
						</thead>
						<tbody>
						@foreach($banner as $key => $value)
						<tr class="gradeX">
							<td style="width:40px;"><input type="checkbox" name="chkDel[]" id="chkDel{{ $key + 1 }}" value="{{ $banner[$key]['banner_id'] }}"></td>
							<td style="width:40px;" align="center">{{ $banner[$key]['banner_id'] }}</td>
							<td align="center"><img src="{{ URL::asset('media/banner') }}/{{ $banner[$key]['banner_image'] }}" alt="{{ $banner[$key]['banner_name'] }}" style="width:80px;"></td>
							<td>{{ $banner[$key]['banner_name'] }}</td>
							<td>{{ $banner[$key]['banner_title'] }}</td>
							<td>{{ $banner[$key]['banner_link'] }}</td>
							<td>{{ $banner[$key]['user_name'] }}</td>
							<td style="width:50px;" align="center">
								<a href="{{ URL::to('admin/banner/detail') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
								<a onclick="editRow('{{ $banner[$key]['banner_name'] }}', '{{ $banner[$key]['banner_title'] }}', '{{ $banner[$key]['banner_link'] }}');"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								<a href="{{ URL::to('admin/banner/delete') }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
				<label>Add Banner</label>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- dialog buttons -->
			<div class="modal-footer">
				<div class="row">
					<div class="col-md-12">
						<form class="form-horizontal" action="{{ URL::to('admin/edit/book') }}" method="post">
							<div class="form-group"><p class="col-md-3 control-label">ชื่อแบนเนอร์</p>
								<div class="col-md-8"><input type="text" class="form-control" placeholder="Europe" name="name"></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">หัวข้อ</p>
								<div class="col-md-8"><textarea class="form-control" rows="3" placeholder="ท่องเที่ยวยุโรป เมืองในฝัน" name="title"></textarea></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">ลิงก์</p>
								<div class="col-md-8"><input type="text" class="form-control" placeholder="banner-2150" name="link"></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">อัพโหลดรูปภาพ</p>
								<div class="col-md-3">
									<label title="Upload image file" for="inputImage" class="btn btn-info pull-left">
										<input type="file" accept="image/*" name="file" id="inputImage" class="hide">
										Browse
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="text-right">
									<div class="col-md-11">
										<button type="reset" class="btn btn-white">Reset</button>
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
				<label>Edit Banner</label>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- dialog buttons -->
			<div class="modal-footer">
				<div class="row">
					<div class="col-md-12">
						<form class="form-horizontal" action="{{ URL::to('admin/edit/book') }}" method="post">
							<div class="form-group"><p class="col-md-3 control-label">ชื่อแบนเนอร์</p>
								<div class="col-md-8"><input type="text" class="form-control" placeholder="Europe" name="name" id="name"></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">หัวข้อ</p>
								<div class="col-md-8"><textarea class="form-control" rows="3" placeholder="ท่องเที่ยวยุโรป เมืองในฝัน" name="title" id="title"></textarea></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">ลิงก์</p>
								<div class="col-md-8"><input type="text" class="form-control" placeholder="banner-2150" name="link" id="link"></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">อัพโหลดรูปภาพ</p>
								<div class="col-md-3">
									<label title="Upload image file" for="inputImage" class="btn btn-info pull-left">
										<input type="file" accept="image/*" name="file" id="inputImage" class="hide">
										Browse
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="text-right">
									<div class="col-md-11">
										<button type="reset" class="btn btn-white">Reset</button>
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
<!-- Page-Level Scripts -->
<script>
	$(document).ready(function() {
		$('.dataTables-example').dataTable({
			responsive: true,
			"dom": 'T<"clear">lfrtip',
			"tableTools": {
				"sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
			}
		});
		/* Init DataTables */
		var oTable = $('#editable').dataTable();
		/* Apply the jEditable handlers to the table */
		oTable.$('td').editable( '../example_ajax.php', {
			"callback": function( sValue, y ) {
				var aPos = oTable.fnGetPosition( this );
				oTable.fnUpdate( sValue, aPos[0], aPos[1] );
			},
			"submitdata": function ( value, settings ) {
				return {
					"row_id": this.parentNode.getAttribute('id'),
					"column": oTable.fnGetPosition( this )[2]
				};
			},
			"width": "90%",
			"height": "100%"
		} );
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
	function editRow(name, title, link) {
		$('#name').val(name);
		$('#title').val(title);
		$('#link').val(link);
		$("#editModal").modal({			// wire up the actual modal functionality and show the dialog
			"backdrop"  : "static",
			"keyboard"  : true,
			"show"      : true			// ensure the modal is shown immediately
		});
	}
</script>
<!-- Confirm Delete -->
<script>
	$("a").click(function(event) {
		window.confirm("Do you really want to leave?")
	});
</script> 
@stop