@extends('layouts.main')
@section("content")

    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url({{ asset("audh/image4.jpg") }});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route("home") }}">Acceuil</a></span> <span >Evenement</span></p>
            <h1  class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.5 }">Evenement</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section">
      <div class="container">
        <div class="row">
            @foreach ($events as $item)
                    <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset("storage/storage/uploads/".$item->photo) }}');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</a></div>
                  <div><a href="#">Admin</a></div>
                  <div></div>
                </div>
                <h3 class="heading mb-4"><a href="#">{{ $item->title }}</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i>{{$item->day_event}}</span> <span><i class="icon-map-o"></i> </span></p>
                <p>{{ \Illuminate\Support\Str::limit($item->description, 100, "...") }}</p>
                <p><a href="event.html"> <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
            @endforeach
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


@endsection
