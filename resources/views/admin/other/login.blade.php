@extends('admin.layout.blank')
@section('content')
<div class="middle-box text-center loginscreen  animated fadeInDown">
	<div>
		<div><h1 class="logo-name">CI+</h1></div>
		<h3>Welcome to Administrator</h3>
		<!-- <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.</p> -->
		<p>กรุณากรอก Username และ Password เพื่อเข้าสู่ระบบ</p>
		<form class="m-t" action="login/check" method="post" name="authen" id="authen" role="form">
			<div class="form-group"><input type="username" name="user_login" id="user_login" class="form-control" placeholder="Username" required=""></div>
			<div class="form-group"><input type="password" name="user_password" id="user_password" class="form-control" placeholder="Password" required=""></div>
			<button type="button" class="btn btn-primary block full-width m-b" name="login" id="login">Login</button>
			<a href="#"><small>Forgot password?</small></a>
			<p class="text-muted text-center"><small>มีปัญหาการเข้าสู่ระบบติดต่อที่เบอร์ 0909976974</small></p>
			<!-- <a class="btn btn-sm btn-white btn-block" href="register">Create an account</a> -->
			<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
		</form>
		<p class="m-t"><small>CodeInsane Team &copy; 2016</small></p>
	</div>
</div>

<!-- set up the modal to start hidden and fade in and out -->
<div id="tfaModal" class="modal fade">
  	<div class="modal-dialog">
    	<div class="modal-content">
	      	<!-- dialog body -->
	      	<div class="modal-body">
	      		<label>Two Factor Authentication</label>
	        		<button type="button" class="close" data-dismiss="modal">&times;</button>
	      	</div>
	      	<!-- dialog buttons -->
	      	<div class="modal-footer">
	      		<div class="row">
	      			<div class="col-md-12">
	      				<form class="form-horizontal" action="{{ URL::to('admin/tfa/check') }}" method="post">
	      					<div class="form-group"><p class="col-md-3 control-label">Code</p>
	      						<div class="col-md-8"><input type="text" placeholder="Code 6 Digit" class="form-control" name="code" id="code" autofocus=""></div>
	      					</div>
	      					<input type="hidden" name="id" id="id">
	      					<input type="hidden" name="_token" value="{{ csrf_token() }}">
	      					<input type="hidden" name="user_id" value="1">
	      					<div class="form-group">
	      						<div class="text-right">
	      							<div class="col-md-11">
	      								<button type="reset" class="btn btn-white">reset</button>
	      								<button type="submit" class="btn btn-info">submit</button>
	      							</div>
	      						</div>
	      					</div>
	      				</form>
	      			</div>
	      		</div>
	      	</div>
    	</div>
  	</div>
</div>
@include('admin.layout.inc-footer')
@stop

@section('js')
<!-- Bootbox 2FA -->
<script>
	function twofa() {
	   	$("#tfaModal").modal({		// wire up the actual modal functionality and show the dialog
	      	"backdrop"  : "static",
	      	"keyboard"  : true,
	      	"show"      : true			// ensure the modal is shown immediately
	   	});
	}
	$(document).ready(function() {
		$('#login').click(function(e) {
			e.preventDefault();
			$.ajax({
				/*type 	: "POST",
				url 	: $('#authen').attr('action'),
				data 	: $('#authen').serializeArray(),
				success:function(data) {
				    console.log(data);
				}*/
				type: "POST",
      			url: $('#authen').attr('action'),
      			//url:"{!! URL::to('delete') !!}",
			    data: {
					user_login: $("#user_login").val(),
					user_password: $("#user_password").val(),
					"_token": $("#_token").val()
					//"_token": "{{ csrf_token() }}"
			    },
			    success: function(data) {			    	
					console.log(data);
					twofa();	
			    },
			    error: function(data) {
	                console.log('Error:', data);
	            }
			});
		});
	});
</script>
@stop