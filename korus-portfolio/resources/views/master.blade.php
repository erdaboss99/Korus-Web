<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/ystie.css" rel="stylesheet">

    <title>Egri Érseki Fiúkórus</title>
</head>
<body>
    <div class="header">
    
    <div class="container-fluid">
        <div class="row">
          <div class="col p-3">
            <div style="height: 90px" class="container-fluid d-flex justify-content-center">
                <div style="width: 144px; margin: 0">
                    <a href="{{url('/')}}"><img src="{{URL::asset('/images/assets/logo_terra.png')}}" alt="logo" height="100"></a>
                </div>
            </div>
          </div>
        </div>
      </div>

    <nav class="navbar navbar-expand-sm col" style="padding: 10px">
        

        <div class="container-fluid d-flex justify-content-center">
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link menupont" href="{{url('/rolunk')}}">A KÓRUS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menupont" href="#">HÍRFOLYAM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menupont" href="#">GALÉRIA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menupont" href="#">ESEMÉNYNAPTÁR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menupont" href="{{url('/kapcsolat')}}">KAPCSOLAT</a>
              </li>
          </ul>
        </div>
      
      </nav>

    </div>
    <div class="">
      @yield('content')
    </div>
    
    @include('pages.footer')
</body>
</html>