{{ Form::open(array('url' => '/gallery/save', 'id' => 'newgallery_form')) }}
@if(Session::has('success'))
<br><span class="warning">{{Session::get('success')}}</span>
@endif
<div class="newgallery_block">
	{{ Form::label('newgallery_name', 'Galéria neve:',
                    array('class' => 'newgallery_labels')) }}{{ Form::text('name','',array('id'=>'newgallery_name')) }}
	{{ Form::submit('Létrehozás') }}
</div>
{{ Form::close() }}
@if($errors->has())
@foreach ($errors->all() as $message)
<br><span class="warning">{{$message}}</span><br>
@endforeach
@endif