@extends('master')

@section('content')

<div class="d-flex flex-column">
    <div class="d-flex flex-column mx-2">
        <div class="d-flex justify-content-center">
            <div class="card d-flex mb-3 col-sm-10 col-lg-8 align-self-center">
            <img src="{{ asset('uploadfolder/images/'.$data->header_img) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1 class="card-title">{{$data->title}}</h1>
                    <p class="card-text">{!!$data->content!!}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
    <div class="d-flex">
        <div class="d-flex mx-2">
        <button class=" btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#createPost" aria-controls="createPost" style="margin: 20px;">
            <span class="justify-content-center">Bejegyzés módosítása</span>
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
                        Módosítás
                    </div>
                    <div class="d-flex btn btn-disabled" aria-hidden="true">   </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('news/'.$data->id.'/update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="container d-flex flex-column justify-content-center align-items-center">
                        <div class="col-8">
                            <label for="name">Cím</label>
                            <input type="text" name="title" id="title" class="form-control mb-4" value="{{$data->title}}">
                        </div>
                        <div class="col-8">
                            <label for="text">Szöveg</label>
                            <textarea name="text" rows="4" cols="50" class="form-control mb-4">{{$data->text}}</textarea>
                        </div>
                        <div class="col-8">
                            <label for="img">Kép</label>
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

@endsection