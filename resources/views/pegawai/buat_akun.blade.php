@extends('master.app')

@section('title')

Buat Akun

@stop

@section('content')
<section class="section">
  <div class="section-body">
    <div class="row mt-sm-4">
      <div class=" col-md">
        <div class="card">
          <form method="post" class="needs-validation" novalidate="">
              {{ csrf_field() }}
            <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-6 col-12">
                    <label>Username</label>
                    <input name ='username'type="text" class="form-control" value="" required="">
                    <div class="invalid-feedback">
                      Please fill in the first name
                    </div>
                  </div>
                  <div class="form-group col-md-6 col-20">
                    <label>Nama Pegawai</label>
                    <input name = 'nama' type="text" class="form-control" value="" required="">
                    <div class="invalid-feedback">
                      Please fill in the last name
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-7 col-12">
                    <label>Email</label>
                    <input name = 'email'type="email" class="form-control" value="" required="">
                    <div class="invalid-feedback">
                      Please fill in the email
                    </div>
                  </div>
                  <div class="form-group col-md-5 col-12">
                    <label>Password</label>
                    <input name ='password' type="password" class="form-control" value='rahasia' readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md">
                    <label>Alamat</label>
                    <input name ='alamat' type="text" class="form-control" value="" required="">
                    <div class="invalid-feedback">
                      Please fill in the first name
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-7 col-12">
                    <label>No Telephone</label>
                    <input name='no_telephone' type="text" class="form-control" value="" required="">
                    <div class="invalid-feedback">
                      Please fill in the first name
                    </div>
                  </div>
                  <div class="form-group col-md-5 col-12" style="margin-top: 28px">
                    <select name='status' class="custom-select">
                      <option selected disabled>Status Pegawai</option>
                      <option value="1">Aktif</option>
                      <option value="2">Nonaktif</option>
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

@stop