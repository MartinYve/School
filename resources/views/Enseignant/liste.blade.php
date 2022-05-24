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
                           <h4 class="card-title">Liste des Enseignants</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <div class="row justify-content-between">
                              <div class="col-sm-12 col-md-6">
                                 <div id="user_list_datatable_info" class="dataTables_filter">
                                    <form class="mr-3 position-relative">
                                       <div class="form-group mb-0">
                                          <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                       </div>
                                    </form>
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
                                    <th>@lang('Email')</th>
                                    <th>@lang('Phone')</th>
                                    <th>@lang('statut')</th>
                                    <th>@lang('Action')</th>
                                 </tr>
                             </thead>
                             <tbody>
                             @foreach ($enseignants as $enseignant)   
                                <tr>
                                    <td class="text-center pt-2">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                        id="checkbox-{{ $enseignant->id }}">
                                        <label for="checkbox-{{ $enseignant->id }}" class="custom-control-label">&nbsp;</label>
                                    </div>
                                    </td>
                                    <td>{{ $enseignant->name }}</td>
                                    <td>{{ $enseignant->email }}</td>
                                    <td>{{$enseignant->phone_number}}</td>
                                    <td>{{$enseignant->statut}}</td>
                                    <td>
                                        <a href="{{ route('enseignant.edit', $enseignant->id) }}" style="background-color: #29ca8e; color:white;"
                                            class="btn btn-sm btn btn-icon mr-2" title="@lang('Edit details')">
                                            <i class="ri-pencil-line"></i>
                                        </a>
                                        <form method="POST" style="display: inline-block"
                                            action="{{ route('enseignant.destroy', $enseignant->id) }}"
                                            accept-charset="UTF-8" class="delete">
                                            @method("DELETE")
                                            @csrf
                                            <button class="btn btn-sm btn-danger ri-delete-bin-line" title="@lang('Delete record')"
                                            onclick="return confirm('@lang('Are you sure you want to delete :attribute?', ['attribute'=>$enseignant->name])');"> 
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