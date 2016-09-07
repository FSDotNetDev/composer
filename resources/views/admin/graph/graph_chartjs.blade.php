@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Chart.js</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li><a>Graphs</a></li>
			<li class="active"><strong>Chart</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-6">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Line Chart Example<small>With custom colors.</small></h5>
					<div ibox-tools></div>
				</div>
				<div class="ibox-content">
					<div><canvas id="lineChart" height="140"></canvas></div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Bar Chart Example</h5>
					<div ibox-tools></div>
				</div>
				<div class="ibox-content">
					<div><canvas id="barChart" height="140"></canvas></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Polar Area</h5>
					<div ibox-tools></div>
				</div>
				<div class="ibox-content">
					<div class="text-center"><canvas id="polarChart" height="140"></canvas></div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Pie </h5>
					<div ibox-tools></div>
				</div>
				<div class="ibox-content">
					<div><canvas id="doughnutChart" height="140"></canvas></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Radar Chart Example</h5>
					<div ibox-tools></div>
				</div>
				<div class="ibox-content">
					<div><canvas id="radarChart"></canvas></div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('admin.layout.inc-footer')
@stop

@section('js')
<script type="text/javascript" src="{{asset('/assets/js/demo/chartjs-demo.js')}}"></script>
@stop