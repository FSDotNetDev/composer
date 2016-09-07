@extends('admin.layout.template')
@section('css')
<!-- Local style only for demo purpose -->
<style>
	.directive-list { list-style: none; }
	.directive-list li {
		background: #f3f3f4;
		padding: 10px 20px;
		margin: 4px;
	}
</style>
@stop

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox">
				<div class="ibox-content">
					<div class="row">
						<div class="col-lg-4">
							<div class="text-center m-t-lg"><img src="{{asset('/assets/img/angular_logo.png')}}" alt="AngularJS"></div>
						</div>
						<div class="col-lg-4">
							<div class="text-center m-t-lg"><img src="{{asset('/assets/img/mvc_logo.png')}}" alt="MVC" style="width: 120px"></div>
						</div>
						<div class="col-lg-4">
							<div class="text-center m-t-lg"><img src="{{asset('/assets/img/html_logo.png')}}" alt="HTML" style="width: 100px"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="text-center m-t-lg">
								<h1>Inspinia <span class="text-navy">AngularJs</span></h1>
								<small>Supported AngularJs version</small>
							</div>
							<div>
								<div class="hr-line-dashed"></div>
									<div class="text-center p-lg">
										<p>
											<strong>Inspinia <span class="text-navy">AngularJs</span></strong> is supported AngularJS version of INSPINIA theme.<br/>
											This version contains a number of controllers and directives written specifically to support angular framework.
											<br/>
											<strong>Angular version is writen with Opinionated AngularJS styleguide for teams</strong>. (https://github.com/toddmotto/angularjs-styleguide).
											<br/>
											In project folder you find also <strong class="text-navy">SeedProject</strong> It is an application skeleton for a typical AngularJS web app. 
											You can use it to quickly bootstrap your angular
											webapp projects and dev environment for these projects.
										</p>
										<p class="text-center m-t-md">
											<a target="_blank" href="Angular/" class="btn btn-primary">Live AngularJS version</a>
										</p>
									</div>
								<div>
								<div class="text-center">
									<small>If you need any help feel free to write to us on support@webapplayers.com.
									</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="text-center m-t-lg">
							<h1>Inspinia <span class="text-success">ASP.NET MVC5</span></h1>
							<small>Supported ASP.NET MVC5 version</small>
						</div>
						<div>
							<div class="hr-line-dashed"></div>
							<div class="text-center p-lg">
								<p>
									<strong>Inspinia <span class="text-success">MVC5</span></strong> is supported ASP.NET MVC5 version of INSPINIA theme.<br/>
									This version contains a ASP.NET MVC5 project written in Visual Studio 2013 for .net developers.
									<br/>
									Project has implemented all the plug-ins and it is created in accordance with the convention MVC5.
									In addition, this version has a scaffolding templates that will help you quickly write applications using Entity Framework.
									This version also has <strong class="text-success">SeedProject</strong>  -  a skeleton application that halp you easy start a new project.
								</p>
								<p class="text-center m-t-md">
									<a target="_blank" href="http://208.43.255.210/" class="btn btn-success">Live ASP 4.5.1 MVC5 version</a><br/>
								</p>
							</div>
							<div>

								<div class="text-center">
									<small>If you need any help feel free to write to us on support@webapplayers.com.
									</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="text-center m-t-lg">
							<h1>Inspinia <span class="text-danger">Static HTML/JS</span></h1>
							<small>Static HTML/JS version</small>
						</div>
						<div>
							<div class="hr-line-dashed"></div>
								<div class="text-center p-lg">
									<p>
										<strong>Inspinia <span class="text-danger">HTML/JS</span></strong> is static version of INSPINIA theme.<br/>
										This version contains all components and plugin created with strict HTML and jQuery.
										<br/>
										This version is great if you are a PHP or JAVA programmer.
										As each page is created separately it allows you to quickly implement it for your project by including needed resources.
										The code is clean and clear so you should not have any problems with its implementation.
										Like in all is has also implemented more than 30 plugins which allow you to give your application a great new functionality.
									</p>

									<p class="text-center m-t-md">
										<a target="_blank" href="index" class="btn btn-danger">Live HTML/JS version</a>
									</p>
								</div>
								<div>
									<div class="text-center">
										<small>If you need any help feel free to write to us on support@webapplayers.com.
										</small>
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
@include('admin.layout.inc-footer')
@stop