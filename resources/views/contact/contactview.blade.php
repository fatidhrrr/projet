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
                        <th scope="col" class="text-center text-white">Nom</th>
                        <th scope="col" class="text-center text-white">Prénom</th>
                        <th scope="col" class="text-center text-white">Email</th>
                        <th scope="col" class="text-center text-white">Message</th>
                    </tr>
                </thead>
             
                <tbody>
                    @foreach ($contacts as $item)
                    <tr>
                    <th scope="row" class="text-center">{{$item->id}}</th>
                    <td class="text-center">{{$item->nom}}</td>
                    <td class="text-center">{{$item->prenom}}</td>
                    <td class="text-center">{{$item->email}}</td>
                    <td class="text-center">{{$item->message}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection