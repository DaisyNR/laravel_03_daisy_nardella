<x-layout>

   <div class="container">
    <div class="row justify-content-center">
      <h1 class="text-center text-red display-5 my-4" >{{$user['name']}}</h1>
      <div class="col-12 col-md-6 d-flex ">
        <img src="{{$user['url']}}" class="card-img-top" alt="...">
      </div>
      <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-white">Curiosità:</h2>
        <h3 class="text-white">{{$user['description']}}</h3>
      </div>
    </div>
  </div>

</x-layout>