@extends('layouts.public')
@section('title', 'Mi Casa 503')

@section('meta_tags')
<meta property="og:url"           content="{{route('portada')}}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Mi Casa 503" />
<meta property="og:description"   content="Somos una Empresa Inmobiliaria con más de 17 años de experiencia en el rubro" />
<meta property="og:image"         content="" />
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
<main>

  

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('storage/banners/micasa503.jpg?v1' )}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('storage/banners/integra.jpg' )}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('storage/banners/lopez_asociados.jpg' )}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container" style="margin-top:20px;" >
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col-md-3 " data-aos="fade-up">
        <div class="card shadow p-3 mb-5 bg-body rounded h-100" style="width: 18rem; border:none">
          <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-house-add" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h4a.5.5 0 1 0 0-1h-4a.5.5 0 0 1-.5-.5V7.207l5-5 6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 1 0 1 0v-1h1a.5.5 0 1 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"/>
          </svg>
          <div class="card-body">
            <h3 class="card-text text-center">Propiedad en Renta</h3>
            <p class="card-text">¿Estas buscando rentar una propiedad?. </p>
          </div>
        </div>
      </div>

      <div class="col-md-3" data-aos="fade-up">
        <div class="card shadow p-3 mb-5 bg-body rounded h-100" style="width: 18rem; border:none">
          <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
            <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
            <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z"/>
          </svg>
          <div class="card-body">
            <h3 class="card-text text-center">Propiedad en Venta</h3>
            <p class="card-text">¿Estas buscando rentar una propiedad?. </p>
          </div>
        </div>
      </div>

      <div class="col-md-3" data-aos="fade-up">
        <div class="card shadow p-3 mb-5 bg-body rounded h-100" style="width: 18rem; border:none">
          <svg  class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
            <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
          </svg>
          <div class="card-body">
            <h3 class="card-text text-center">Locales en Renta</h3>
            <p class="card-text">¿Estas buscando rentar una propiedad?. </p>
          </div>
        </div>
      </div>

      <div class="col-md-3" data-aos="fade-up">
        <div class="card shadow p-3 mb-5 bg-body rounded h-100" style="width: 18rem; border:none">
          <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-columns" viewBox="0 0 16 16">
            <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V2zm8.5 0v8H15V2H8.5zm0 9v3H15v-3H8.5zm-1-9H1v3h6.5V2zM1 14h6.5V6H1v8z"/>
          </svg>
          <div class="card-body">
            <h3 class="card-text text-center">Terrenos</h3>
            <p class="card-text">¿En busca de terreno? . </p>
          </div>
        </div>
      </div>

      
    </div>
  </div>

  <div class="container" style="margin-top:50px;" >
    <div class="row">
      <div class="col-md-5 " data-aos="fade-right" data-aos-duration="1000">
      <img src="{{ asset('storage/imagenes/2293970_4.jpg' )}}" class="img-thumbnail shadow p-3 mb-5 bg-body rounded" alt="...">
      </div>
      <div class="col-md-7">
        <div class="row">
          <div class="col-md-12">
            <h6 data-aos="fade-down" data-aos-duration="1000">Sobre Nosotros</h6>
          </div>
          <div class="col-md-12">
            <h2 data-aos="fade-up" data-aos-duration="1000" style="color:#214098; font-family:'Cunia Font'; font-size:4em;">Mi Casa 503</h2>
          </div>
          <div class="col-md-12">
            <p style="font-family:'Oswald Regular'; font-size:2em" data-aos="fade-up" data-aos-duration="1000">MI CASA 503. Somos una Empresa Inmobiliaria con más de 17 años de experiencia en el rubro</p>
            <div class="row" data-aos="fade-up"   data-aos-duration="1000">
              <div class="col-md-6" style="padding:25px" >
                <p style="font-family:'Oswald Regular'; font-size:2em; color:#214098"><i class="bi bi-house-heart-fill"></i> Casa a tu Medida</p>
              </div>
              <div class="col-md-6" style="padding:25px">
                <p style="font-family:'Oswald Regular'; font-size:2em; color:#214098"><i class="bi bi-hourglass-split"></i> Tramite Ágil</p>
              </div>
              <div class="col-md-6" style="padding:25px">
                <p style="font-family:'Oswald Regular'; font-size:2em; color:#214098"><i class="bi bi-award-fill"></i> Profesionalismo</p>
              </div>
              <div class="col-md-6" style="padding:25px">
                <p style="font-family:'Oswald Regular'; font-size:2em; color:#214098"><i class="bi bi-cash-coin"></i> Financiamiento Disponible</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12" style="border-left: 5px solid #214098;" data-aos="fade-left" data-aos-duration="1000">
                <p style="font-family:'Oswald Regular'; font-size:2em" >Te ofrecemos la mejor asesoría inmobiliaria para que puedas adquirir tu casa. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>© 2022 Mi Casa 503. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>
</main>
@endsection
@section('footer')

@endsection