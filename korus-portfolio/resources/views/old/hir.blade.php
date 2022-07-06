                <div id="slider" class="banner nivoSlider">
                    @foreach($banners as $pic)
                    {{HTML::image('uploadfolder/banners/'.$pic->name, '', array('alt' => 'banner'))}}
                    @endforeach
                </div>
                <div class="akt_oldal">
                    @if(Auth::check() && (Auth::user()->user == 'admin'))
                    <div id="post_admin_row">
                        <div id="post_edit" class="hir-button">{{link_to_route('post.edit','Módosítás',$post->id)}}</div>
                        <div id="post_delete" class="hir-button">{{link_to_route('post.delete','TÖRLÉS',$post->id)}}</div>
                    </div>
                    @endif
                    <h1>{{$post->title}}</h1>
                    <h3>{{explode(' ',$post->created_at)[0]}}</h3>
                    {{$post->content}}
                </div>