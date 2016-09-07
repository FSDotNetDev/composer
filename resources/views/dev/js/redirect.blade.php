@extends('dev.layout.template')
@section('css')
<style type="text/css">
		#my-timer { 
			width: 400px;
			background: lightblue;
			margin: 0 auto;
			text-align: center;
			padding:5px 0px 5px 0px; 
	 }
</style>
@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-8">
		<h2>Redirect</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li>JS</li>
			<li class="active"><strong>Redirect</strong></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="ibox-content p-xl">
				<div class="row">
					<a href="{{ URL::to('http://hilios.github.io/jQuery.countdown/') }}" target="_blank">Download on Github</a>
					<hr>
					<div id="my-timer">
						Page Will Redirect with in <b id="show-time">10</b> seconds        
					</div>
					<!-- <p>You'll be automatically redirected in <span id="count">10</span> seconds...</p> -->
				</div>
			</div>
		</div>
	</div>
</div>
@include('dev.layout.inc-footer')
@stop

@section('js')
<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript">
	 var settimmer = 0;
	 $(function() {
			window.setInterval(function() {
				 var timeCounter = $("b[id=show-time]").html();
				 var updateTime = eval(timeCounter)- eval(1);
				 $("b[id=show-time]").html(updateTime);
				 if (updateTime == 0) {
						window.location = ("{{URL::to('dev/redirect')}}");
				 }
			}, 1000);
	 });
</script>

<script type="text/javascript">
	 window.onload = function() {
			(function() {
				 var counter = 10;
				 setInterval(function() {
						counter--;
						if (counter >= 0) {
							 span = document.getElementById("count");
							 span.innerHTML = counter;
						}
						// Display 'counter' wherever you want to display it.
						if (counter === 0) {
							 alert('this is where it happens');
							 clearInterval(counter);
						}
				 }, 1000);
			})();
	 }
</script>
@stop