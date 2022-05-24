@extends('layouts.app_back')

@section('content')

<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

        <div id="content-page" class="content-page">
            <div class="container-fluid">
        
                <div class="iq-card">
                    <div class="iq-card-body">
                        <form class="form" method="POST" action="{{route('CahierTexte.store') }}" enctype="multipart/form-data">
                                        @csrf
                            <div class="col-lg-12">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                    <h4 class="card-title">Remplir le cahier de texte</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div class="new-user-info">
                                    <hr>
                                    <h5 class="mb-3">Periode</h5>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Sélectionnez le jour :</label>
                                            <select class="form-control select2"  name="jour" id="selectuserrole" required>
                                                    <option value="lundi">{{ 'Lundi' }}</option>
                                                    <option value="Mardi">{{ 'Mardi' }}</option>
                                                    <option value="Mercredi">{{ 'Mercredi' }}</option>
                                                    <option value="Jeudi">{{ 'Jeudi' }}</option>
                                                    <option value="Vendredi">{{ 'Vendredi' }}</option>
                                                    <option value="Samedi">{{ 'Samedi' }}</option>
                                                    <option value="Dimanche">{{ 'Dimanche' }}</option>
                                            </select>
                                        </div>
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger jour" ></strong></span>
                                        <div class="form-group col-md-6">
                                            <label>Entrez l'heure :</label>
                                            <input placeholder="Exemple : 7H00 - 10H00" type="text" class="form-control form-control-solid" name="heure" id="heure" required />
                                        </div>
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger heure" ></strong></span>
                                    
                                    </div>
                                    <hr>
                                    <h5 class="mb-3">Information sur le cours</h5>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Sélectionnez le nom de l'enseignant :</label>
                                            <select class="form-control select2"  name="enseignant" id="selectuserrole" required>
                                                @foreach($enseignants as $enseignant)
                                                    <option value="{{ $enseignant->name }}">{{ $enseignant->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger enseignant" ></strong></span>
                                    
                                        <div class="form-group col-md-6">
                                            <label>Sélectionnez la Matière de l'enseignant:</label>
                                            <select class="form-control select2"  name="enseignement" id="selectuserrole" required>
                                                @foreach($enseignements as $enseignement)
                                                    <option value="{{ $enseignement->name }}">{{ $enseignement->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger enseignement" ></strong></span>
                           
                                            <div class="form-group col-md-12">
                                                <label>Contenu du cours :</label>
                                            </div>
                                            
                                            <div class="form-group col-md-12">
                                                <textarea  rows="5" cols="100" placeholder="Entrez le contenu du cours"  class="form-control form-control-solid" name="contenu" id="contenu"> </textarea>
                                            </div>
                                            <span class="form-text text-muted" role="alert"><strong class="text-danger contenu" ></strong></span>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
     
            </div>
        </div>
@endsection
