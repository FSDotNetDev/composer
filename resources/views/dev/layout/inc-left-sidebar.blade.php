<nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav" id="side-menu">
			<li class="nav-header">
				<div class="dropdown profile-element">
					<span><img alt="image" class="img-circle" src="{{asset('/assets/img/profile_small.jpg')}}"></span>
					<a data-toggle="dropdown" class="dropdown-toggle" href="{{ URL::to('#') }}">
						<span class="clear">
							<span class="block m-t-xs"><strong class="font-bold">{{ Session::get('user_name') }} {{ Session::get('user_surname') }}</strong></span>	<!-- David Williams -->
							<span class="text-muted text-xs block">{{ Session::get('user_authority') }}<b class="caret"></b></span>
						</span>
					</a>
					<ul class="dropdown-menu animated fadeInRight m-t-xs">
						<li><a href="{{ URL::to('dev/profile') }}">Profile</a></li>
						<li><a href="{{ URL::to('dev/contacts') }}">Contacts</a></li>
						<li><a href="{{ URL::to('dev/mailbox') }}">Mailbox</a></li>
						<li class="divider"></li>
						<li><a href="{{ URL::to('dev/login') }}">Logout</a></li>
					</ul>
				</div>
				<div class="logo-element">CI+</div>
			</li>
			<li class="active">
				<a href="{{ URL::to('dev/index') }}"><i class="fa fa-th-large"></i><span class="nav-label">Dashboard</span></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-bar-chart-o"></i><span class="nav-label">API</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('dev/line/pay') }}">Line Pay</a></li>
					<li><a href="{{ URL::to('dev/instagram') }}">Instagram</a></li>
					<li><a href="{{ URL::to('dev/google/qrcode') }}">Google QRCode</a></li>					
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-bar-chart-o"></i><span class="nav-label">Code</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('dev/function') }}">Function</a></li>
					<li><a href="{{ URL::to('dev/barcode') }}">Barcode</a></li>
					<li><a href="{{ URL::to('dev/iframe') }}">iframe</a></li>
					<li><a href="{{ URL::to('dev/xml') }}">XML</a></li>					
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-bar-chart-o"></i><span class="nav-label">Class</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('dev/smarty') }}">Smarty</a></li>
					<li><a href="{{ URL::to('dev/adodb') }}">ADODB</a></li>					
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-bar-chart-o"></i><span class="nav-label">CSS</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('dev/xml') }}">XML</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-bar-chart-o"></i><span class="nav-label">JS</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('dev/testimonial') }}">Testimonial</a></li>
					<li><a href="{{ URL::to('dev/metismenu') }}">Metis Menu</a></li>
					<li><a href="{{ URL::to('dev/slimscroll') }}">Slim Scroll</a></li>
					<li><a href="{{ URL::to('dev/peace') }}">Peace</a></li>
					<li><a href="{{ URL::to('dev/carouselhighlight') }}">Carousel Highlight</a></li>
					<li><a href="{{ URL::to('dev/moment') }}">Moment</a></li>
					<li><a href="{{ URL::to('dev/draft') }}">Draft</a></li>
					<li><a href="{{ URL::to('dev/mediumeditor') }}">Medium Editor</a></li>
					<li><a href="{{ URL::to('dev/jquery') }}">jQuery</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-bar-chart-o"></i><span class="nav-label">CMS</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('dev/drupal') }}">Drupal</a></li>
					<li><a href="{{ URL::to('dev/joomla') }}">Joomla</a></li>
					<li><a href="{{ URL::to('dev/prestashop') }}">Prestashop</a></li>
					<li><a href="{{ URL::to('dev/wordpress') }}">Wordpress</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-bar-chart-o"></i><span class="nav-label">Framework</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('dev/bootstrap') }}">Bootstrap</a></li>
					<li><a href="{{ URL::to('dev/fatfree') }}">Fatfree</a></li>
					<li><a href="{{ URL::to('dev/fingerprint') }}">Fingerprint</a></li>
					<li><a href="{{ URL::to('dev/heroku') }}">Heroku</a></li>
					<li><a href="{{ URL::to('dev/jwt') }}">JWT</a></li>
					<li><a href="{{ URL::to('dev/kotchasan') }}">Kotchasan</a></li>
					<li><a href="{{ URL::to('dev/laravel') }}">Laravel</a></li>
					<li><a href="{{ URL::to('dev/moodle') }}">Moodle</a></li>
					<li><a href="{{ URL::to('dev/phalcon') }}">Phalcon</a></li>
					<li><a href="{{ URL::to('dev/slim') }}">Slim</a></li>
					<li><a href="{{ URL::to('dev/smf') }}">SMF</a></li>
					<li><a href="{{ URL::to('dev/yii') }}">Yii</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-bar-chart-o"></i><span class="nav-label">Project</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('dev/beargirlfriend') }}">Beargirlfriend</a></li>
					<li><a href="{{ URL::to('dev/blogspot') }}">Blogspot</a></li>
					<li><a href="{{ URL::to('dev/bof') }}">BOF</a></li>
					<li><a href="{{ URL::to('dev/corporate') }}">Corporate</a></li>
					<li><a href="{{ URL::to('dev/course') }}">Course</a></li>
					<li><a href="{{ URL::to('dev/csloxinfo') }}">CSLOXINFO</a></li>
					<li><a href="{{ URL::to('dev/idbook') }}">ID Book</a></li>
					<li><a href="{{ URL::to('dev/pos') }}">POS</a></li>
					<li><a href="{{ URL::to('dev/shimono') }}">Shimono</a></li>
					<li><a href="{{ URL::to('dev/webservice') }}">Webservice</a></li>
				</ul>
			</li>
			<li>
				<a href="{{ URL::to('dev/changelog') }}"><i class="fa fa-bar-chart-o"></i><span class="nav-label">Changelog</span></a>
			</li>
		</ul>
	</div>
</nav>