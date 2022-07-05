<div class="showgallery">
	<div id='images_list'>
		@foreach($gallery->pictures as $pic)
		<div class="egy_galeria">
			<div class="kor_kep_galeria">
				<a href="{{asset('uploadfolder/images/'.$pic->name)}}" class="fancybox" rel="gallery">{{HTML::image('uploadfolder/images/'.$pic->thumbnail,'',array('class' => 'fb_pic'))}}</a>
			</div>
		</div>
		@endforeach
		<div class="clear"></div>
	</div>
	<div id='videos_list'>
		@foreach($gallery->videos as $vid)

		<div class="egy_galeria">
			<div class="kor_kep_galeria">
				<div class='video_holder'>
					<span class='bold'>{{$vid->name}}</span><br>
					<a href="{{$vid->source}}" class="video" rel="v_gallery" title="{{$vid->name}}">{{HTML::image('assets/images/player.png','',array('class' => 'fb_pic'))}}</a>
				</div>
			</div>
		</div>
		@endforeach
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>