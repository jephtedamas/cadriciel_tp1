@extends('layouts.master')
@section('content')
<section>
    <div class="container pt-6">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="{{ route('etudiant.index')}}" class="btn btn-outline-light btn-sm">Retourner</a>
                <div class="text-light">
                    <h4 class="display-one mt-5">{{ $etudiant->name }}</h4>
                    <p><span>Date de naissance:</span> {{ $etudiant->date_of_birth }}</p>
                    <hr>
                        <p><span>Numéro étudiant:</span> {{ $etudiant->id }}</p>
                        <p><span>Adresse:</span> {{ $etudiant->address }}</p>
                        <p><span>Téléphone:</span> {{ $etudiant->phone }}</p>
                        <p><span>Courriel:</span> {{ $etudiant->email }}</p>
                        <p><span>Ville:</span> {{ $etudiant->ville_id }}</p>
                    <hr>
                </div>           
            </div>
        </div>


        <div class="row">
            <div class="col-6">
                <a href="{{ route('etudiant.edit', $etudiant->id)}}" class="btn btn-outline-light">Mettre a jour</a>
            </div>
            <div class="col-6">
                <form action="{{route('etudiant.edit', $etudiant->id)}}" method="post">
                @method('DELETE')
                @csrf
                    <input type="submit" class="btn btn-danger" value="Effacer">
                </form>
            </div>
        </div>
    </div>
</section>
@endsection