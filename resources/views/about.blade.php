@extends('layouts/master')
@section('content')

@foreach($abouts as $item)
  <section class="page-section about-heading">
    <div class="container">
    <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('storage/'.$item->photo)}}" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
              <span class="section-heading-upper">{{$item->soustitre}}</span>
                <span class="section-heading-lower">{{$item->titre}}</span>
              </h2>
            <p>{{$item->description1}}</p>
            <p class="mb-0">{{$item->description2}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endforeach

@endsection