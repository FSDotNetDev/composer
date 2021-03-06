@extends('dev.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-sm-4">
		<h2>Project Course</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li>Project</li>
			<li class="active"><strong>Course</strong></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-9">
		<div class="wrapper wrapper-content animated fadeInUp">
			<div class="ibox">
				<div class="ibox-content">
					<div class="row">
						<div class="col-lg-12">
							<div class="m-b-md">
								<a href="#" class="btn btn-white btn-xs pull-right">Edit project</a>
								<h2>Mono Company</h2>
							</div>
							<dl class="dl-horizontal">
								<dt>สถานะ:</dt> <dd><span class="label label-primary">Complete</span></dd>
							</dl>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-5">
							<dl class="dl-horizontal">
								<dt>พัฒนาโดย:</dt> <dd><a href="#" class="text-navy">FS DotNet</a></dd>
								<dt>ระยะเวลา:</dt> <dd></dd>
								<dt>Version:</dt> <dd> 	v2.0 </dd>
							</dl>
						</div>
						<div class="col-lg-7" id="cluster_info">
							<dl class="dl-horizontal" >
								<dt>Last Updated:</dt> <dd>16.08.2014 12:15:57</dd>
								<dt>Created:</dt> <dd> 	10.07.2014 23:36:57 </dd>
								<dt>Participants:</dt>
								<dd class="project-people">
								<a href=""><img alt="image" class="img-circle" src="{{asset('/assets/img/a3.jpg')}}"></a>
								<a href=""><img alt="image" class="img-circle" src="{{asset('/assets/img/a1.jpg')}}"></a>
								<a href=""><img alt="image" class="img-circle" src="{{asset('/assets/img/a2.jpg')}}"></a>
								<a href=""><img alt="image" class="img-circle" src="{{asset('/assets/img/a4.jpg')}}"></a>
								<a href=""><img alt="image" class="img-circle" src="{{asset('/assets/img/a5.jpg')}}"></a>
								</dd>
							</dl>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<dl class="dl-horizontal">
								<dt>Completed:</dt>
								<dd>
									<div class="progress progress-striped active m-b-sm">
										<div style="width: 60%;" class="progress-bar"></div>
									</div>
									<small>Project completed in <strong>60%</strong>. Remaining close the project, sign a contract and invoice.</small>
								</dd>
							</dl>
						</div>
					</div>
					<div class="row m-t-sm">
						<div class="col-lg-12">
						<div class="panel blank-panel">
						<div class="panel-heading">
							<div class="panel-options">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tab-1" data-toggle="tab">Users messages</a></li>
									<li class=""><a href="#tab-2" data-toggle="tab">Last activity</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							<div class="tab-content">
								<div class="tab-pane active" id="tab-1">
									<div id="jstree1">
										Function
										<ul>
											<li data-jstree='{"type":"css"}'>Check Form Validation</li>
											<li data-jstree='{"type":"css"}'>Send Form to Mail</li>											
											<li data-jstree='{"type":"css"}'>Redirect to Main Website</li>
										</ul>
									</div>
									<div class="hr-line-dashed"></div>
									<div class="carousel slide" id="carousel2">
										<ol class="carousel-indicators">
											<li data-slide-to="0" data-target="#carousel2" class="active"></li>
											<li data-slide-to="1" data-target="#carousel2"></li>
										</ol>
										<div class="carousel-inner">
											<div class="item active">
												<img alt="image"  class="img-responsive" src="{{asset('/media/image/project/corporate/index.png')}}">
											</div>
										</div>
										<a data-slide="prev" href="#carousel2" class="left carousel-control"><span class="icon-prev"></span></a>
										<a data-slide="next" href="#carousel2" class="right carousel-control"><span class="icon-next"></span></a>
									</div>
								</div>
								<div class="tab-pane" id="tab-2">
									<table class="table table-striped">
										<thead>
										<tr>
											<th>Status</th>
											<th>Title</th>
											<th>Start Time</th>
											<th>End Time</th>
											<th>Comments</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td><span class="label label-primary"><i class="fa fa-check"></i> Completed</span></td>
											<td>Create project in webapp</td>
											<td>12.07.2014 10:10:1</td>
											<td>14.07.2014 10:16:36</td>
											<td><p class="small">Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.</p></td>
										</tr>
										<tr>
											<td><span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
											</td>
											<td>Various versions</td>
											<td>12.07.2014 10:10:1</td>
											<td>14.07.2014 10:16:36</td>
											<td><p class="small">Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></td>
										</tr>
										<tr>
											<td><span class="label label-primary"><i class="fa fa-check"></i> Sent</span></td>
											<td>There are many variations</td>
											<td>12.07.2014 10:10:1</td>
											<td>14.07.2014 10:16:36</td>
											<td><p class="small">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which</p></td>
										</tr>
										<tr>
											<td><span class="label label-primary"><i class="fa fa-check"></i> Reported</span></td>
											<td>Latin words</td>
											<td>12.07.2014 10:10:1</td>
											<td>14.07.2014 10:16:36</td>
											<td><p class="small">Latin words, combined with a handful of model sentence structures</p></td>
										</tr>
										<tr>
											<td><span class="label label-primary"><i class="fa fa-check"></i> Accepted</span></td>
											<td>The generated Lorem</td>
											<td>12.07.2014 10:10:1</td>
											<td>14.07.2014 10:16:36</td>
											<td><p class="small">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p></td>
										</tr>
										<tr>
											<td><span class="label label-primary"><i class="fa fa-check"></i> Sent</span></td>
											<td>The first line</td>
											<td>12.07.2014 10:10:1</td>
											<td>14.07.2014 10:16:36</td>
											<td><p class="small">The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p></td>
										</tr>
										<tr>
											<td><span class="label label-primary"><i class="fa fa-check"></i> Reported</span></td>
											<td>The standard chunk</td>
											<td>12.07.2014 10:10:1</td>
											<td>14.07.2014 10:16:36</td>
											<td><p class="small">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p></td>
										</tr>
										<tr>
											<td><span class="label label-primary"><i class="fa fa-check"></i> Completed</span></td>
											<td>Lorem Ipsum is that</td>
											<td>12.07.2014 10:10:1</td>
											<td>14.07.2014 10:16:36</td>
											<td><p class="small">Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.</p></td>
										</tr>
										<tr>
											<td><span class="label label-primary"><i class="fa fa-check"></i> Sent</span></td>
											<td>Contrary to popular</td>
											<td>12.07.2014 10:10:1</td>
											<td>14.07.2014 10:16:36</td>
											<td><p class="small">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical</p></td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-3">
	<div class="wrapper wrapper-content project-manager">
		<h4>Project description</h4>
		<img src="{{asset('/assets/img/zender_logo.png')}}" class="img-responsive">
		<p class="small">
			There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look
			even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
		</p>
		<p class="small font-bold"><span><i class="fa fa-circle text-warning"></i> High priority</span></p>
		<h5>Project tag</h5>
		<ul class="tag-list" style="padding: 0">
			<li><a href=""><i class="fa fa-tag"></i> Zender</a></li>
			<li><a href=""><i class="fa fa-tag"></i> Lorem ipsum</a></li>
			<li><a href=""><i class="fa fa-tag"></i> Passages</a></li>
			<li><a href=""><i class="fa fa-tag"></i> Variations</a></li>
		</ul>
		<h5>Project files</h5>
		<ul class="list-unstyled project-files">
			<li><a href=""><i class="fa fa-file"></i> Project_document.docx</a></li>
			<li><a href=""><i class="fa fa-file-picture-o"></i> Logo_zender_company.jpg</a></li>
			<li><a href=""><i class="fa fa-stack-exchange"></i> Email_from_Alex.mln</a></li>
			<li><a href=""><i class="fa fa-file"></i> Contract_20_11_2014.docx</a></li>
		</ul>
		<div class="text-center m-t-md">
			<a href="#" class="btn btn-xs btn-primary">Add files</a>
			<a href="#" class="btn btn-xs btn-primary">Report contact</a>
		</div>
	</div>
</div>
@include('dev.layout.inc-footer')
@stop

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		$('#loading-example-btn').click(function () {
			btn = $(this);
			simpleLoad(btn, true)
			/*Ajax example
				$.ajax().always(function () {
					 simpleLoad($(this), false)
				});*/
			simpleLoad(btn, false)
		});
	});
	function simpleLoad(btn, state) {
		if (state) {
			btn.children().addClass('fa-spin');
			btn.contents().last().replaceWith(" Loading");
		} else {
			setTimeout(function () {
				btn.children().removeClass('fa-spin');
				btn.contents().last().replaceWith(" Refresh");
			}, 2000);
		}
	}
</script>
@stop