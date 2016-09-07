@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Code Editor - Code Mirror</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li><a>Tables</a></li>
			<li class="active"><strong>Code Editor</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content  animated fadeInRight">
	<div class="row">
		<div class="col-lg-6">
			<div class="ibox ">
				<div class="ibox-title"><h5>Code Editor - Basic example</h5></div>
				<div class="ibox-content">
					<p class="m-b-lg">
						<strong>CodeMirror</strong> is a versatile text editor implemented in JavaScript for the browser. 
						It is specialized for editing code, and comes with a number of language modes and addons that implement more advanced editing functionality.</p>
					<textarea id="code1">
						<script>
							// Code goes here
							// For demo purpose - animation css script
							function animationHover(element, animation){
								element = $(element);
								element.hover(
								function() {
									element.addClass('animated ' + animation);
								},
								function() {
									//wait for animation to finish before removing classes
									window.setTimeout( function(){
										element.removeClass('animated ' + animation);
									}, 2000);
								});
							}
						</script>
					</textarea>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Code Editor - Theme Example</h5>
				</div>
				<div class="ibox-content">
					<p class="m-b-lg">
						A rich programming API and a CSS theming system are available for customizing CodeMirror to fit your application, 
						and extending it with new functionality. For mor info go to
						<a href="http://codemirror.net/" target="_blank">http://codemirror.net/</a></p>
					<textarea id="code2">
						var SpeechApp = angular.module('SpeechApp', []);
						function VoiceCtrl($scope) {
							$scope.said='...';
							$scope.helloWorld = function() {
								$scope.said = "Hello world!";
							}
							$scope.commands = {
								'hello (world)': function() {
									if (typeof console !== "undefined") console.log('hello world!')
									$scope.$apply($scope.helloWorld);
								},
								'hey': function() {
									if (typeof console !== "undefined") console.log('hey!')
									$scope.$apply($scope.helloWorld);
								}
							};
							annyang.debug();
							annyang.init($scope.commands);
							annyang.start();
						}
					</textarea>
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
		var editor_one = CodeMirror.fromTextArea(document.getElementById("code1"), {
			lineNumbers: true,
			matchBrackets: true,
			styleActiveLine: true,
			theme:"ambiance"
		});
		var editor_two = CodeMirror.fromTextArea(document.getElementById("code2"), {
			lineNumbers: true,
			matchBrackets: true,
			styleActiveLine: true
		});

	});
</script>
@stop