@extends("master")
@section('content')

<div id='dash_form_holder'>

	<div id='dash_menu'>
		<div>
            <a href="{{url('/post/new')}}">Hír hozzáadása</a>
		</div>
		<div>
            <a href="{{url('/rolunk')}}">Galéria hozzáadása</a>
		</div>
		<div>
            <a href="{{url('/rolunk')}}">Bannerek kezelése</a>
		</div>
        <div>
            <a href="{{url('/rolunk')}}">Tagok kezelése</a>
		</div>
        <div>
            <a href="{{url('/rolunk')}}">Volt tagok kezelése</a>
        </div>
        <div>
            <a href="https://accounts.google.com/ServiceLogin?service=analytics&passive=true&nui=1&hl=hu&continue=https%3A%2F%2Fwww.google.com%2Fanalytics%2Fweb%2F%3Fhl%3Dhu&followup=https%3A%2F%2Fwww.google.com%2Fanalytics%2Fweb%2F%3Fhl%3Dhu" target="_blank">Megtekintési adatok</a>
        </div>
	</div>

    <form action="{{url('/')}}" method="POST">
        @csrf
        <div class="d-flex">
            <div class="d-flex mx-2">
                <label>Új tag jelszó</label>
            </div>
            <div class="d-flex mx-2 pass_labels">
                <input type="password" id="tag_newpass" class="password2">
            </div>
            <div class="d-flex mx-2 pass_labels">
                <label>Jelszó újra</label>
            </div>
            <div class="d-flex mx-2">
                <input type="password" id="tag_newpass2" class="password2">
            </div>
        </div>
    </form>

	{{--{{ Form::open(array('url' => 'dash', 'id' => 'tag_newpass_form')) }}
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
	@endif--}}
</div>

@endsection