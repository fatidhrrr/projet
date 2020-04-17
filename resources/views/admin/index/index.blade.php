@extends('layouts/app')

@section('content')

<div class="container wow fadeInUp my-4">
    <div class="row text-center">
      <div class="col-md-12">   
        <h3 class="section-title">Photos</h3>
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
                        <th scope="col" class="text-center text-white">Tire</th>
                        <th scope="col" class="text-center text-white">Texte</th>
                        <th scope="col" class="text-center text-white">Action</th>
                    </tr>
                </thead>
             
                <tbody>
                    @foreach ($photos as $item)
                    <tr>
                    <th scope="row" class="text-center">{{$item->id}}</th>
                    <td class="text-center">
                        <img class="w-25" src="{{asset('storage/'.$item->photo)}}" alt="">
                    </td>
                    <td class="text-center">{{$item->titre}}</td>
                    <td class="text-center">{{$item->text}}</td>
                    <td>
                    <a href="{{route('editPhotos', $item->id)}}" title="Edit">
                               <i class="mx-2 text-warning fa-2x fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection