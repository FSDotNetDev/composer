@extends('dev.layout.template')
@section('css')
<link href="{{asset('/js/metismenu/metismenu.css')}}" rel="stylesheet">
<link href="{{asset('/js/metismenu/demo.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('/js/prism/prism.css')}}">
@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-8">
		<h2>Metis Menu</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li>JS</li>
			<li class="active"><strong>Metis Menu</strong></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="ibox-content p-xl">
				<div class="row">
					<a href="{{ URL::to('https://github.com/onokumus/metisMenu') }}" target="_blank">Download on Github</a>
					<hr>
					<div class="clearfix">
						<aside class="sidebar">
							<nav class="sidebar-nav">
								<ul class="metismenu" id="menu">
									<li class="active">
										<a href="#" aria-expanded="true">
											<span class="sidebar-nav-item-icon fa fa-github fa-lg"></span>
											<span class="sidebar-nav-item">Metis Menu</span>
											<span class="fa arrow"></span>
										</a>
										<ul aria-expanded="true">
											<li><a href="#">item 1</a></li>
											<li><a href="#">item 2</a></li>
											<li><a href="#">item 3</a></li>
											<li><a href="#">item 4</a></li>
										</ul>
									</li>
									<li>
										<a href="#" aria-expanded="false">Menu<span class="fa arrow"></span></a>
										<ul aria-expanded="false">
											<li><a href="#">item 1</a></li>
											<li><a href="#">item 2</a></li>
											<li><a href="#">item 3</a></li>
											<li><a href="#">item 4</a></li>
										</ul>
									</li>
									<li>
										<a href="#" aria-expanded="false">Menu<span class="fa arrow"></span></a>
										<ul aria-expanded="false">
											<li><a href="#">item 1</a></li>
											<li><a href="#">item 2</a></li>
											<li><a href="#">item 3</a></li>
											<li><a href="#">item 4</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</aside>
						<section class="content">
							<div class="col-xs-12">
								<h3>Auto Collapse
									<small>default</small>
								</h3>
								<div class="panel panel-default">
									<div class="panel-heading">
										Code
										<span class="pull-right">
											<span class="fa fa-code"></span>
										</span>
									</div>
									<div class="panel-body">									

									<pre><code class="language-markup">&lt;script src="metisMenu.js"&gt;&lt;/script&gt;
<!-- ------------------ -->&lt;script&gt;
<!-- ------------------ --> 	$(function () {
<!-- ------------------ --> 		$('#menu').metisMenu();
<!-- ------------------ --> 	});
<!-- ------------------ -->&lt;/script&gt;
									</code></pre>

									</div>
								</div>
							</div>
						</section>
					</div>
					<hr>
					<div class="clearfix">
						<aside class="sidebar">
							<nav class="sidebar-nav">
								<ul class="metismenu" id="menu2">
									<li class="active">
										<a href="#" aria-expanded="true">
											<span class="sidebar-nav-item-icon fa fa-github fa-lg"></span>
											<span class="sidebar-nav-item">Metis Menu</span>
											<span class="fa arrow"></span>
										</a>
										<ul aria-expanded="true">
											<li><a href="#">item 1</a></li>
											<li><a href="#">item 2</a></li>
											<li><a href="#">item 3</a></li>
											<li><a href="#">item 4</a></li>
										</ul>
									</li>
									<li>
										<a href="#" aria-expanded="false">Menu<span class="fa arrow"></span></a>
										<ul aria-expanded="false">
											<li><a href="#">item 1</a></li>
										</ul>
									</li>
									<li>
										<a href="#" aria-expanded="false">Menu<span class="fa arrow"></span></a>
										<ul aria-expanded="false">
											<li><a href="#">item 1</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</aside>
						<section class="content">
							<div class="col-xs-12">
								<h3>No Collapse</h3>
								<div class="panel panel-default">
									<div class="panel-heading">
										Code
										<span class="pull-right">
											<span class="fa fa-code"></span>
										</span>
									</div>
									<div class="panel-body">									

									<pre><code class="language-markup">&lt;script src="metisMenu.js"&gt;&lt;/script&gt;
<!-- ------------------ -->&lt;script&gt;
<!-- ------------------ --> 	$(function () {
<!-- ------------------ --> 		$('#menu2').metisMenu({ toggle: false });
<!-- ------------------ --> 	});
<!-- ------------------ -->&lt;/script&gt;
									</code></pre>

									</div>
								</div>
							</div>
						</section>
					</div>
					<hr>
					<div class="clearfix">
						<aside class="sidebar">
							<nav class="sidebar-nav">
								<ul class="metismenu" id="menu3">
									<li class="active">
										<a href="#" aria-expanded="true">
											<span class="sidebar-nav-item-icon fa fa-github fa-lg"></span>
											<span class="sidebar-nav-item">Metis Menu</span>
											<span class="fa arrow"></span>
										</a>
										<ul aria-expanded="true">
											<li><a href="#">item 1</a></li>
											<li><a href="#">item 2</a></li>
											<li><a href="#">item 3</a></li>
											<li><a href="#">item 4</a></li>
										</ul>
									</li>
									<li>
										<a href="{{ URL::to('dev/index') }}" aria-expanded="false">Menu<span class="fa arrow"></span></a>
										<ul aria-expanded="false">
											<li><a href="#">item 1</a></li>
										</ul>
									</li>
									<li>
										<a href="{{ URL::to('dev/index') }}" aria-expanded="false">Menu<span class="fa arrow"></span></a>
										<ul aria-expanded="false">
											<li><a href="#">item 1</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</aside>
						<section class="content">
							<div class="col-xs-12">
								<h3>Double Tap To Go</h3>
								<div class="panel panel-default">
									<div class="panel-heading">
										Code
										<span class="pull-right">
											<span class="fa fa-code"></span>
										</span>
									</div>
									<div class="panel-body">									

									<pre><code class="language-markup">&lt;script src="metisMenu.js"&gt;&lt;/script&gt;
<!-- ------------------ -->&lt;script&gt;
<!-- ------------------ --> 	$(function () {
<!-- ------------------ --> 		$('#menu3').metisMenu({ doubleTapToGo: true });
<!-- ------------------ --> 	});
<!-- ------------------ -->&lt;/script&gt;
									</code></pre>

									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('dev.layout.inc-footer')
@stop

@section('js')
<script type="text/javascript" src="{{asset('/js/metismenu/metismenu.js')}}"></script>
<script src="{{asset('/js/prism/prism.js')}}"></script>
<script type="text/javascript">
	$(function () {
		$('#menu').metisMenu();
		$('#menu2').metisMenu({ toggle: false });
		$('#menu3').metisMenu({ doubleTapToGo: true });
		$('#menu4').metisMenu();
	});
</script>

@stop