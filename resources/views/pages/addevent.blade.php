@extends('layouts.app')
@section('content')

    <div class="content-wrapper">
        <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ajouter un Evenement</h4>
                        <p class="card-description">
                            formulaire d'ajout d'un evenement
                        </p>
                        <form class="forms-sample" action="{{ route("event.store") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6">
                                   Heure et date
                                </div>
                                <div class="col-md-6">
                                    <input type="datetime-local" name="" id="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">titre</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" id="exampleInputUsername2"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image[]" class="form-control" id="exampleInputEmail2" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 card-form-label" for="description">description</label>
                                <textarea class="form-control-lg" name="description" rows="3" id="description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">enregistrer</button>
                            <button class="btn btn-light">Annuler</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
