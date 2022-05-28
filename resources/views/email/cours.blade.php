


@extends('layouts.app')
@section('content')

<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Matière</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/matiere">Matière</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ajouter</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue">Entrer une matière</h4>
            <p class="mb-30 font-14"></p>
        </div>
    </div>
    <form  method="POST" action="{{route('cours.store') }}"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Choisir la ou les classes</label>
            <select class="custom-select2 form-control  @error('classes') is-invalid @enderror" multiple="multiple" style="width: 100%;"
            placeholder="Choisir la ou les classes" name="option">
                @if(count($classes) > 0)
                @foreach($classes as $classe)
                <option value="{{ $classe->id }}">{{ $classe->nom }}</option>
                @endforeach
                @endif
            </select>
            @error('classes')
            <div class="form-control-feedback col-sm-12 col-md-10 has-danger">{{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
        <label for="fname">Nom du cours:</label>
        <input placeholder="Nom du cours" type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" 
        name="name" id="name" value="@if($route == 'cours.index'){{old('name')}}@else{{$cours->name}}@endif" required />
        @error('name')
            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
        @enderror
        </div>
        <div class="form-group">
        <label for="phone">Choisir le cours :</label><br>
        <input type="file"  name="file" id="file" class="upload-button btn iq-bg-primary form-control-solid" accept=".doc, .pdf, .txt">
         <!-- <input type="file" class="form-control form-control-solid @error('file') is-invalid @enderror" name="file" id="file" value="@if($route == 'cours.index'){{old('credit')}}@else{{$cours->file}}@endif" required /> -->
            @error('file')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
        </div>
        <button type="submit" class="btn btn-info" style="margin-left:90%;"><i class="icon-copy fa fa-plus-square"
                aria-hidden="true"></i>&nbsp;Publier</button>
    </form>
</div>
@endsection
