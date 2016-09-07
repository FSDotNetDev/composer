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
					<h5>สำนักพิมพ์</h5>
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
							<td>{{ $category[$key]['category_surname'] }}</td>
							<td>{{ $category[$key]['user_name'] }}</td>
							<td style="width:50px;" align="center">
								<a href="{{ URL::to('admin/category/detail') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
								<a onclick="editRow({{ $category[$key]['category_id'] }});"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- dialog body -->
			<div class="modal-body">
				<label>Add Writer</label>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- dialog buttons -->
			<div class="modal-footer">
				<div class="row">
					<div class="col-md-12">
						<form class="form-horizontal">
							<div class="form-group"><p class="col-md-3 control-label">ชื่อสำนักพิทพ์</p>
								<div class="col-md-8"><input type="text" placeholder="ALURE" class="form-control"></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">ที่อยู่</p>
								<div class="col-md-8"><textarea class="form-control" rows="3" placeholder="ประเทศไทย"></textarea></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">อีเมล์</p>
								<div class="col-md-8"><input type="text" placeholder="@gmail.com" class="form-control"></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">เบอร์โทรศัพท์</p>
								<div class="col-md-8"><input type="text" placeholder="xxxxxxxxxx" class="form-control"></div>
							</div>
							<div class="form-group"><p class="col-md-3 control-label">อัพโหลดรูปภาพ</p>
								<div class="col-md-3">
									<label title="Upload image file" for="inputImage" class="btn btn-primary pull-left">
										<input type="file" accept="image/*" name="file" id="inputImage" class="hide">
										Browse
									</label>
								</div>
							</div>
							<div class="form-group">      						
								<div class="col-md-11"><a onclick="nextBox();" class="btn btn-primary">Next</a></div>
							</div>
						</form>
					</div>
				</div>
				<!-- <a onclick="nextBox();" class="btn btn-primary">Next</a> -->
				<!-- <button type="button" class="btn btn-primary">OK</button> -->
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
		$("#myModal").modal({			// wire up the actual modal functionality and show the dialog
			"backdrop"  : "static",
			"keyboard"  : true,
			"show"      : true			// ensure the modal is shown immediately
		});
	}
</script>
<!-- Edit Row -->
<script>
	function editRow(val) {
		$.ajax({
			type: "POST",
			url: "category/edit",
			data: "book_id=" + val,
			success: function(data) {
				// $('#myModal').html(data);
				alert(data);
			}
		});
	}
</script>
@stop