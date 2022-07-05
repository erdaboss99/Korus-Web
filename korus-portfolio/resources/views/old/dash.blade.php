<div id='dash_form_holder'>

	<div id='dash_menu'>
		<div>
			{{HTML::linkRoute('post.new','Hír hozzáadása')}}
		</div>
		<div>
			{{HTML::linkRoute('gallery.new','Galéria hozzáadása')}}
		</div>
		<div>
			{{HTML::linkRoute('banner.edit','Bannerek kezelése')}}
		</div>
        <div>
			{{HTML::linkRoute('member.edit','Tagok kezelése')}}
		</div>
        <div>
            {{HTML::linkRoute('oldmember.edit','Volt tagok kezelése')}}
        </div>
        <div>
            <a href="https://accounts.google.com/ServiceLogin?service=analytics&passive=true&nui=1&hl=hu&continue=https%3A%2F%2Fwww.google.com%2Fanalytics%2Fweb%2F%3Fhl%3Dhu&followup=https%3A%2F%2Fwww.google.com%2Fanalytics%2Fweb%2F%3Fhl%3Dhu" target="_blank">Megtekintési adatok</a>
        </div>
	</div>

	{{ Form::open(array('url' => 'dash', 'id' => 'tag_newpass_form')) }}
	{{ Form::label('tag_newpass', 'Új tag jelszó',
                        array('class' => 'pass_labels')) }}
	{{ Form::password('password', array('id' => 'tag_newpass')) }}
	{{ Form::label('tag_newpass2', 'Jelszó újra',
                        array('class' => 'pass_labels')) }}
	{{ Form::password('password2', array('id' => 'tag_newpass2')) }}
	{{ Form::submit('Változtatás') }}
	{{ Form::close() }}
	@if($errors->has())
	@foreach ($errors->all() as $message)
	<br><span class="warning">{{$message}}</span><br>
	@endforeach
	@endif
	@if(Session::has('result'))
	<br><span class="warning">{{Session::get('result')}}</span>
	@endif
</div>

