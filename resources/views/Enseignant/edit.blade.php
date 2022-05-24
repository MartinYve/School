@extends('layouts.app_back')

@section('content')

<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

<div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-3">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title"> Modifier Profil</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <form class="form" method="POST"
                                action="{{ route('enseignant.update',$enseignant->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                           <div class="form-group">
                              <div class="add-img-user profile-img-edit">
                                 <img class="profile-pic img-fluid" src="{{asset('back/images/user/11.png')}}" alt="profile-pic">
                                 <div class="p-image">
                                   <a href="javascript:void();" class="upload-button btn iq-bg-primary">File Upload</a>
                                   <input type="file" name="avatar" id="avatar" class="file-upload form-control form-control-solid @error('avatar') is-invalid @enderror" accept=".png, .jpg, .jpeg" 
                    value="@if ($route == 'enseignant.create') {{old('avatar')}} @else {{$enseignant->avatar}} @endif" accept="image/*">
                                </div>
                              </div>
                             <div class="img-extension mt-3">
                                <div class="d-inline-block align-items-center">
                                    <span>Only</span>
                                   <a href="javascript:void();">.jpg</a>
                                   <a href="javascript:void();">.png</a>
                                   <a href="javascript:void();">.jpeg</a>
                                   <span>allowed</span>
                                </div>
                             </div>
                           </div>
                           <div class="form-group">
                              <label> Role:</label>
                              <select class="form-control select2"  name="roles[]" id="selectuserrole" required>
                                 <option value="Enseignant" >{{ 'Enseignant' }}</option>
                              </select>
                           </div>
                     </div>
                  </div>
            </div>
            <div class="col-lg-9">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">{{ 'Modifier Enseignant' }}{{$enseignant->name}}</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="new-user-info">
                              <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="fname">Name:</label>
                                    <input placeholder="Your Name" type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" 
                                        name="name" id="name" value="@if($route == 'enseignant.create'){{old('name')}}@else{{$enseignant->name}}@endif"/>
                                    @error('name')
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div style="display:none;" class="form-group col-md-6">
                                    <label>Option:</label>
                                    <select class="form-control select2"  name="option_id" id="selectuserrole" required>
                                       <option value="11"></option>
                                    </select>
                                </div>
                                <span class="form-text text-muted" role="alert"><strong class="text-danger name" ></strong></span>
                                <div class="form-group col-md-6">
                                    <label for="lname">Last Name:</label>
                                    <input type="text" class="form-control form-control-solid @error('last_name') is-invalid @enderror" name="last_name" id="last_name" value="@if($route == 'enseignant.create'){{old('last_name')}}@else{{$enseignant->last_name}}@endif"/>
                                    @error('last_name')
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <span class="form-text text-muted" role="alert"><strong class="text-danger last_name" ></strong></span>
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone:</label>
                                    <input type="number" class="form-control form-control-solid @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" value="@if($route == 'enseignant.create'){{old('phone_number')}}@else{{$enseignant->phone_number}}@endif" />
                                    @error('phone_number')
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <span class="form-text text-muted" role="alert"><strong class="text-danger phone_number" ></strong></span>
                                <div class="form-group col-md-6">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control form-control-solid @error('email') is-invalid @enderror" name="email" id="email" value="@if($route == 'enseignant.create'){{old('email')}}@else{{$enseignant->email}}@endif" />
                                    @error('email')
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <span class="form-text text-muted" role="alert"><strong class="text-danger email" ></strong></span>
                                <div class="form-group col-md-6">
                                    <label for="matricule">matricule:</label>
                                    <input type="text" class="form-control form-control-solid @error('matricule') is-invalid @enderror" name="matricule" id="matricule" value="@if($route == 'enseignant.create'){{old('matricule')}}@else{{$enseignant->matricule}}@endif" />
                                    @error('matricule')
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <span class="form-text text-muted" role="alert"><strong class="text-danger matricule" ></strong></span>
                                <div class="form-group col-md-6">
                                    <label>Statut :</label>
                                    <select class="form-control select2"  name="statut" id="selectuserrole" required>
                                       <option value="Vacataire">{{ 'Vacataire' }}</option>
                                       <option value="Titulaire">{{ 'Titulaire' }}</option>
                                    </select>
                                </div>
                                <span class="form-text text-muted" role="alert"><strong class="text-danger email" ></strong></span>
                              </div>
                              <hr>
                              <h5 class="mb-3">Securité</h5>
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="pass">Password:</label>
                                    <input type="password" class="form-control form-control-solid @error('password') is-invalid @enderror" name="password" id="password">
                                    @error('password')
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                 <div class="form-group col-md-6">
                                    <label for="rpass">Repeat Password:</label>
                                    <input type="password" class="form-control form-control-solid" name="password_confirmation" id="password_confirmation">
                                    <br>
                                    <button type="submit" class="btn btn" style="background-color: #29ca8e; color:white;">Modifier</button>
                              </div>
                              
                           </form>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </div>
@endsection
