@extends('layouts.app_back')

@section('content')

<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <form class="form" method="POST" action="{{route('Enseignements.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Créer un Enseignement</h4>
                                </div>
                                </div>
                                    <div class="iq-card-body">
                                        <div  id="elm">
                                            <div class="copie">
                                            <hr>
                                            <h5 class="mb-3"></h5>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="fname">Name:</label>
                                                        <input placeholder="Nom de enseignement" type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" 
                                                            name="name[]" id="name" value="@if($route == 'Enseignements.create'){{old('name')}}@else{{$enseignement->name}}@endif" required />
                                                        @error('name')
                                                            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger name" ></strong></span>
                                                    <div class="form-group col-md-6">
                                                        <label for="phone">Credit :</label>
                                                        <input type="number" class="form-control form-control-solid @error('credit') is-invalid @enderror" name="credit[]" id="credit" value="@if($route == 'Enseignements.create'){{old('credit')}}@else{{$enseignement->credit}}@endif" required />
                                                        @error('credit')
                                                            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger credit" ></strong></span>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label>Option:</label>
                                                        <select class="form-control select2"  name="option_id[]" id="selectuserrole" required>
                                                        @foreach($options as $id => $option)
                                                        <option value="{{ $option->id }}">{{ $option->name }}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger email" ></strong></span>
                                                    <div class="form-group col-md-6">
                                                        <label>Enseignant :</label>
                                                        <select class="form-control select2"  name="enseignant_id[]" id="selectuserrole" required>
                                                        @foreach($enseignants as $id => $enseignant)
                                                        <option value="{{ $enseignant->id }}">{{ $enseignant->name }}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger email" ></strong></span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" value="Enregistrer" style="background-color: #29ca8e; color:white;" class="btn btn mb-5">
                                        <a href = "" style="float: right;"><button style="background-color: #29ca8e; color:white;" class = "btn btn ml-1" title="Ajouter" id="plus"><i class="fa fa-plus"></i></button></a>
                                        <a href = "" style="float: right;"><button style="background-color: #29ca8e; color:white;" class = "btn btn mb-5" title="Ajouter" id="minus"><i class="fa fa-minus"></i></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
