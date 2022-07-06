@if(Session::has('success'))
<br><span class="warning">{{Session::get('success')}}</span>
@endif
<div id="editbanner_upper">
    <div class="newpicture_block">
		{{ Form::open(array('url' => '/banner/save', 'id' => 'newbanner_form', 'files' => true)) }}
        {{ Form::label('newbanner_file', 'Feltöltendő kép:',
                    array('class' => 'newpost_labels')) }}{{ Form::file('file', array('id' => 'newbanner_file')) }}
		{{ Form::submit('Feltöltés') }}
		{{ Form::close() }}
    </div>
</div>
<div id='update_banners'>
    @foreach($banners as $pic)
    <div class='up_ban_div'>
		<div class="hir-button up_pic_del">
			{{link_to_route('banner.delete','TÖRLÉS',$pic->id, array('class' => 'del_pic'))}}
		</div>
        <div class='up_ban_holder'>
            {{HTML::image('uploadfolder/banners/'.$pic->name, '', array('alt' => $pic->name, 'class' => 'up_ban_img'))}}
        </div>
    </div>
    @endforeach
</div>