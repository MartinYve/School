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
                           <h4 class="card-title">Emplois de temps</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="">
                           <div class="row">
                              @foreach($options as $key => $option)
                                 @if($key != 10)
                                    <form action="{{route('Emploistemps.store')}}" method="post">
                                       @csrf
                                       <div class="col-md-6">
                                          <input type="text" value="{{$option->id}}"  name="option" style="display: none;" >
                                          <button style="width:72px; height:40px;" class="btn btn-primary" type="submit">{{$option->name}}</button>
                                       </div>
                                    </form>
                                 @endif
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </div>
 @endsection