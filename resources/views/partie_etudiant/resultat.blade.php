@extends('layouts.etudiant')
@section('head')
<style>
    #for {
        margin-right: 100px;
        margin-left: -150px;
    }
</style>
@endsection
@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <br><br><br>
            <div class="title">
                <h4>QCM</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/matiere_etudiant">Matiéres</a></li>
                    <li class="breadcrumb-item"><a href="/get_niveau/{{$qcm->niveau->matiere->id}}">Niveaux</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Resultat</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
    <div class="clearfix mb-20">
        <div class="pull-left">
            <h4 class="text-blue">Mon Resultat</h4>
            <p> Qcm :<code> {{$qcm->nom}}</code> </p>
        </div>
        <div class="pull-right">
            <div>
                @if(URL::previous()!="http://localhost:8000/profile_etudiant")
                <a class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"
                    href="/get_niveau/{{$qcm->niveau->matiere->id}}">
                    <i class="icon-copy fa fa-angle-double-left" aria-hidden="true"></i>
                    Retour</a>
                @else
                <a class="btn" data-bgcolor="#1da1f2" data-color="#ffffff" href="/profile_etudiant">
                    <i class="icon-copy fa fa-angle-double-left" aria-hidden="true"></i>
                    Retour</a>
                @endif
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom ELEVE</th> 
                    <th>QCM</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                <td>{{$etudiant->id}}</td>
                <td class="table-success">{{$etudiant->nom}}</td>
                <td>{{$qcm->nom}}</td>
                <td class="table-danger">{{$note}}</td>
        </table>
    </div>
    <hr>
    <br>
    <h5 style="color:#CD5C5C;"><b>Les questions et les réponses</b></h5>
    <br>
    @if(count($qcm->questions) > 0)
    @foreach($questions as $question)
    <div class="table-responsive">
        <table class="table">
            <tbody>
               
                <tr class="table-success">
                    <th scope="row" width="20%">Question:</th>
                    <td width="80%">{{$question->question}}?</td>
                </tr>
              
                <tr class="table-warning">
                    <th scope="row">Note</th>
                    <td><span class="badge badge-info">{{$question->note}}</span></td>
                </tr>
                <tr class="table-primary">
                    <th scope="row" width="20%">Options :</th>
                    <td width="80%">
                        <ul>
                            <li><span class="badge badge-info">A </span>
                                {{$question->choix1}}</li>
                            <li><span class="badge badge-info">B </span>
                                {{$question->choix2}}</li>
                            <li> <span class="badge badge-info">C </span>
                                {{$question->choix3}}</li>
                            <li> <span class="badge badge-info">D </span>
                                {{$question->choix4}}</li>
                        </ul>
                    </td>
                </tr>
                <tr class="table-info">
                    <th scope="row" width="20%"> Ta réponse :</th>
                    <td width="80%">
                        @if($question->choix1 === $reponse)
                        <span class="badge badge-danger">A</span>
                        @endif
                        @if($question->choix2 === $reponse)
                        <span class="badge badge-danger">B</span>
                        @endif
                        @if($question->choix3 === $reponse)
                        <span class="badge badge-danger">C</span>
                        @endif
                        @if($question->choix4 === $reponse)
                        <span class="badge badge-danger">D</span>
                        @endif
                    </td>
                </tr id="bleu">
                <tr class="table-primary">
                    <th scope="row" width="20%"> La réponse correcte :</th>
                    <td width="80%">
                        @if($question->reponse1 === "vrai")
                        <span class="badge badge-success">A</span>
                        @endif
                        @if($question->reponse2 === "vrai")
                        <span class="badge badge-success">B</span>
                        @endif
                        @if($question->reponse3 === "vrai")
                        <span class="badge badge-success">C</span>
                        @endif
                        @if($question->choix4 !== null)
                        @if($question->reponse4 === "vrai")
                        <span class="badge badge-success">D</span>
                        @endif
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br><br>

    @endforeach
    @endif
</div>
<!-- Contextual classes End -->
</div>
@endsection
