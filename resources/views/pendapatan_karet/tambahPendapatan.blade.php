@extends('master.app')

@section('title')

Pendapatan Karet

@stop

@section('content')
<section class="section">
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class=" col-md">
          <div class="card">
            <form method="post" action="{{Route('postPendapatan')}}" class="needs-validation" novalidate="">
                {{ csrf_field() }}
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-7 col-12" hidden>
                    <label>Berat Bersih</label>
                    <input name ='tanggal'type="text" class="form-control" value="{{date('Y/m/d')}}" required="">
                    <div class="invalid-feedback">
                      Data tidak boleh kosong
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <label>Berat Bersih</label>
                      <input name ='beratBersih'type="text" class="form-control" value="" required="">
                      <div class="invalid-feedback">
                        Data tidak boleh kosong
                      </div>
                    </div>
                    <div class="form-group col-md-5 col-12">
                      <input name ='userId'type="text" class="form-control" value="{{Auth::user()->id}}" required="" hidden>
                      <div class="invalid-feedback">
                        Data tidak boleh kosong
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <label>Berat Kotor</label>
                      <input name = 'beratKotor'type="text" class="form-control" value="" required="">
                      <div class="invalid-feedback">
                        Data tidak boleh kosong
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
    
@stop