@extends('admin.layout.blank')
@section('content')
<div class="middle-box text-center loginscreen animated fadeInDown">
	<div>
		<div><h1 class="logo-name">JD+</h1></div>
		<h3>Register to JD+</h3>
		<p>Create account to see it in action.</p>
		<form class="m-t" role="form" action="login">
			<div class="form-group"><input type="text" class="form-control" placeholder="Username" required="" id="username"></div>
			<div class="form-group"><input type="email" class="form-control" placeholder="Email" required="" id="email"></div>
			<div class="form-group"><input type="password" class="form-control" placeholder="Password" required="" id="password"></div>
			<div class="form-group"><div class="checkbox i-checks"><label><input type="checkbox"><i></i> &emsp; Agree the terms and policy </label></div></div>
			<input type="button" class="btn btn-primary block full-width m-b" id="username_availability" value="Check">
			<div id='status'></div>
			<button type="submit" class="btn btn-primary block full-width m-b">Register</button>
			<p class="text-muted text-center"><small>Already have an account?</small></p>
			<a class="btn btn-sm btn-white btn-block" href="login">Login</a>
		</form>
		<p class="m-t"><small>Jumbangdi Team &copy; 2016</small></p>
	</div>
</div>
@stop

@section('js')
<script>
	$(document).ready(function(){
		$('.i-checks').iCheck({
			checkboxClass: 'icheckbox_square-green',
			radioClass: 'iradio_square-green',
		});
	});

	$('#username_availability').click(function() {
		check_username(); 
	});

	function check_username() {  
  
		var user_login = $('#username').val();  
  
		$.post("{{ URL::to('admin/register/check/username') }}", { user_login: user_login },         
			function(result) {
				if (result == 1) {
					$('#status').html('ขื่อนี้สามารถใช้งานได้');  
				} else {
					$('#status').html('ชื่อนี้ไม่สามารถใช้งานได้');  
				}  
			}
		);

	} 
</script>
@stop