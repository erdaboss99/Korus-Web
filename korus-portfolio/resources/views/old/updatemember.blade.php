@if(Session::has('success'))
<br><span class="warning">{{Session::get('success')}}</span>
@endif
<div id="editmember_upper">
    <div class="newpicture_block">
		{{ Form::open(array('url' => '/member/save', 'id' => 'newmember_form', 'files' => true)) }}
        {{ Form::label('newmember_file', 'Tag képe:',
                    array('class' => 'newpost_labels')) }}{{ Form::file('file', array('id' => 'newmember_file')) }}<br>
	{{ Form::label('newmember_name', 'Tag neve:',
			array('class' => 'newpost_labels')) }}{{ Form::text('name', '', array('id' => 'newmember_name')) }}
                    {{ Form::submit('Hozzáadás') }}
		{{ Form::close() }}
    </div>
</div>
<div class="clear"></div>
<div id='update_members'>
    @foreach($members as $pic)
    <div class='up_pic_div'>
		<div class="hir-button up_pic_del">
			{{link_to_route('member.delete','TÖRLÉS',$pic->id, array('class' => 'del_pic'))}}
		</div>
        <div class='up_pic_holder'>
            {{HTML::image('uploadfolder/members/'.$pic->source, '', array('alt' => $pic->name, 'class' => 'up_pic_img'))}}
        </div>
    </div>
    @endforeach
</div>