@extends("master")
@section('content')

<style>

.content{
        width: 70%;
        height: 100%;
        align-self: center;
    }
h1 {
    margin-top:20px;
    font-size:16px;
    font-weight: 400;
    color:#c74c09;
    text-transform: uppercase;
}
.kapcsolat_oszlop{
    width: 390px;
    padding: 0px;
    margin: 0px;
    margin-bottom: 25px;
}

.kapcsolat_div{
    width: 180px;
    float: left;
    padding: 0px;
    margin: 0px;
    margin-top: 35px;
    margin-bottom: 25px;
}

.kapcsolat_bal_aldiv{
    width: 180px;
    margin-bottom: 15px;
    font-size:15px;
    text-align: right;
    font-weight: 400;
    color:#c74c09;
    text-transform: uppercase;
    float: left;
}

.kapcsolat_jobb_aldiv{
    width: 345px;
    margin-left: 50px;
    margin-bottom: 15px;
    font-size:15px;
    text-align: left;
    font-weight: 400;
    float: left;
}
    </style>

<div class="d-flex justify-content-center">
    <div class="content">

        <img src="{{URL::asset('/images/banners/banner.png')}}" alt="banner" width="100%">
{{--<div id="slider" class="banner nivoSlider">
    @foreach($banners as $pic)
    {{URL::asset('uploadfolder/banners/'.$pic->name, '', array('alt' => 'banner'))}}
    @endforeach
</div>--}}
<div class="kapcsolat_oszlop">
    <h1>{{trans('pages.kapcsolat1')}}</h1>
    <div class="kapcsolat_div">
        <div class="kapcsolat_bal_aldiv">
            {{trans('pages.kapcsolat2')}}
        </div>
        <div class="kapcsolat_bal_aldiv">
            {{trans('pages.kapcsolat3')}} 
        </div>
        <div class="kapcsolat_bal_aldiv">
            {{trans('pages.kapcsolat4')}}
        </div>
        <div class="kapcsolat_bal_aldiv">
            {{trans('pages.kapcsolat5')}} 
        </div>
        <div class="kapcsolat_bal_aldiv">                       
            {{trans('pages.kapcsolat6')}} 
        </div>
        <div class="kapcsolat_bal_aldiv">                       
            {{trans('pages.kapcsolat6b')}} 
        </div>
    </div>
    <div class="kapcsolat_div">
        <div class="kapcsolat_jobb_aldiv">
            3300 Eger, Széchenyi u. 1.
        </div>
        <div class="kapcsolat_jobb_aldiv">
            3300 Eger, Kossuth Lajos utca 8.
        </div>
        <div class="kapcsolat_jobb_aldiv">
            +36 36 517 589
        </div>
        <div class="kapcsolat_jobb_aldiv">
            +36 70 282 4948 
        </div>
        <div class="kapcsolat_jobb_aldiv">                       
            egerfiukorus@gmail.com
        </div>
        <div class="kapcsolat_jobb_aldiv">                       
            Felvételi ügyében kérjük keresse telefonon és e-mailben a kórusvezetőt!
        </div>
    </div>
</div>
<div class="kapcsolat_oszlop">
    <h1>{{trans('pages.kapcsolat7')}}</h1>
    <div class="kapcsolat_div">
        <div class="kapcsolat_bal_aldiv">
            {{trans('pages.kapcsolat8')}}
        </div>
        <div class="kapcsolat_bal_aldiv">
            {{trans('pages.kapcsolat9')}}
        </div>
        <div class="kapcsolat_bal_aldiv">
            {{trans('pages.kapcsolat10')}}
        </div>
    </div>
    <div class="kapcsolat_div">
        <div class="kapcsolat_jobb_aldiv">
            <a class="link" href="http://www.eger.egyhazmegye.hu/">http://www.eger.egyhazmegye.hu/</a>
        </div>
        <div class="kapcsolat_jobb_aldiv">
            <a class="link" href="http://www.szentistvanradio.hu/">http://www.szentistvanradio.hu/</a>
        </div>
        <div class="kapcsolat_jobb_aldiv">
            <a class="link" href="http://www.szentistvanradio.hu/">http://www.szentistvanradio.hu/</a>
        </div>
    </div>
    <div class="clear"></div>
</div>
    </div>
</div>

@endsection