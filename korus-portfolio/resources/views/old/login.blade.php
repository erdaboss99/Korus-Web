<div id='login_form_holder'>
    {{ Form::open(array('url' => 'login', 'id' => 'admin_form', 'class' => 'login_forms')) }}
	{{ Form::label('admin_pass', 'Admin jelszó',
                    array('class' => 'pass_labels')) }}
	{{ Form::password('password', array('id' => 'admin_pass')) }}
	{{ Form::hidden('user', 'admin') }}
	{{ Form::submit('Belépés, mint admin') }}
    {{ Form::close() }}
    {{ Form::open(array('url' => 'login', 'id' => 'tag_form', 'class' => 'login_forms')) }}
	{{ Form::label('tag_pass', 'Tag jelszó',
                    array('class' => 'pass_labels')) }}
	{{ Form::password('password', array('id' => 'tag_pass')) }}
	{{ Form::hidden('user', 'tag') }}
	{{ Form::submit('Belépés, mint tag') }}
    {{ Form::close() }}
</div>
<div class="error_holder">
    @if($errors->has())
	@foreach ($errors->all() as $message)
	<br><span class="warning">{{$message}}</span><br>
	@endforeach
    @endif
    @if(Session::has('failure'))
	<br><span class="warning">{{Session::get('failure')}}</span>
    @endif
</div>
<div class="clear"></div>

