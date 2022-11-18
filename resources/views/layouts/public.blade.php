<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- Custom Meta Tags --}}
        @yield('meta_tags')
        {{-- Google Web Fonts --}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 
        
        {{-- Font Awesome --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
        

        {{-- bootstrap 5 --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        {{--icon font awesome --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <script src="https://kit.fontawesome.com/3ca5e22ac9.js" crossorigin="anonymous"></script>

        {{-- css web --}}
        <link rel="stylesheet" href="{{ asset('vendor/templatePublic/css/style.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        @yield('jshead')

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2052114492704391"
     crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div class="container-fluid text-center d-sm-none d-md-block d-none d-sm-block" style="background:#000;">
        <div class="row">
            <div class="col-md-3" style="padding:5px">
              <a class="enlacesHeader" href="mailto:info@micasa503.com"><i class="bi bi-envelope-at-fill"></i> info@micasa503.com</a>
            </div>
            <div class="col-md-3" style="padding:5px">
              <a class="enlacesHeader" href="tel:+50360208884"><i class="bi bi-telephone"></i> +503 6020-8884</a>
            </div>
            <div class="col-md-3" style="padding:5px">
              <a class="enlacesHeader" > <i class="bi bi-geo-alt"></i> San Miguel, El Salvador</a>
            </div>
            <div class="col-md-3" style="padding:5px">
              <a class="enlacesHeader" href="https://www.facebook.com/micasa503sv" target="top"><i class="bi bi-facebook"></i></a>
              <a class="enlacesHeader" href="https://wa.me/50360208884" target="top" ><i class="bi bi-whatsapp"></i></a>
              <a class="enlacesHeader" href="https://www.instagram.com/micasa503sv/" target="top" ><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-md ">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="{{ asset('storage/logo/mi_casa_503.svg' )}}" width="100" class="img-fluid" alt="logo empresa"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ">Propiedades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ">Contactenos</a>
          </li>
          
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Busqueda..." aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Bucas</button>
        </form>
      </div>
    </div>
  </nav>
</header>

@section('sidebar')
@show

@yield('content')

@yield('footer')

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init();
        </script>
        @yield('js')
       
</body>
</html>