@extends('layouts.master')
@section('content')
    <section class="container">
        <div class="header py-5">
            <h1 class=" display-2 h1-css2">Liste d'étudiants</h1>
        </div>
        <div class="row justify-content-end">
            <div class="col-md-4">
                <h3 class="display-6 h1-css2">Ajouter un étudiant</h3>
                <div class="pt-2 ">
                    <a href="{{ route('etudiant.create')}}" class="btn btn-outline-light">Ajout</a>
                </div>
                
            </div>
        </div> 
        <div class="pt-5">
        @foreach($etudiants as $etudiant)
            <table class="table align-middle mb-0 bg-secondary.bg-gradient">
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="h1-css2 fs-4">{{ $etudiant->name }}</span>
                                <a href="{{ route('etudiant.show', $etudiant->id) }}" class="fs-5"><i class=" link-light fa-solid fa-eye"></i></a>
                            </div>
                            <div>
                                <p class="fw-semibold txt-ccs3 mb-0">{{ $etudiant->email }}</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        @endforeach
        </div>

        <div class="d-flex mt-4 justify-content-end">
            <span>{{ $etudiants->links() }}</span>
        </div>
        
    </section>
@endsection