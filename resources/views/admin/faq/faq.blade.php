@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>FAQ</h2>
		  	<ol class="breadcrumb">
				<li><a href="index">Home</a></li>
				<li class="active"><strong>FAQ</strong></li>
		  </ol>
	 </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox-content m-b-sm border-bottom">
				<div class="text-center p-lg">
					<h2>ถ้าหน้านี้ไม่มีคำตอบกรุณาใส่คำถามของคุณ</h2>
					<form class="form-horizontal m-t-md" action="{{ URL::to('admin/faq/add') }}" method="post">
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="" name="faq_name">
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button class="btn btn-primary btn-sm" type="submit"><span class="bold">Add Question</span></button>
					</form>
				</div>
			</div>
			@foreach($node as $key => $value)
			<div class="faq-item">				
				<div class="row">
					<div class="col-md-7">
						<a data-toggle="collapse" href="#faq{{$key}}" class="faq-question">{{ $node[$key]['faq_name'] }}</a>
						<small>Added by <strong>{{ $node[$key]['user_name'] }} {{ $node[$key]['user_surname'] }}</strong><i class="fa fa-clock-o"></i> Today {{ $node[$key]['date_update'] }}</small>
					</div>
					<div class="col-md-3">
						<span class="small font-bold">Tag</span>
						<div class="tag-list">
							@foreach($node[$key]['faq_tag'] as $v)
							<span class="tag-item">{{ $v }}</span>
							@endforeach
						</div>
					</div>
					<div class="col-md-2 text-right">
						<span class="small font-bold">Voting </span><br/>{{ $node[$key]['faq_vote'] }}
					</div>
				</div>				
				<div class="row">
					<div class="col-lg-12">
						<div id="faq{{$key}}" class="panel-collapse collapse faq-answer">
							<p>{{ $node[$key]['faq_detail'] }}</p>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@include('admin.layout.inc-footer')
@stop

@section('js')
<script type="text/javascript">
	$(document).ready(function () {
		$('.i-checks').iCheck({
			checkboxClass: 'icheckbox_square-green',
			radioClass: 'iradio_square-green',
		});
	});
</script>
@stop