<div class="card" style="">
    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
        <div class="card-body bg-green">
            <h5 class="card-title">{{$title}}</h5>
            <p class="card-text">{{$price}}</p>
            <a href="{{route ('detail',['title'=>$title, 'price'=> $price]) }}" class="btn text-white bg-burgundy">CLICCA QUI...</a>
        </div>
</div>