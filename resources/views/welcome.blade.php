<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amarante&family=Genos:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- Boostrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
     <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg bg-green fixed-top">
        <div class="container-fluid">

        <div class="px-2 text-red logo" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278"/>
            </svg>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item mx-2">
                <a class="nav-link" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="{{route('articoli')}}">Annunci</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="{{route('about.us')}}">Chi siamo</a>
              </li>
            </ul>
        </div>

        <div class="px-2 text-red logo moon" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278"/>
            </svg>
        </div>

        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header -->
     <header class="container-fluid">
        <div class="row vh-100 align-items-center header">
            <div class="col-12">
                <h1 class="display-1 text-center text-red">{{$title}}</h1>
                <div class="d-flex justify-content-center">
                  <a href="{{route('articoli')}}">
                    <button class="btn btn-custom text-red">ANNUNCI</button>
                  </a>
                  <a href="{{route('about.us')}}">
                    <button class="btn btn-custom text-red">CHI SIAMO</button>
                  </a>
                </div>
            </div>
        </div>
     </header>
    <!-- Header End -->

   <!-- Positioned -->
    <section class="container-fluid bg-riflesso">
      <div class="row rotate mx-5 positioned justify-content-center">
        <div class="col-12 col-md-4 d-flex justify-content-center bg-green flex-column align-items-center col-custom">
          <i class="bi bi-emoji-sunglasses icon text-dgreen"></i>
          <h3 class="my-2 rotate-icon">Goditi il sole Californiano</h3>
          <p class="lead px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ipsum tempore velit beatae explicabo. Praesentium quasi, laboriosam sunt numquam iure ipsam eius vitae voluptatem soluta, quia, fuga cumque perspiciatis accusamus!</p>
        </div>
        <div class="col-12 col-md-4 d-flex justify-content-center bg-green flex-column align-items-center col-custom">
          <i class="bi bi-tsunami icon text-dgreen"></i>
          <h3 class="my-2 rotate-icon">Nuota nel mare cristallino</h3>
          <p class="lead px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eius soluta, at incidunt voluptas alias tempore, tempora unde molestias, rem et similique quod amet. Deserunt consectetur minus pariatur voluptatibus dolores.</p>
        </div>
        <div class="col-12 col-md-4 d-flex justify-content-center bg-green flex-column align-items-center col-custom">
          <i class="bi bi-cup-straw icon text-dgreen"></i>
          <h3 class="my-2 rotate-icon">Prova i nostri cocktail</h3>
          <p class="lead px-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus dignissimos distinctio obcaecati numquam. Error minima, natus incidunt aut eaque, sit eum ipsum amet delectus temporibus eius officia! Reiciendis, reprehenderit voluptas?</p>
        </div>
      </div>
    </section>
  <!-- Positioned End -->

  <!-- Numeri Incrementali -->
   <section class="container">
    <div class="row">
      <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
        <img src="./media/receptionistt.jpg" alt="twins" class="img-fluid img-custom">
      </div>
      <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
        <h3 class="text-center text-red">Cifre rassicuranti</h3>
        <p class="text-white"><span class="number" id="firstNumber">0</span>Qui vorrei usare JS per i numeri incrementali</p>
        <p class="text-white"><span class="number" id="secondNumber">0</span>Non so ancora come si faccia</p>
        <p class="text-white"><span class="number" id="thirdNumber">0</span>Lascio qui per modificare più avanti una volta appreso il procedimento</p>
      </div>
    </div>
   </section>
  <!-- Numeri Incrementali End-->

  <!-- Recensioni -->
   <!-- Slider main container -->
<div class="swiper swiper-custom">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
  </div>
  <!-- Recensioni End -->

   
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
   
  </body>
</html>