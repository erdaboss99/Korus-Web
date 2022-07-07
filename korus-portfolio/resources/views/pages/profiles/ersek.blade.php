@extends("master")
@section('content')

        <img src="{{URL::asset('/images/banners/banner.png')}}" alt="banner" width="100%">

        <div class="akt_oldal">
            <div class="bemutatkozas">
                <div class="kor_kep">
                    <img src="{{URL::asset('images/assets/ternyak.jpg', '', array('alt' => 'Érsek úr'))}}">
                </div>
                <div>
                    <h1>{!!trans('pages.rolunk_nev1')!!}</h1>
                    <p>{!!trans('pages.paragraph_ersek_mind')!!}</p>
                </div>
            </div>
        </div>

@endsection