@extends('master')
@section('content')
<div class="  custom-product">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner ">

            @foreach ($products as $key => $product)

                    <div class="carousel-item {{ $key == 0 ? 'active':'' }} ">
                        <a href="detail/{{$product->id  }}">
                            <img src="{{ $product->gallery }}" class="d-block w-100 slider-img" alt="...">
                            <div class=" slider-text  carousel-caption d-none d-md-block">
                            <h5>{{ $product->name }}</h5>
                            <p>{{ $product->description}}</p>
                    </div>
                        </a>
                    </div>
          @endforeach

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="trending-wrapper">
        <h3>Treding Products</h3>
        @foreach ($products as $product )

        <div class="trening-item ">
                <a href="detail/{{$product->id  }}">
                        <img src="{{ $product->gallery }}" class="trending-image" alt="...">
                        <div class="">
                        <h5>{{ $product->name }}</h5>

                        </div>
                </a>
                    </div>
        @endforeach
        </div>

</div>

@endsection

