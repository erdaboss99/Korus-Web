@extends('master')
@section('content')




<div class="d-flex justify-content-center">
    <div class="d-flex">
        <div class="d-flex mx-2">
        <button class=" btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#createPost" aria-controls="createPost" style="margin: 20px;">
            <span class="justify-content-center">Bejegyzés létrehozása</span>
        </button>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
  <div class="container-fluid ">
    <div class="collapse" id="createPost">
        <div class="container" data-toggle="collapse">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="d-flex h3 mb-0">
                        Új hír
                    </div>
                    <div class="d-flex btn btn-disabled" aria-hidden="true">   </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('createPost') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="container d-flex flex-column justify-content-center align-items-center">
                        <div class="col-8">
                            <label for="name">Cím</label>
                            <input type="text" name="title" id="title" class="form-control mb-4">
                        </div>
                        <div class="col-8">
                            <label for="description">Szöveg</label>
                            <textarea name="text" rows="4" cols="50" class="form-control mb-4"></textarea>
                        </div>
                        <div class="col-8">
                            <label for="date">Kép</label>
                            <input type="file" name="img" id="img" class="form-control mb-4">
                        </div>
                        <input type="submit" value="Mentés" class="btn btn-light btn-lg m-4 col-4">
                    </div>
                    <input type="hidden" name="code" id="code">
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


<div class="d-flex flex-column">
    <div class="d-flex flex-column mx-2">
        <div class="d-flex justify-content-center">
            <div class="d-flex mb-3 col-sm-10 col-lg-5 align-self-left">
                <h1>Hírek</h1>
            </div>
        </div>
    </div>
</div>



@foreach($data as $item)

<div class="d-flex flex-column">
    <div class="d-flex flex-column mx-2">
        <div class="d-flex justify-content-center">
            <div class="card d-flex mb-3 col-sm-10 col-lg-5 align-self-center">
                <img src="{{ asset('img/news_img/'.$item->header_img) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <a href="{{'/news/'.$item->id}}" class="stretched-link"></a>


                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center" style="margin-bottom: 20px;">
    <form action="{{url('/news/'.$item->id.'/delete/')}}" method="POST">
        @csrf
        <div class="d-flex">
            <div class="d-flex mx-2">
                <input type="text" name="id" value="{{$item->id}}" class="d-none">
                <button class="btn btn-danger align-self-center mb-1">Törlés</button>
            </div>
        </div>
    </form>
</div>

@endforeach

@endsection