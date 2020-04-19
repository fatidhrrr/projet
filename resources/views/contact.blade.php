@extends('layouts/master')
@section('content')

<form action="{{route('contactmail')}}" method="post">
    @csrf
    <div class="form-row mt-5">
        <div class="col-2"></div>
        <div class="form-group col-md-4">
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" data-rule="text"
                data-msg="" />
            <div class="validation"></div>
        </div>
        <div class="form-group col-md-4 mx-auto">
            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom" data-rule="text"
                data-msg="" />
            <div class="validation"></div>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="form-row">
        <div class="col-2"></div>
        <div class="form-group col-md-4">
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                placeholder="Email" />
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="validation"></div>
        </div>
        <div class="form-group col-md-4 mx-auto">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                data-rule="text" data-msg="" />
            <div class="validation"></div>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="form-group col-md-4 mx-auto">
        <input type="message" class="form-control" name="message" id="message" placeholder="Message"
            data-rule="text" data-msg="" />
        <div class="validation"></div>
    </div>
    <div class="form-row mt-5">
        <button type="submit" class="btn btn-primary mx-auto">Envoyer</button>
    </div>
</form>

<link rel="stylesheet" href="{{asset('css/footer.css')}}">

@endsection