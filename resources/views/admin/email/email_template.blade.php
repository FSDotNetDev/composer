@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Email Template</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li><a>Mailbox</a></li>
			<li class="active"><strong>Email Template</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content  animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title"><h5>Responsive transactional HTML email templates</h5></div>
				<div class="ibox-content">
					<p>
						Transactional HTML emails. Each template is responsive and each has been tested in all the popular email clients. Credits to 
						<a target="_blank" href="https://github.com/mailgun/transactional-email-templates">Maligun</a>
					</p>
					<div class="row">
						<div class="col-md-4">
							<h4>Basic action email</h4>
							<a href="email_templates/action" target="_blank"><img src="{{asset('/assets/img/email_1.jpg')}}" class="img-responsive" alt=""></a>
						</div>
						<div class="col-md-4">
							<h4>Email alert </h4>
							<a href="email_templates/alert" target="_blank"><img src="{{asset('/assets/img/email_2.jpg')}}" class="img-responsive" alt=""></a>
						</div>
						<div class="col-md-4">
							<h4>Billing email</h4>
							<a href="email_templates/billing" target="_blank"><img src="{{asset('/assets/img/email_3.jpg')}}" class="img-responsive" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('admin.layout.inc-footer')
@stop