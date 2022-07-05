<div id="slider" class="banner nivoSlider">
    @foreach($banners as $pic)
    {{HTML::image('uploadfolder/banners/'.$pic->name, '', array('alt' => 'banner'))}}
    @endforeach
</div>
<div class="akt_oldal">
    <div class="bemutatkozas">
        <div class="kor_kep">
            {{HTML::image('assets/images/szilvi.jpg', '', array('alt' => 'SCHMIEDMEISZTER SZILVIA'))}}
        </div>
        <div>
            <h1>{{trans('pages.rolunk_nev2')}}</h1>
            <p>{{trans('pages.paragraph_szilvia_mind')}}</p>
        </div>
    </div>
</div>