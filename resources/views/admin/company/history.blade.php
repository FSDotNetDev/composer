@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>History</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li>Company</li>
			<li class="active"><strong>History</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content">
	<div class="row animated fadeInRight">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-content" id="ibox-content">
					<div id="vertical-timeline" class="vertical-container dark-timeline center-orientation">						
						@foreach($company as $value)
						<div class="vertical-timeline-block">
							<div class="vertical-timeline-icon {{$value['class']}}-bg"><i class="fa fa-briefcase"></i></div>
							<div class="vertical-timeline-content">
								<h2>{{ $value['company_name'] }}</h2>
								<p>{{ $value['company_detail'] }}</p>
								<a href="#" class="btn btn-sm btn-{{$value['btn']}}"> More info</a>
								<span class="vertical-date">
									Today <br/>
									<small>{{ $value['date_update'] }}</small>
								</span>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('admin.layout.inc-footer')
@stop

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		// Local script for demo purpose only
		$('#lightVersion').click(function(event) {
			event.preventDefault()
			$('#ibox-content').removeClass('ibox-content');
			$('#vertical-timeline').removeClass('dark-timeline');
			$('#vertical-timeline').addClass('light-timeline');
		});
		$('#darkVersion').click(function(event) {
			event.preventDefault()
			$('#ibox-content').addClass('ibox-content');
			$('#vertical-timeline').removeClass('light-timeline');
			$('#vertical-timeline').addClass('dark-timeline');
		});
		$('#leftVersion').click(function(event) {
			event.preventDefault()
			$('#vertical-timeline').toggleClass('center-orientation');
		});
	});
</script>
@stop