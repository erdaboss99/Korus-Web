@extends('master')
@section('content')


        <img src="{{URL::asset('/images/banners/banner.png')}}" alt="banner" width="100%">


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
                            <label for="name">A szöveg nyelve:</label><br>
                            <input type="radio" name="lang" id="hu" checked> Magyar<br>
                            <input type="radio" name="lang" id="en"> Angol<br>
                        </div>
                        <div class="col-8">
                            <label for="name">Cím</label>
                            <input type="text" name="title" id="title" class="form-control mb-4">
                        </div>
                        <div class="col-8">
                            <label for="description">Szöveg</label>
                            <div class = "ck_editor">

    <textarea name="content" id="editor"></textarea>

    <script>
        var element = document.getElementById('editor');

        ClassicEditor
            .create(element)
            .catch(error => {
                console.error(error);
            })
            .then(editor => {
                // When the field is instantiated it notified the UI that it has been loaded.
                var field = new SquidexFormField();

                // Handle the value change event and set the text to the editor.
                field.onValueChanged(function (value) {
                    if (value) {
                        editor.setData(value);
                    }
                });

                // Disable the editor when it should be disabled.
                field.onDisabled(function (disabled) {
                    editor.set('isReadOnly', disabled);
                });

                editor.model.document.on('change', function () {
                    var data = editor.getData();

                    // Notify the UI that the value has been changed. Will be used to trigger validation.
                    field.valueChanged(data);
                });

                editor.ui.focusTracker.on('change:isFocused', function (event, name, isFocused) {
                    if (!isFocused) {
                        // Notify the UI that the value has been touched.
                        field.touched();
                    }
                });
            });
    </script>
                            </div>
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
            <div class="d-flex mb-3 col-sm-10 col-lg-7 align-self-left">
                <h1>Hírek</h1>
            </div>
        </div>
    </div>
</div>



@foreach($data as $item)

<div class="d-flex flex-column">
    <div class="d-flex flex-column mx-2">
        <div class="d-flex justify-content-center">
            <div class="card d-flex mb-3 col-sm-10 col-lg-7 align-self-center">
                <img src="{{ asset('uploadfolder/images/'.$item->header_img) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <div class="read_more">
                        {!!$item->content!!}
                    </div>
                    <a href="{{'/hirfolyam/'.$item->id}}" class="stretched-link"></a>


                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center" style="margin-bottom: 20px;">
    <form action="{{url('/hirfolyam/'.$item->id.'/delete/')}}" method="POST">
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