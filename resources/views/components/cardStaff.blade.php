    <div class="card bg-green mt-4" style="">
        <img src="{{$url}}" class="card-img-top" alt="...">
        <div class="card-body card-custom">
            <h5 class="card-title">{{$name}}</h5>
            <p class="card-text">{{$description}}</p>
            <a href="{{route('dettaglio',['name'=>$name])}}" class="btn bg-red">LEGGI TUTTO...</a>
        </div>
    </div>