@extends('layouts/app')

@section('content')

<div class="container wow fadeInUp my-4">
    <div class="row text-center">
      <div class="col-md-12">   
        <h3 class="section-title">About View</h3>
        <div class="section-title-divider"></div>       
      </div>                     
    </div>          
  </div>
  <section id="myMessages" class="wow fadeInRight py-5">
    <div class="container text-center">
        <div class="mb-5">
            <table class="table table-striped">
                <thead class="bg-dark">  
                    <tr>
                        <th scope="col" class="text-center text-white">Id</th>
                        <th scope="col" class="text-center text-white">Image</th>
                        <th scope="col" class="text-center text-white">Soustitre</th>
                        <th scope="col" class="text-center text-white">Tire</th>
                        <th scope="col" class="text-center text-white">description</th>
                        <th scope="col" class="text-center text-white">Action</th>
                    </tr>
                </thead>
             
                <tbody>
                    @foreach ($abouts as $item)
                    <tr>
                    <th scope="row" class="text-center">{{$item->id}}</th>
                    <td class="text-center">
                        <img class="w-25" src="{{asset('storage/'.$item->photo)}}" alt="">
                    </td>
                    <td class="text-center">{{$item->soustitre}}</td>
                    <td class="text-center">{{$item->titre}}</td>
                    <td class="text-center">{{$item->description1}}{{$item->description2}}</td>
                    <td>
                        <form action="{{route('about.edit', $item)}}">
                        @csrf
                        <button class="btn btn-white">
                            <i class="mx-2 text-warning fa-2x fas fa-edit"></i>
                        </button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection