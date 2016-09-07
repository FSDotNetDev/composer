@extends('dev.layout.template')
@section('css')
<link href="{{asset('/js/testimonial/css/reset.css')}}" rel="stylesheet">
<link href="{{asset('/js/testimonial/css/style.css')}}" rel="stylesheet">
<script type="text/javascript" src="{{asset('/js/testimonial/js/modernizr.js')}}"></script>
@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-8">
		<h2>Testimonial</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li>JS</li>
			<li class="active"><strong>Testimonial</strong></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="ibox-content p-xl">
				<div class="row">
					<div class="cd-testimonials-wrapper cd-container">
						<ul class="cd-testimonials">
							<li>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<div class="cd-author">
									<img src="{{asset('js/testimonial/img/avatar-1.jpg')}}" alt="Author image">
									<ul class="cd-author-info">
										<li>MyName</li>
										<li>CEO, AmberCreative</li>
									</ul>
								</div>
							</li>
							<li>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ea, perferendis error repudiandae numquam dolor fuga temporibus. Unde omnis, consequuntur.</p>
								<div class="cd-author">
									<img src="{{asset('js/testimonial/img/avatar-2.jpg')}}" alt="Author image">
									<ul class="cd-author-info">
										<li>MyName</li>
										<li>Designer, CodyHouse</li>
									</ul>
								</div>
							</li>
							<li>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam totam nulla est, illo molestiae maxime officiis, quae ad, ipsum vitae deserunt molestias eius alias.</p>
								<div class="cd-author">
									<img src="{{asset('js/testimonial/img/avatar-3.jpg')}}" alt="Author image">
									<ul class="cd-author-info">
										<li>MyName</li>
										<li>CEO, CompanyName</li>
									</ul>
								</div>
							</li>		
						</ul>
						<a href="#" class="cd-see-all">See all</a>
					</div>
					<div class="cd-testimonials-all">
						<div class="cd-testimonials-all-wrapper">
							<ul>
								<li class="cd-testimonials-item">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
									
									<div class="cd-author">
										<img src="{{asset('js/testimonial/img/avatar-1.jpg')}}" alt="Author image">
										<ul class="cd-author-info">
											<li>MyName</li>
											<li>CEO, CompanyName</li>
										</ul>
									</div>
								</li>
								<li class="cd-testimonials-item">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>
									
									<div class="cd-author">
										<img src="{{asset('js/testimonial/img/avatar-2.jpg')}}" alt="Author image">
										<ul class="cd-author-info">
											<li>MyName</li>
											<li>CEO, CompanyName</li>
										</ul>
									</div>
								</li>
								<li class="cd-testimonials-item">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum, a error.</p>
									
									<div class="cd-author">
										<img src="{{asset('js/testimonial/img/avatar-3.jpg')}}" alt="Author image">
										<ul class="cd-author-info">
											<li>MyName</li>
											<li>CEO, CompanyName</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
						<a href="#0" class="close-btn">Close</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('dev.layout.inc-footer')
@stop

@section('js')
<!-- <script type="text/javascript" src="{{asset('/js/testimonial/js/jquery-2.1.1.js')}}"></script> -->
<script type="text/javascript" src="{{asset('/js/testimonial/js/masonry.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/testimonial/js/jquery.flexslider-min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/testimonial/js/main.js')}}"></script>
@stop