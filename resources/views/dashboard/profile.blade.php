@extends('master.app')

@section('title')

Profile

@stop


@section('content')

<section class="section">
  <div class="section-body">
    <h2 class="section-title">Hi,{{ Auth::user()->name }} <span class="caret"></span></h2>
    <p class="section-lead">
      Change information about yourself on this page.
    </p>

    <div class="row mt-sm-4">
      <div class=" col-md">
        <div class="card">
          <form action ='{{Route('profileUpdate',[$profile->id])}}' method="post" class="needs-validation" novalidate="">
              {{ csrf_field() }}
            <div class="card-body">
              
                <div class="row">
                  <div class="form-group col-md-6 col-12">
                    <label>Username</label>
                    <input name ='username'type="text" class="form-control" value="{{$profile->name}}" required="">
                    <div class="invalid-feedback">
                      Please fill in the first name
                    </div>
                  </div>
                  <div class="form-group col-md-6 col-20">
                    <label>Nama Lengkap</label>
                    <input name = 'nama' type="text" class="form-control" value="{{$profile->biodata->nama}}" required="">
                    <div class="invalid-feedback">
                      Please fill in the last name
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md ">
                    <label>Email</label>
                  <input name = 'email'type="email" class="form-control" readonly value="{{$profile->email}}" required="">
                    <div class="invalid-feedback">
                      Please fill in the email
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md">
                    <div class="invalid-feedback">
                      Please fill in the first name
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-7 col-12">
                    <label>No Telephone</label>
                    <input name='no_telephone' type="text" class="form-control" value="{{$profile->biodata->no_telephone}}" required="">
                    <div class="invalid-feedback">
                      Please fill in the first name
                    </div>
                  </div>
                  <div class="form-group col-md-5 col-12">
                    <label>Alamat</label>
                    <input name ='alamat' type="text" class="form-control" value="{{$profile->biodata->alamat}}" required="">
 
                    <div class="invalid-feedback">
                      Please fill in the first name
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-7 col-12">
                    <select  name='role' class="custom-select" hidden >
                      <option selected>Status Pegawai</option>
                      <option  value="1"@if($profile->role_id=='1')selected @endif>Kepala</option>
                      <option  value="2"@if($profile->role_id=='2')selected @endif>ADM</option>
                      <option  value="3"@if($profile->role_id=='3')selected @endif>Pegawai</option>
                    </select>
                    <div class="invalid-feedback">
                      Please fill in the first name
                    </div>
                  </div>
                  <div class="form-group col-md-5 col-12">
                    <select  name='status' class="custom-select" hidden >
                      <option selected>Status Pegawai</option>
                      <option  value="1"@if($profile->status_id=='1')selected @endif>Aktif</option>
                      <option  value="2"@if($profile->status_id=='2')selected @endif>Nonaktif</option>
                    </select>
                    <div class="invalid-feedback">
                      Please fill in the first name
                    </div>
                  </div>
                </div>
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
