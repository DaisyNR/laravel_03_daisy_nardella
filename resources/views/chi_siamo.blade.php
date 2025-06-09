<x-layout>
  <h1 class="text-red text-center my-3">Chi siamo</h1>
    <!-- Card -->
    <div class="container">
        <div class="row justify-content-center align-items-center">

            @foreach ( $users as $user)

              <div class="col-12 col-md-3">
                <x-cardStaff :name="$user['name']" :description="$user['description']" :url="$user['url']"></x-cardStaff>
                 
              </div>

            @endforeach
        </div>
    </div>
<!-- Fine Card -->


   


</x-layout>