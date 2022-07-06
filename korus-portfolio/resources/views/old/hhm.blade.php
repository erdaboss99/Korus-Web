<div id="slider" class="banner nivoSlider">
    @foreach($banners as $pic)
    {{HTML::image('uploadfolder/banners/'.$pic->name, '', array('alt' => 'banner'))}}
    @endforeach
</div>
<div class="akt_oldal">
    <div class="bemutatkozas">
        <div class="kor_kep">
            {{HTML::image('assets/images/margit.jpg', '', array('alt' => 'Hegyesi Hudik Mária'))}}
        </div>
        <div>
            <h1>{{trans('pages.rolunk_nev4')}}</h1>
            <p>{{trans('pages.paragraph_hhm_mind')}}</p>
        </div>
    </div>
</div>