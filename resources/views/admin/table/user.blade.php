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
		<h2>Table User</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li>Table</li>
			<li class="active"><strong>User</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Table User</h5>
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
					<div class="">
						<a onclick="fnClickAddRow();" href="javascript:void(0);" class="btn btn-primary">Add a new row</a>
					</div>
					<table class="table table-striped table-bordered table-hover " id="editable" >
						<thead>
						<tr>
							<th></th>
							<th>Name</th>
							<th>Suname</th>
							<th>Address</th>
							<th>Email</th>
							<th>Phone</th>
						</tr>
						</thead>
						<tbody>
						@foreach($user as $key => $value)
						<tr class="gradeA">
							<td>{{ $key+1 }}</td>
							<td>{{ $value->user_name }}</td>
							<td>{{ $value->user_surname }}</td>
							<td>{{ $value->user_address }}</td>
							<td>{{ $value->user_email }}</td>
							<td>{{ $value->user_phone }}</td>
						</tr>
						@endforeach
						</tbody>
						<tfoot>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Suname</th>
							<th>Address</th>
							<th>Email</th>
							<th>Phone</th>
						</tr>
						</tfoot>
					</table>
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
@stop