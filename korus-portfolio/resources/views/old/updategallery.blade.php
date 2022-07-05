@if(Session::has('success'))
<br><span class="warning">{{Session::get('success')}}</span>
@endif
<div id="editgallery_upper">
    <div class="newpost_block">
		{{ Form::open(array('url' => '/gallery/'.$gallery->id.'/update', 'id' => 'editgallery_form')) }}{{ Form::label('editgallery_name', 'Galéria neve:',
                    array('class' => 'newpost_labels')) }}{{ Form::text('name', $gallery->name, array('id' => 'editgallery_name')) }}
		{{ Form::submit('Módosítás') }} 
		<div class="hir-button">
			{{link_to_route('gallery.delete','TÖRLÉS',$gallery->id, array('id' => 'del_gallery', 'onclick' => 'return confirm(\'Biztos, hogy törölhető a galéria?\');'))}}
		</div>
		{{ Form::close() }}

    </div>

    <div class="newpicture_block">
		{{ Form::open(array('url' => '/picture/save', 'id' => 'newpicture_form', 'files' => true)) }}
        {{ Form::label('newpicture_file', 'Feltöltendő kép:',
                    array('class' => 'newpost_labels')) }}{{ Form::file('file', array('id' => 'newpicture_file')) }}
		{{ Form::hidden('gallery_id', $gallery->id) }}
		{{ Form::submit('Feltöltés') }}
		{{ Form::close() }}
    </div>
    <div class="newvideo_block">
		{{ Form::open(array('url' => '/video/save', 'id' => 'newvideo_form')) }}
        {{ Form::label('newpicture_name', 'Videó neve:',
			array('class' => 'newpost_labels')) }}{{ Form::text('name', '', array('id' => 'newpicture_name')) }}<br>
        {{ Form::label('newpicture_name', 'Teljes videó URL:',
                    array('class' => 'newpost_labels')) }}{{ Form::text('source', '', array('id' => 'newpicture_source')) }}
		{{ Form::hidden('gallery_id', $gallery->id) }}
		{{ Form::submit('Hozzáadás') }}
		{{ Form::close() }}
    </div>
</div>
<div class="clear"></div>
<div id='update_images'>
    @foreach($gallery->pictures as $pic)
    <div class='up_pic_div'>
		<div class="hir-button up_pic_del">
			{{link_to_route('picture.delete','TÖRLÉS',$pic->id, array('class' => 'del_pic'))}}
		</div>
        <div class='up_pic_holder'>
            {{HTML::image('uploadfolder/images/'.$pic->name, '', array('alt' => $pic->name, 'class' => 'up_pic_img'))}}
        </div>
    </div>
    @endforeach
</div>
<div class="clear"></div>
<div id='update_videos'>
    @foreach($gallery->videos as $vid)
    <div class='up_vid_div'>
        {{'<span class="bold">'.$vid->name.'</span><br>('.$vid->source.')'}} 
		<div class="hir-button up_pic_del">
			{{link_to_route('video.delete','TÖRLÉS',$vid->id, array('class' => 'del_vid'))}}
		</div>
    </div>
    @endforeach
</div>