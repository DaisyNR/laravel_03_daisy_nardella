<x-layout>
    <!-- Header -->
     <header class="container-fluid header">
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

  
</x-layout>