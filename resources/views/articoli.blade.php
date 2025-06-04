<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presto</title>
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

  <body class="bg-burgundy">
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid">

        <div class="px-2 text-red logo" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-moon-fill text-white" viewBox="0 0 16 16">
            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278"/>
            </svg>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item mx-2">
                <a id="navBlue" class="nav-link" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item mx-2">
                <a id="navBlue" class="nav-link" href="{{route('articoli')}}">Annunci</a>
              </li>
              <li class="nav-item mx-2">
                <a id="navBlue" class="nav-link" href="{{route('about.us')}}">Chi siamo</a>
              </li>
            </ul>
        </div>

        <div class="px-2 text-red logo moon" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-moon-fill text-white" viewBox="0 0 16 16">
            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278"/>
            </svg>
        </div>

        </div>
    </nav>
    <!-- Navbar End -->
    <h1 class="text-white my-4 text-center">Annunci</h1>
    
    <!-- Card -->
    <div class="container">
        <div class="row justify-content-center align-items-center">

            @foreach ( $articles as $article)

              <div class="col-12 col-md-3">
                  <div class="card" style="">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                      <div class="card-body bg-green">
                        <h5 class="card-title">{{$article['title']}}</h5>
                        <p class="card-text">{{$article['price']}}</p>
                        <a href="{{route ('detail',['title'=>$article['title']]) }}" class="btn text-white bg-burgundy">CLICCA QUI...</a>
                      </div>
                  </div>
              </div>

            @endforeach
        </div>
    </div>
<!-- Fine Card -->
  
   


    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <!-- Custom JS -->
     <script src="./annunci.js"></script>
  </body>
</html>