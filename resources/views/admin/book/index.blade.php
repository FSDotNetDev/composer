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
		<h2>Book</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li class="active"><strong>Book</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>หนังสือ</h5>
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
							<th>รูป</th>
							<th>ชื่อหนังสือ</th>
							<th>ประเภท</th>
							<th>หมวดหมู่</th>
							<th>จำนวนหน้า</th>
							<th>สถานะ</th>
							<th>จัดการ</th>
						</tr>
						</thead>
						<tbody>
						@foreach($book as $key => $value)
						<tr class="gradeX">
							<td align="center">{{ $book[$key]['book_id'] }}</td>
							<td align="center"><img src="{{ URL::asset('media/book') }}/{{ $book[$key]['book_image'] }}" alt="{{ $book[$key]['book_name'] }}" style="width:80px;"></td>
							<td>{{ $book[$key]['book_name'] }}</td>
							<td>{{ $book[$key]['book_type'] }}</td>
							<td>{{ $book[$key]['category_name'] }}</td>
							<td align="center">{{ $book[$key]['book_page'] }}</td>
							<td align="center">{{ $book[$key]['book_status'] }}</td>
							<td align="center">
								<a href="{{ URL::to('admin/book/detail') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
								<a onclick="editRow('{{ $book[$key]['book_id'] }}', '{{ $book[$key]['book_name'] }}', '{{ $book[$key]['book_type'] }}', '{{ $book[$key]['category_name'] }}', '{{ $book[$key]['book_page'] }}', '{{ $book[$key]['book_status'] }}')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								<a href="{{ URL::to('admin/book/delete') }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
	      		<label>Add Book</label>
	        		<button type="button" class="close" data-dismiss="modal">&times;</button>
	      	</div>
	      	<!-- dialog buttons -->
	      	<div class="modal-footer">
	      		<div class="row">
	      			<div class="col-md-12">
	      				<form class="form-horizontal" action="{{ URL::to('admin/book/add') }}" method="post">
	      					<div class="form-group"><p class="col-md-3 control-label">ชื่อหนังสือ</p>
	      						<div class="col-md-8"><input type="text" placeholder="Alure" class="form-control" name="name" autofocus=""></div>
	      					</div>
	      					<div class="form-group"><p class="col-md-3 control-label">ประเภท</p>
								<div class="col-md-8">
									<div class="text-left">
		      							<select class="selectpicker" data-live-search="true" name="type">
											<option data-tokens="">select</option>
											<option data-tokens="book">หนังสือ</option>
											<option data-tokens="mag">นิตยสาร</option>
										</select>
	      							</div>
								</div>
	      					</div>
	      					<div class="form-group"><p class="col-md-3 control-label">หมวดหมู่</p>
	      						<div class="col-md-8">
	      							<div class="text-left">
		      							<select class="selectpicker" data-live-search="true" name="category">
											<option data-tokens="">select</option>
											<option data-tokens="United States">United States</option>
										</select>
	      							</div>									
	      						</div>
	      					</div>
	      					<div class="form-group"><p class="col-md-3 control-label">จำนวนหน้า</p>
	      						<div class="col-md-8"><input type="text" placeholder="1" class="form-control" name="page"></div>
	      					</div>
	      					<input type="hidden" name="_token" value="{{ csrf_token() }}">
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
	      								<button type="reset" class="btn btn-white">reset</button>
	      								<button type="submit" class="btn btn-info">submit</button>
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
	      		<label>Edit Book</label>
	        		<button type="button" class="close" data-dismiss="modal">&times;</button>
	      	</div>
	      	<!-- dialog buttons -->
	      	<div class="modal-footer">
	      		<div class="row">
	      			<div class="col-md-12">
	      				<form class="form-horizontal" action="{{ URL::to('admin/book/add') }}" method="post">
	      					<div class="form-group"><p class="col-md-3 control-label">ชื่อหนังสือ</p>
	      						<div class="col-md-8"><input type="text" placeholder="Alure" class="form-control" name="name" id="name" autofocus=""></div>
	      					</div>
	      					<div class="form-group"><p class="col-md-3 control-label">ประเภท</p>
								<div class="col-md-8">
									<div class="text-left">
		      							<select class="selectpicker" data-live-search="true" name="type" id="type">
											<option data-tokens="">select</option>
											<option data-tokens="book">หนังสือ</option>
											<option data-tokens="mag">นิตยสาร</option>
										</select>
	      							</div>
								</div>
	      					</div>
	      					<div class="form-group"><p class="col-md-3 control-label">หมวดหมู่</p>
	      						<div class="col-md-8">
	      							<div class="text-left">
		      							<select class="selectpicker" data-live-search="true" name="category" id="category">
											<option data-tokens="">select</option>
											<option data-tokens="United States">United States</option>
										</select>
	      							</div>									
	      						</div>
	      					</div>
	      					<div class="form-group"><p class="col-md-3 control-label">จำนวนหน้า</p>
	      						<div class="col-md-8"><input type="text" placeholder="1" class="form-control" name="page" id="page"></div>
	      					</div>
	      					<input type="hidden" name="id" id="id">
	      					<input type="hidden" name="_token" value="{{ csrf_token() }}">
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
	      								<button type="reset" class="btn btn-white">reset</button>
	      								<button type="submit" class="btn btn-info">submit</button>
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
	function editRow(id, name, type, category, page, status) {
		$("#id").val(id);
		$("#name").val(name);
		$("#type").val(type);
		$("#category").val(category);
		$("#page").val(page);
		// $('#status').val(status);
	   	$("#editModal").modal({			// wire up the actual modal functionality and show the dialog
	      	"backdrop"  : "static",
	      	"keyboard"  : true,
	      	"show"      : true			// ensure the modal is shown immediately
	   	});
	}
</script>
<script>
	
</script>
@stop