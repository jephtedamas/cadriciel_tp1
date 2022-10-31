@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-6">
                <h1 class="display-1 h1-css2"> {{ config('app.name') }}</h1>
                <p class="txt-ccs2">Pour voir les étudiants, cliquez sur le bouton ci-dessous </p><br>
                <a href="{{route('etudiant.index')}}" class="btn btn-outline-light">Afficher les Étudiants</a>
            </div>
        </div>
    </div>
@endsection