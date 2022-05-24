



@extends('layouts.appP')

@section('content')

<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>
<div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Emplois de temps {{$option->name}} </h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <div class="row justify-content-between">
                           </div>
                           <table id="example" class="table table-striped table-bordered" role="grid" aria-describedby="user-list-page-info">
                             <thead>
                                 <tr>
                                    <th>heure</th>
                                    <th>Lundi</th>
                                    <th>Mardi</th>
                                    <th>Mercredi</th>
                                    <th>Jeudi</th>
                                    <th>Vendredi</th>
                                    <th>Samedi</th>
                                    <th>Dimanche</th>
                                 </tr>
                             </thead>
                             <tbody>
                                <tr>
                                    <th>7H00/9H00</th>   
                                   <th>
                                        @foreach ($option->Enseignements as $key2 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Lundi" &&  $value->heure_dep == "7H00" && $value->heure_fin == "9H00")
                                                            {{$aff->name}}
                                                        @elseif($key2 == $count)
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                   </th>  
                                    <th>
                                        @foreach ($option->Enseignements as $key4 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mardi" &&  $value->heure_dep == "7H00" && $value->heure_fin == "9H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach   
                                    </th>
                                    <th>
                                        @foreach ($option->Enseignements as $key5 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mercredi" &&  $value->heure_dep == "7H00" && $value->heure_fin == "9H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach 
                                    </th>  
                                    <th>
                                        @foreach ($option->Enseignements as $key6 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Jeudi" &&  $value->heure_dep == "7H00" && $value->heure_fin == "9H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Vendredi" &&  $value->heure_dep == "7H00" && $value->heure_fin == "9H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Samedi" &&  $value->heure_dep == "7H00" && $value->heure_fin == "9H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Dimanche" &&  $value->heure_dep == "7H00" && $value->heure_fin == "9H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                </tr>    
                                <tr>
                                    <th>9H00/11H00</th>       
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Lundi" &&  $value->heure_dep == "9H00" && $value->heure_fin == "11H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mardi" &&  $value->heure_dep == "9H00" && $value->heure_fin == "11H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mercredi" &&  $value->heure_dep == "9H00" && $value->heure_fin == "11H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Jeudi" &&  $value->heure_dep == "9H00" && $value->heure_fin == "11H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Vendredi" &&  $value->heure_dep == "9H00" && $value->heure_fin == "11H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Samedi" &&  $value->heure_dep == "9H00" && $value->heure_fin == "11H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Dimanche" &&  $value->heure_dep == "9H00" && $value->heure_fin == "11H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                </tr>    
                                <tr>
                                    <th>11H00/13H00</th>       
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Lundi" &&  $value->heure_dep == "11H00" && $value->heure_fin == "13H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mardi" &&  $value->heure_dep == "11H00" && $value->heure_fin == "13H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mercredi" &&  $value->heure_dep == "11H00" && $value->heure_fin == "13H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Jeudi" &&  $value->heure_dep == "11H00" && $value->heure_fin == "13H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Vendredi" &&  $value->heure_dep == "11H00" && $value->heure_fin == "13H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Samedi" &&  $value->heure_dep == "11H00" && $value->heure_fin == "13H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Dimanche" &&  $value->heure_dep == "11H00" && $value->heure_fin == "13H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                </tr> 
                                <tr>
                                    <th>13H00/15H00</th>       
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Lundi" &&  $value->heure_dep == "13H00" && $value->heure_fin == "15H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mardi" &&  $value->heure_dep == "13H00" && $value->heure_fin == "15H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mercredi" &&  $value->heure_dep == "13H00" && $value->heure_fin == "15H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Jeudi" &&  $value->heure_dep == "13H00" && $value->heure_fin == "15H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Vendredi" &&  $value->heure_dep == "13H00" && $value->heure_fin == "15H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Samedi" &&  $value->heure_dep == "13H00" && $value->heure_fin == "15H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Dimanche" &&  $value->heure_dep == "13H00" && $value->heure_fin == "15H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                </tr>
                                <tr>
                                    <th>15H00/17H00</th>       
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Lundi" &&  $value->heure_dep == "15H00" && $value->heure_fin == "17H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mardi" &&  $value->heure_dep == "15H00" && $value->heure_fin == "17H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mercredi" &&  $value->heure_dep == "15H00" && $value->heure_fin == "17H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Jeudi" &&  $value->heure_dep == "15H00" && $value->heure_fin == "17H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Vendredi" &&  $value->heure_dep == "15H00" && $value->heure_fin == "17H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Samedi" &&  $value->heure_dep == "15H00" && $value->heure_fin == "17H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Dimanche" &&  $value->heure_dep == "15H00" && $value->heure_fin == "17H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                </tr> 
                                <tr>
                                    <th>17H00/19H00</th>       
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Lundi" &&  $value->heure_dep == "17H00" && $value->heure_fin == "19H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mardi" &&  $value->heure_dep == "17H00" && $value->heure_fin == "19H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Mercredi" &&  $value->heure_dep == "17H00" && $value->heure_fin == "19H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Jeudi" &&  $value->heure_dep == "17H00" && $value->heure_fin == "19H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Vendredi" &&  $value->heure_dep == "17H00" && $value->heure_fin == "19H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Samedi" &&  $value->heure_dep == "17H00" && $value->heure_fin == "19H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                    <th>
                                        @foreach ($option->Enseignements as $key7 => $aff)
                                            @foreach($aff->periodes as $key3 => $value)
                                                    @foreach($value->jours as $key1 => $affiche)
                                                        @if($affiche->jour == "Dimanche" &&  $value->heure_dep == "17H00" && $value->heure_fin == "19H00")
                                                            {{$aff->name}}
                                                        @endif
                                                    @endforeach
                                            @endforeach
                                        @endforeach  
                                    </th> 
                                </tr>
                             </tbody>
                           </table>
                        </div>
                           <div class="row justify-content-between mt-3">
                              <div id="user-list-page-info" class="col-md-6">
                                 <span>Showing 1 to 5 of 5 entries</span>
                              </div>
                           </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </div>

   <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->


@endsection