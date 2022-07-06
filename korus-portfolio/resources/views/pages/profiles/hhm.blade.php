@extends("master")
@section('content')
<style>
    .content{
        width: 70%;
        height: 100%;
        align-self: center;
    }
    .bemutatkozas .kor_kep {
    margin: 0 20px 10px 0;
    text-align:justify;
}
.kor_kep img {
    width: 225px;
    height: 225px;
    border-radius: 112px;
    -webkit-border-radius: 112px;
    -moz-border-radius: 112px;
    float:left;
    filter: grayscale(0%);
    -webkit-filter: grayscale(0%);
    filter: gray;
    -webkit-transition: all .6s ease;
}
.kor_kep img:hover{
    filter: grayscale(100%);
    -webkit-filter: grayscale(100%);
    filter: none;
}
h1 {
    margin-top:20px;
    font-size:16px;
    font-weight: 400;
    color:#c74c09;
    text-transform: uppercase;
}
</style>
<div class="d-flex justify-content-center">
    <div class="content">
        <img src="{{URL::asset('/images/banners/banner.png')}}" alt="banner" width="100%">

        <div class="akt_oldal">
            <div class="bemutatkozas">
                <div class="kor_kep">
                    <img src="{{URL::asset('images/assets/margit.jpg', '', array('alt' => 'Hegyesi Hudik Mária'))}}">
                </div>
                <div>
                    <h1>{!!trans('pages.rolunk_nev4')!!}</h1>
                    <p>{!!trans('pages.paragraph_hhm_mind')!!}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection