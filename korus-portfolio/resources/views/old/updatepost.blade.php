{{ Form::open(array('url' => '/post/'.$data[0]['attributes']['id'].'/update', 'id' => 'newpost_form')) }}
    @if(Session::has('success'))
        <br><span class="warning">{{Session::get('success')}}</span>
    @endif
    @foreach($data[1] as $code)
    <div class="newpost_block">
        <div class="newpost_codes">
            Nyelv: {{$code->name}}
            {{ Form::hidden('code['.$code->code.']', $code->code) }}
        </div>
        <div>{{ Form::label('title['.$code->code.']', 'Cím:',
                    array('class' => 'newpost_labels')) }}{{ Form::text('title['.$code->code.']', $data[0]['attributes']['title'][$code->code]) }}</div>
        <div>{{ Form::label('read_more['.$code->code.']', 'Összefoglaló:',
                    array('class' => 'newpost_labels')) }}{{ Form::textarea('read_more['.$code->code.']', $data[0]['attributes']['read_more'][$code->code]) }}</div>
        <div>{{ Form::label('content['.$code->code.']', 'Tartalom:',
                    array('class' => 'newpost_labels')) }}{{ Form::textarea('content['.$code->code.']', $data[0]['attributes']['content'][$code->code]) }}</div>
    </div>
    <br>
    <script type='text/javascript'>
        {{'CKEDITOR.replace(\'read_more['.$code->code.']\');'}}
        {{'CKEDITOR.replace(\'content['.$code->code.']\');'}}
    </script>
    @endforeach
    {{ Form::submit('Módosítás') }}
{{ Form::close() }}
