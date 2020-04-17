@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">AddProducts</h1>
@stop

@section('content')

<div class="container">


    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="titre" id="titre" placeholder="titre"
                        data-rule="text" data-msg="" />
                    <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="soustitre" id="soustitre" placeholder="soustitre"
                        data-rule="text" data-msg="" />
                    <div class="validation"></div>
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="file" class="form-control" name="photo" id="photo" placeholder="photo"
                        data-rule="text" data-msg="" />
                    <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="description" id="description" placeholder="description"
                        data-rule="text" data-msg="" />
                    <div class="validation"></div>
                </div>
        </div>
        <div class="text-center ">
            <button type="sumbit" class="btn btnModal btn-dark mx-auto mt-4 modalBtn">Ajouter</button>
        </div>
    </form>

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop