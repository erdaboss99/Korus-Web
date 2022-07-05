<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            font-size:14px;
            color:#515862;
            margin: 0;
	        line-height: 200%;
        }
        .nav-link{
        color: white;
        }
        .nav-link:hover{
        color: #4e1d03;
        }
        .header{
            background-color:#c64c09;
            height:160px;
            width:100%;
            position:relative;
	        z-index:100
        }
        .navbar{
            font-size: 18px; color: white;
            background-color:#c64c09;
        }
    </style>

    <title>Document</title>
</head>
<body>
    <div class="header">
    
    <div class="container-fluid">
        <div class="row">
          <div class="col p-3">
            <div style="height: 90px" class="container-fluid d-flex justify-content-center">
                <div style="width: 144px; margin: 0">
                    <a href="{{url('/')}}"><img src="{{URL::asset('/images/assets/logo_terra.png')}}" alt="profile Pic" height="100"></a>
                </div>
            </div>
          </div>
        </div>
      </div>

    <nav class="navbar navbar-expand-sm col">
        

        <div class="container-fluid d-flex justify-content-center">
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">A KÓRUS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">HÍRFOLYAM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">GALÉRIA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ESEMÉNYNAPTÁR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">KAPCSOLAT</a>
              </li>
          </ul>
        </div>
      
      </nav>

    </div>
    
</body>
</html>