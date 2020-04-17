@extends('layouts/app')

@section('content')

      <section id="contact" class="section-bg wow fadeInUp py-5 ">
        <div class="text-center my-5">
            <h3>Formulaire Photo</h3> 
        </div>
        <div class="container">
            {{-- <section class="form py-5 mt-5 container"> --}}
            <form action="{{route('updatePhotos', $index->id)}}" method="POST" class="contactForm" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="file" class="form-control" name="photo" id="photo" placeholder="photo"
                        data-rule="text" data-msg=""/>  
                        <div class="validation"></div> 
                    </div>
                </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="titre" id="titre" placeholder="titre"
                            data-rule="text" data-msg="" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="text" id="text" placeholder="text"
                        data-rule="minlen:4" data-msg="" />
                    <div class="validation"></div>
                </div>
                <div class="text-center ">
                    <button type="sumbit" class="btn btnModal btn-dark mx-auto mt-4 modalBtn">Ajouter</button>
                </div>

            </form>
        </div>
    </section>
@endsection