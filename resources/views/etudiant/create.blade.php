@extends('layouts.master')
@section('content')
<section>
    <div class="container">
            <div class="row">
                <div class="col-12 text-center pt-4">
                    <h1 class="display-1 text-light">
                        AJOUTER UN ETUDIANT
                    </h1>
                </div> <!--/col-12-->
            </div><!--/row-->
            <hr class="h1-css2">

            <div class="row justify-content-center pt-4">
                <div class="col-md-6">
                    <div class="card">
                        <form action="/etudiant-create" method="post">
                        @csrf
                            <div class="card-header">
                                Formulaire
                            </div>

                            <div class="card-body">   
                                    <div class="control-grup col-12">

                                        <label for="name">FullName:</label>
                                        <input type="text" id="name" name="name" class="form-control">


                                        <label for="address">Address:</label>
                                        <input type="text" id="address" name="address" class="form-control">


                                        <label for="phone">Phone:</label>
                                        <input type="tel" id="phone" name="phone" class="form-control">


                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" class="form-control">


                                        <label for="date_of_birth">Date of birth:</label>
                                        <input type="date" id="date_of_birth" name="date_of_birth" class="form-control">

                                    </div>

                                    <div class="control-grup col-12">
                                        
                                    <label for="ville">Ville:</label>
                                        <select name="ville_id" id="ville" class="form-control">
                                        <option value="">Selectionner une categorie</option>
                                            @foreach ($villes as $ville)
                                                <option value="{{ $ville->id }}"> {{ $ville->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>

                            <div class="card-footer">
                                <input type="submit" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div><!--/container-->
</section>
@endsection