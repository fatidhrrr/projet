@extends('layouts/app')

@section('content')

      <section id="contact" class="section-bg wow fadeInUp py-5 ">
        <div class="text-center my-5">
            <h3>Formulaire About</h3> 
        </div>
        <div class="container">
            {{-- <section class="form py-5 mt-5 container"> --}}
            <form action="{{route('about.update', $about)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <input type="file" class="form-control" value="{{$about->photo}}" name="photo" id="photo" placeholder="photo"
                        data-rule="text" data-msg=""/>
                        <img class="w-50" src="{{asset("storage/".$about->photo)}}" alt="">
                        <div class="validation"></div> 
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" value="{{$about->soustitre}}" name="soustitre" id="soustitre" placeholder="soustitre"
                        data-rule="text" data-msg="" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" value="{{$about->titre}}" name="titre" id="titre" placeholder="titre"
                                data-rule="text" data-msg="" />
                                <div class="validation"></div>
                            </div>
                    <div class="form-group col-md-6 mx-auto">
                        <input type="text" class="form-control" value="{{$about->description1}}"  name="description1" id="description1" placeholder="description"
                            data-rule="text" data-msg="" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" value="{{$about->description2}}"  name="description2" id="description2" placeholder="description"
                            data-rule="text" data-msg="" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="sumbit" class="btn btnModal btn-dark mx-auto mt-4 modalBtn">Modifier</button>
                </div>
            </form>
        </div>
    </section>
@endsection