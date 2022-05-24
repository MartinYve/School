@extends('layouts.app_back')

@section('content')

<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <form class="form" method="POST" action="{{route('cours.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Créer un cours </h4>
                                </div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn" style="background-color: #29ca8e; color:white;" data-toggle="modal" data-target="#exampleModal">
                                Mes matières
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @foreach($enseignements as $id => $enseignement)
                                           <div class="row">
                                           <h4 style="margin-left: 20px;" >{{ $enseignement->name }}  en {{ $enseignement->option->name }}</h3>.
                                           </div>
                                        @endforeach
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                                    <div class="iq-card-body">
                                        <div  id="elm">
                                            <div class="copie">
                                            <hr>
                                            <h5 class="mb-3"></h5>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="fname">Nom du cours:</label>
                                                        <input placeholder="Nom du cours" type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" 
                                                            name="name" id="name" value="@if($route == 'cours.index'){{old('name')}}@else{{$cours->name}}@endif" required />
                                                        @error('name')
                                                            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger name" ></strong></span>
                                                    <div class="form-group col-md-6">
                                                        <label for="phone">Choisir le cours :</label><br>
                                                       
                                                        <input type="file"  name="file" id="file" class="upload-button btn iq-bg-primary form-control-solid" accept=".doc, .pdf, .txt">
                                                        <!-- <input type="file" class="form-control form-control-solid @error('file') is-invalid @enderror" name="file" id="file" value="@if($route == 'cours.index'){{old('credit')}}@else{{$cours->file}}@endif" required /> -->
                                                        @error('file')
                                                            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger credit" ></strong></span>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label>Choisir la sale de class:</label>
                                                        <select class="form-control select2"  name="option" id="selectuserrole" required>
                                                        @foreach($enseignements as $id => $enseignement)
                                                        <option value="{{ $enseignement->option->id }}">{{ $enseignement->name }}/{{ $enseignement->option->name }}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger email" ></strong></span>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn" style="margin-left:400px; margin-top:20px; background-color: #29ca8e;color:white;">Publier</button>
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
