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
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script> -->
<script>
	$( function() {
    	$("#date").datepicker();
  	});
</script>
@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>SMS</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li class="active"><strong>SMS</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>ข้อความ SMS</h5>
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
							<th>ข้อความ</th>
							<th>จำนวนตัวอักษร</th>
							<th>วันที่</th>
							<th>เวลา</th>
							<th>หนังสือ</th>
							<th>จัดการ</th>
						</tr>
						</thead>
						<tbody>
						@foreach($sms as $key => $value)
						<tr class="gradeX">
							<td style="width:40px;"><input type="checkbox" name="chkDel[]" id="chkDel{{ $key + 1 }}" value="{{ $sms[$key]['sms_id'] }}"></td>
							<td style="width:40px;" align="center">{{ $sms[$key]['sms_id'] }}</td>
							<td>{{ $sms[$key]['sms_detail'] }}</td>
							<td>{{ $sms[$key]['sms_length'] }}</td>
							<td>{{ $sms[$key]['sms_date'] }}</td>
							<td>{{ $sms[$key]['sms_time'] }}</td>
							<td>{{ $sms[$key]['book_name'] }}</td>
							<td style="width:50px;" align="center">
								<a href="{{ URL::to('admin/sms/detail') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
								<a onclick="editRow('{{ $sms[$key]['sms_detail'] }}', '{{ $sms[$key]['sms_length'] }}', '{{ $sms[$key]['sms_date'] }}', '{{ $sms[$key]['sms_time'] }}', '{{ $sms[$key]['book_name'] }}');"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								<a href="{{ URL::to('admin/sms/delete') }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
				<label>Add SMS</label>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- dialog buttons -->
			<div class="modal-footer">
				<div class="row">
					<div class="col-md-12">
						<form class="form-horizontal">
							<div class="form-group"><p class="col-md-3 control-label">ข้อความ</p>
								<div class="col-md-8"><textarea name="name" cols="10" rows="5" class="form-control" placeholder="หนังสือใหม่"></textarea></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">วันที่</p>
								<div class="col-md-8"><input type="text" class="form-control" placeholder="" name="date" id="date"></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">เวลา</p>
								<div class="col-md-8"><input type="text" class="form-control" placeholder="" name="time"></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">หนังสือ</p>
								<div class="col-md-8"><input type="text" class="form-control" placeholder="ALURE" name="book"></div>
							</div>
							<div class="form-group">      						
								<div class="text-right">
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
				<label>Edit SMS</label>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- dialog buttons -->
			<div class="modal-footer">
				<div class="row">
					<div class="col-md-12">
						<form class="form-horizontal">
							<div class="form-group"><p class="col-md-3 control-label">ข้อความ</p>
								<div class="col-md-8"><textarea name="name" id="name" cols="10" rows="5" class="form-control" placeholder="หนังสือใหม่"></textarea></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">วันที่</p>
								<div class="col-md-8"><input type="text" class="form-control" placeholder="" name="date" id="date"></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">เวลา</p>
								<div class="col-md-8"><input type="text" class="form-control" placeholder="" name="time" id="time"></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">หนังสือ</p>
								<div class="col-md-8"><input type="text" class="form-control" placeholder="ALURE" name="book" id="book"></div>
							</div>
							<div class="form-group">      						
								<div class="text-right">
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
<!-- Edit Row -->
<script>
	function editRow(name, length, date, time, book) {
		$('#name').val(name);
		$('#date').val(date);
		$('#time').val(time);
		$('#book').val(book);
		$("#editModal").modal({			// wire up the actual modal functionality and show the dialog
			"backdrop"  : "static",
			"keyboard"  : true,
			"show"      : true			// ensure the modal is shown immediately
		});
	}
</script>
@stop