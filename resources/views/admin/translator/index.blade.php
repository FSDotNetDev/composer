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
</style>
@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Translator</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li class="active"><strong>Translator</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>ผู้แปล</h5>
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
							<th>ID</th>
							<th>ชื่อผู้แปล</th>
							<th>นามปากกา</th>
							<th>จำนวนหนังสือ</th>
							<th>จัดการ</th>
						</tr>
						</thead>
						<tbody>
						@foreach($translator as $key => $value)
						<tr class="gradeX">
							<td align="center">{{ $translator[$key]['translator_id'] }}</td>
							<td>{{ $translator[$key]['translator_name'] }}</td>
							<td>{{ $translator[$key]['translator_pen'] }}</td>
							<td>{{ $translator[$key]['book_count'] }}</td>
							<td align="center">
								<a href="{{ URL::to('admin/translator/detail') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
								<a onclick="editRow('{{ $translator[$key]['translator_name'] }}', '{{ $translator[$key]['translator_pen'] }}');"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								<a href="{{ URL::to('admin/translator/delete') }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
      		<label>Add Translator</label>
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
      	</div>
      	<!-- dialog buttons -->
      	<div class="modal-footer">
      		<div class="row">
      			<div class="col-md-12">
      				<form class="form-horizontal">
      					<div class="form-group"><p class="col-md-3 control-label">ชื่อ</p>
      						<div class="col-md-8"><input type="text" class="form-control" placeholder="อนุชิต" name="name"></div>
      					</div>
      					<div class="form-group"><p class="col-md-3 control-label">นามสกุล</p>
								<div class="col-md-8"><input type="text" class="form-control" placeholder="คำน้อย" name="surname"></div>
      					</div>
      					<div class="form-group"><p class="col-md-3 control-label">นามปากกา</p>
      						<div class="col-md-8"><input type="text" class="form-control" placeholder="คิ้วต่ำ" name="pen"></div>
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
      		<label>Edit Translator</label>
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
      	</div>
      	<!-- dialog buttons -->
      	<div class="modal-footer">
      		<div class="row">
      			<div class="col-md-12">
      				<form class="form-horizontal">
      					<div class="form-group"><p class="col-md-3 control-label">ชื่อ</p>
      						<div class="col-md-8"><input type="text" class="form-control" placeholder="อนุชิต" name="name" id="name"></div>
      					</div>
      					<div class="form-group"><p class="col-md-3 control-label">นามสกุล</p>
								<div class="col-md-8"><input type="text" class="form-control" placeholder="คำน้อย" name="surname" id="surname"></div>
      					</div>
      					<div class="form-group"><p class="col-md-3 control-label">นามปากกา</p>
      						<div class="col-md-8"><input type="text" class="form-control" placeholder="คิ้วต่ำ" name="pen" id="pen"></div>
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
	function editRow(name, pen) {
		$('#name').val(name);
		$('#surname').val();
		$('#pen').val(pen);
	   	$("#editModal").modal({			// wire up the actual modal functionality and show the dialog
      		"backdrop"  : "static",
      		"keyboard"  : true,
      		"show"      : true			// ensure the modal is shown immediately
   		});
	}
</script>
@stop