@extends('layouts.app_back')

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
                           <h4 class="card-title">Liste des Enseignements</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <div class="row justify-content-between">
                              <div class="col-sm-12 col-md-6">
                                 <div id="user_list_datatable_info" class="dataTables_filter">
                                    <!-- Button trigger modal -->
                                    @if(!empty($enseignementss))
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Créer une période
                                        </button>
                                    @endif
                                    @if(empty($enseignementss))
                                        <button type="button" class="btn btn-primary">
                                        <a style="color: #fff;" href="{{route('Enseignements.create') }}">Créer un enseignement</a>
                                        </button>
                                    @endif
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
                                                    <form  method="post" action="{{route('periodes.store') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="fname">Heure Début:</label>
                                                                <input placeholder="Heure de départ" type="text" class="form-control form-control-solid @error('heure_dep') is-invalid @enderror" 
                                                                name="heure_dep" id="name"  required />
                                                                @error('heure_dep')
                                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="fname">Heure Fin:</label>
                                                                <input placeholder="Heure de la Fin" type="text" class="form-control form-control-solid @error('heure_fin') is-invalid @enderror" 
                                                                name="heure_fin" id="name"  required />
                                                                @error('heure_fin')
                                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label>Enseignement:</label>
                                                                <select class="form-control select2"  name="enseignement" id="selectuserrole" required>
                                                                    @foreach($enseignement_per as $id => $enseignement)
                                                                        <option value="{{ $enseignement->id }}">{{ $enseignement->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>   
                                                            <div class="form-group col-md-6">
                                                                <label>Jour:</label>
                                                                <select class="form-control select2"  name="jour" id="selectuserrole" required>
                                                                    @foreach($jours as $id => $jour)
                                                                        <option value="{{ $jour->id }}">{{ $jour->jour }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div> 
                                                        </div>        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary" >Enregistrer</button>
                                                        </div>   
                                                    </form>     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                 <div class="user-list-files d-flex float-right">
                                    <a class="iq-bg-primary" href="javascript:void();" >
                                       Print
                                     </a>
                                    <a class="iq-bg-primary" href="javascript:void();">
                                       Excel
                                     </a>
                                     <a class="iq-bg-primary" href="javascript:void();">
                                       Pdf
                                     </a>
                                   </div>
                              </div>
                           </div>
                           <table id="user-list-table" class="table table-striped table-borderless mt-4" role="grid" aria-describedby="user-list-page-info">
                             <thead>
                                 <tr>
                                     <th>     #</th>
                                    <th>@lang('Name')</th>
                                    <th>@lang('Credit')</th>
                                    <th>@lang('Option')</th>
                                    <th>@lang('Periode')</th>
                                    <th>@lang('Action')</th>
                                 </tr>
                             </thead>
                             <tbody>
                             @foreach ($enseignements as $enseignement)   
                                <tr>
                                    <td class="text-center pt-2">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                        id="checkbox-{{ $enseignement->id }}">
                                        <label for="checkbox-{{ $enseignement->id }}" class="custom-control-label">&nbsp;</label>
                                    </div>
                                    </td>
                                    <?php $comment = App\Option::select('name')
                                        ->where('id', $enseignement->option_id)
                                        ->first(); 
                                    ?>
                                   
                                    <td>{{ $enseignement->name }}</td>
                                    <td>{{ $enseignement->credit }}</td>
                                    <td>{{ $comment->name }}</td>
                                    <td>
                                        @foreach ($enseignement->periodes as $key => $value)
                                            @foreach ($value->jours as $key2 => $aff)
                                                {{$aff->jour}} {{$value->heure_dep}} / {{$value->heure_fin}}
                                            @endforeach
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('Enseignements.edit', $enseignement->id )}}"
                                            class="btn btn-sm btn-primary btn-icon mr-2" title="@lang('Edit details')">
                                            <i class="ri-pencil-line"></i>
                                        </a>
                                        <form method="POST" style="display: inline-block"
                                            action="{{ route('Enseignements.destroy', $enseignement->id ) }}"
                                            accept-charset="UTF-8" class="delete">
                                            @method("DELETE")
                                            @csrf
                                            <button class="btn btn-sm btn-danger ri-delete-bin-line" title="@lang('Delete record')"
                                            onclick="return confirm('@lang('Are you sure you want to delete :attribute?', ['attribute'=>$enseignement->name])');"> 
                                            <span class="fas fa-trash"></span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>            
                                @endforeach
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
 @endsection