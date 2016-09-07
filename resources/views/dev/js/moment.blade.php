@extends('dev.layout.template')
@section('css')

@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-8">
		<h2>Moment</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li>JS</li>
			<li class="active"><strong>Moment</strong></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="ibox-content p-xl">
				<div class="row">
					<a href="{{ URL::to('http://momentjs.com/') }}" target="_blank">Download on Website</a>
					<hr>
					<time class="cw-relative-date" datetime="2014-06-09T12:32:10-00:00"></time>
				</div>
			</div>
		</div>
	</div>
</div>
@include('dev.layout.inc-footer')
@stop

@section('js')
<script type="text/javascript" src="{{asset('/js/moment/moment.min.js')}}"></script>
<script type="text/javascript">

	(function () {
		// Define a function that updates all relative dates defined by <time class='cw-relative-date'>
		var updateAllRelativeDates = function() {
			$('time').each(function (i, e) {
				if ($(e).attr("class") == 'cw-relative-date') {
					
					// Initialise momentjs
					var now = moment();
					moment.lang('en', {
						calendar : {
							lastDay : '[Yesterday at] LT',
							sameDay : '[Today at] LT',
							nextDay : '[Tomorrow at] LT',
							lastWeek : '[Last] dddd [at] LT',
							nextWeek : 'dddd [at] LT',
							sameElse : 'D MMM YYYY [at] LT'
						}
					});

					// Grab the datetime for the element and compare to now                    
					var time = moment($(e).attr('datetime'));
					var diff = now.diff(time, 'days');

					// If less than one day ago/away use relative, else use calendar display
					if (diff <= 1 && diff >= -1) {
						$(e).html('<span>' + time.from(now) + '</span>');
					} else {
						$(e).html('<span>' + time.calendar() + '</span>');
					}
				}
			});
		};

		// Update all dates initially
		updateAllRelativeDates();

		// Register the timer to call it again every minute
		setInterval(updateAllRelativeDates, 60000);

	})();

</script>
@stop