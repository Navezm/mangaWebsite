<section class="container">
   <div class="row d-flex justify-content-center">
        @foreach ($DBmanga as $item)
            <div class="card col-5 m-2">
                <div class="d-flex justify-content-center">
                    <img src="{{asset($item->src)}}" class="card-img-top w-75 h-100" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-text">{{$item->author}}</p>
                    <p class="card-text">{{$item->genre}}</p>
                    <p class="card-text">{{$item->description}}</p>
                </div>
            </div>
        @if ($loop->iteration % 2==0)
        </div>
        <div class="row d-flex justify-content-center">
        @endif
        @endforeach
   </div>
</section>w