<h1>Mostani tagok</h1>
@foreach($current_members as $pic)
    <div class="korustag">
        <div class="korustag_kep">
            <img src="{{url('/uploadfolder/members/'.$pic->source)}}">

        </div>
        <div class="korustag_neve">
            <h2>{{$pic->name}}</h2>
        </div>
    </div>
@endforeach
<h1>Volt tagok</h1>
@foreach($old_members as $pic)
    <div class="korustag">
        <div class="korustag_kep">
            <img src="{{url('/uploadfolder/members/'.$pic->source)}}">

        </div>
        <div class="korustag_neve">
            <h2>{{$pic->name}}</h2>
        </div>
    </div>
@endforeach
