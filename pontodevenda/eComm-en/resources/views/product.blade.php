@extends('master')
@section('content')
<div class="  custom-product">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner ">

            @foreach ($products as $key => $product)

                    <div class="carousel-item {{ $key == 0 ? 'active':'' }} ">
                    <img src="{{ $product->gallery }}" class="d-block w-100 slider-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $product->name }}</h5>
                    <p>{{ $product->description}}</p>
                    </div>
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

</div>

@endsection

