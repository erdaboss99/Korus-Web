@extends("master")
@section('content')
    <div class="showgallery">
        <div id='images_list'>
            @foreach($pictures as $pic)
            <div class="egy_galeria">
                <div class="kor_kep_galeria">
                    <img src="{{url('/uploadfolder/images/'.$pic->thumbnail)}}" class="fb_pic">
                </div>
            </div>
            @endforeach
            <div class="clear"></div>
        </div>
        <div id='videos_list'>
            @foreach($videos as $vid)
            <div class="egy_galeria">
                <div class="kor_kep_galeria">
                    <div class='video_holder'>
                        <span class='bold'>{{$vid->name}}</span><br>
                        <a href="{{$vid->source}}" class="video" rel="v_gallery" title="{{$vid->name}}"><img src="{{url('/images/assets/player.png')}}" class="fb_pic"></a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
@endsection

