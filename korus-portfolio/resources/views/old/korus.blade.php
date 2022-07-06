<div id="slider" class="banner nivoSlider">
    @foreach($banners as $pic)
    {{HTML::image('uploadfolder/banners/'.$pic->name, '', array('alt' => 'banner'))}}
    @endforeach
</div>
<div class="akt_oldal">
    <div class="bemutatkozas">
        <div class="kor_kep">
        </div>
        <div>
            <h1>{{trans('pages.rolunk_cim1')}}</h1>
            <p>{{trans('pages.paragraph_1_mind')}}</p>
        </div>
    </div>
</div>
