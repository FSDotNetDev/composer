@extends('admin.layout.blank')
@section('content')
<div class="middle-box text-center loginscreen  animated fadeInDown">
	<div>
		<div><h1 class="logo-name">CI+</h1></div>
		<h3>Verification Code</h3>
		<!-- <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.</p> -->
		<p>กรุณากรอกรหัสที่ได้รับจาก Google Authenticator</p>
		<form class="m-t" role="form" action="tfa/check" method="post">
			<div class="form-group"><input type="text" name="code" class="form-control" placeholder="Code" required=""></div>
			<button type="submit" class="btn btn-primary block full-width m-b">Verify</button>
			<p class="text-muted text-center"><small>มีปัญหาการเข้าสู่ระบบติดต่อที่เบอร์ 0909976974</small></p>
			<!-- <a class="btn btn-sm btn-white btn-block" href="register">Create an account</a> -->
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>
		<p class="m-t"><small>CodeInsane Team &copy; 2016</small></p>
	</div>
</div>
@stop