<x-layout>
  <h1 class="text-white my-4 text-center">Annunci</h1>
    
    <!-- Card -->
    <div class="container">
        <div class="row justify-content-center align-items-center">

            @foreach ( $articles as $article)

              <div class="col-12 col-md-3">
                  <x-card :title="$article['title']"
                    :price="$article['price']">
                  </x-card>
              </div>

            @endforeach
        </div>
</div>
</x-layout>