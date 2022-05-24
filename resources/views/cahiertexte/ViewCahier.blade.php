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
                                    <th>@lang('Jour')</th>
                                    <th>@lang('Heure')</th>
                                    <th>@lang('Matière')</th>
                                    <th>@lang('Contenu du cours')</th>
                                    <th>@lang('Action')</th>
                                 </tr>
                             </thead>
                             <tbody>
                             @foreach ($informations as $information)   
                                <tr>
                                    <td class="text-center pt-2">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                        id="checkbox-{{ $information->id }}">
                                        <label for="checkbox-{{ $information->id }}" class="custom-control-label">&nbsp;</label>
                                    </div>
                                    </td>
                                    <td>{{ $information->jour }}</td>
                                    <td>{{ $information->heure }}</td>
                                    <td>{{$information->enseignement}}</td>
                                    <td> <textarea name="" id="" cols="30" rows="5">{{$information->contenu}}</textarea> </td>
                                    <td>
                                        <a href="{{ route('devoirs.edit', $information->id) }}"
                                            class="btn btn-sm btn-primary btn-icon mr-2" title="@lang('Edit details')">
                                            <i class="ri-pencil-line"></i>
                                        </a>
                                        <form method="POST" style="display: inline-block"
                                            action="{{ route('devoirs.destroy', $information->id) }}"
                                            accept-charset="UTF-8" class="delete">
                                            @method("DELETE")
                                            @csrf
                                            <button class="btn btn-sm btn-danger ri-delete-bin-line" title="@lang('Delete record')"
                                            onclick="return confirm('@lang('Are you sure you want to delete :attribute?', ['attribute'=>$information->id])');"> 
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