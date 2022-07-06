<div id="slider" class="banner nivoSlider">
    @foreach($banners as $pic)
    {{HTML::image('uploadfolder/banners/'.$pic->name, '', array('alt' => 'banner'))}}
    @endforeach
</div>
@if(!empty($notFound))
<p>Nincsenek hírek!</p>
@else
        @if(Session::has('success'))
            <br><span class="warning">{{Session::get('success')}}</span>
        @endif
        <div class="akt_oldal">
@foreach($posts as $post)
                    <div class="hir">
                        <h1>{{link_to_route('post.show',$post->title,$post->id)}}</h1>
                        <h3>{{explode(' ',$post->created_at)[0]}}</h3>
			<div class="hir_szoveg">
                            <p>
                                {{$post->read_more}}
                                {{link_to_route('post.show',trans('pages.tovabb'),$post->id)}}
                            </p>
			</div>
                    </div>
@endforeach
        </div>
        {{$posts->links()}}
@endif