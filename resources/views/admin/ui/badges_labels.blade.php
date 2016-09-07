@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Badges, Labels, Progress</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li><a>UI Elements</a></li>
			<li class="active"><strong>Badges, Labels, Progress</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-6">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Badges</h5>
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
					<p>To add a badge style You have to add <code>.badge</code>class to element. To change a color od badge you can add extra class like <code>.badge-primary</code>.</p>
					<p><span class="badge">Plain</span></p>
					<p><span class="badge badge-primary">Primary</span></p>
					<p><span class="badge badge-info">Information</span></p>
					<p><span class="badge badge-success">Success</span></p>
					<p><span class="badge badge-warning">Warning</span></p>
					<p><span class="badge badge-danger">Danger</span></p>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Labels</h5>
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
					<p>Analogic to badge. To add a label style You have to add <code>.label</code>class to element. 
						To change a color od label you can add extra class like <code>.label-primary</code>.</p>
					<p><span class="label">Plain</span></p>
					<p><span class="label label-primary">Primary</span></p>
					<p><span class="label label-info">Information</span></p>
					<p><span class="label label-success">Success</span></p>
					<p><span class="label label-warning">Warning</span></p>
					<p><span class="label label-danger">Danger</span></p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Progress Bars</h5>
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
					<h5>Basic ProgressBars</h5>
					<div class="progress">
						<div style="width: 35%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" role="progressbar" class="progress-bar progress-bar-success">
							<span class="sr-only">35% Complete (success)</span>
						</div>
					</div>
					<div class="progress progress-bar-default">
						<div style="width: 43%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="43" role="progressbar" class="progress-bar">
							<span class="sr-only">43% Complete (success)</span>
						</div>
					</div>
					<h5>Striped Progressbars</h5>
					<div class="progress progress-striped">
						<div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning">
							<span class="sr-only">40% Complete (success)</span>
						</div>
					</div>
					<h5>Active Progressbars</h5>
					<div class="progress progress-striped active">
						<div style="width: 75%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" role="progressbar" class="progress-bar progress-bar-danger">
							<span class="sr-only">40% Complete (success)</span>
						</div>
					</div>
					<h5>Stacked Progressbars</h5>
					<div class="progress progress-striped active">
						<div style="width: 30%" class="progress-bar progress-bar-success"><span class="sr-only">30% Complete (success)</span></div>
						<div style="width: 20%" class="progress-bar progress-bar-warning"><span class="sr-only">15% Complete (warning)</span></div>
						<div style="width: 40%" class="progress-bar progress-bar-danger"><span class="sr-only">40% Complete (danger)</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('admin.layout.inc-footer')
@stop