<div class="oldal">
	<div class="fejlec">
		<div class ="logo_box">
			<div id="logo">
				<a href="{{url('/')}}">{{HTML::image('assets/images/logo_terra.png', '', array('logo'))}}</a>
			</div>
		</div>
		@if(Auth::check())
		<div id='user_box'>
			@if(Auth::user()->user == 'admin')
			<a href="{{url('dash')}}">
				<div class="iranyitopult_box">
				</div>
			</a>
			@endif
			<a href="{{url('logout')}}">
				<div class="logout_box">
				</div>
			</a>
		</div>
		@endif
		<div id='lang_box'>
			{{ Form::open(array('url' => '/lang', 'id' => 'setlang_form')) }}
			{{Form::select('lang', Session::get('languages'), App::getLocale(),array('id' => 'lang_select', 'onchange' => 'this.form.submit()'))}}
			{{ Form::close() }}
		</div>
		<div class ="menu">
			<ul class="menupont">
				<li>{{HTML::link('/?page=rolunk',trans('pages.menu1'))}}</li>
				<li>{{HTML::linkRoute('post.list',trans('pages.menu2'))}}</li>
				<li>{{HTML::linkRoute('gallery.list',trans('pages.menu3'))}}</li>
				<li>{{HTML::linkRoute('page.esemeny',trans('pages.menu4'))}}</li>
				<li>{{HTML::link('/?page=kapcsolat',trans('pages.menu5'))}}</li>
			</ul>
		</div>
	</div>
	<div class="tartalom">
		{{$content}}
	</div>
	<div class="clear"></div>
	<div class="sziluett">
		{{HTML::image('assets/images/sziluett_eger.png')}}
	</div>
	<footer class="lablec">
		<div class="sitemap">
			{{HTML::link('/?page=rolunk',trans('pages.menu1'))}} / 
			{{HTML::linkRoute('post.list',trans('pages.menu2'))}} / 
			{{HTML::linkRoute('gallery.list',trans('pages.menu3'))}} /
			{{HTML::linkRoute('page.esemeny',trans('pages.menu4'))}} /
			{{HTML::link('/?page=kapcsolat',trans('pages.menu5'))}}
		</div>
        <div class="footer_messages">
			<a href="https://www.facebook.com/egriersekifiukorus"><div class="footer_facebook">
			</div>
			</a>
			<a href="mailto:egerfiukorus@gmail.com">
			<div class="footer_email">
			</div>
			</a>
		</div>
        <div class="created">
            Készítette: <a href="http://www.qnszt.hu"><span>QNSZT</span> Kft</a>
        </div>

	</footer>
</div>