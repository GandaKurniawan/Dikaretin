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
            <form method="post" action="{{Route('updatePendapatan',[$data_pendapatan->id])}}" class="needs-validation" novalidate="">
                {{ csrf_field() }}
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-7 col-12">
                    <label>Tanggal</label>
                    <input disabled type="text" value="{{$data_pendapatan->tanggal->format('Y/m/d')}}" class="form-control" value="" required="">
                    <div class="invalid-feedback">
                      Data tidak boleh kosong
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <label>Berat Bersih</label>
                      <input name ='beratBersih'type="number" class="form-control" value="{{$data_pendapatan->berat_bersih}}" required="">
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
                      <input type="number" name = 'beratKotor' class="form-control" value="{{$data_pendapatan->berat_kotor}}" required="">
                      <div class="invalid-feedback">
                        Data tidak boleh kosong
                      </div>
                    </div>
                  </div>
                  @if (Auth::user()->role_id == 2 )
                  <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <select  name='confirm' class="custom-select"  >
                        <option selected disabled>Status Konfirmasi</option>
                        <option  value="1"@if($data_pendapatan->confirm_id=='1')selected @endif>Belum Dikonfirmasi</option>
                        <option  value="2"@if($data_pendapatan->confirm_id=='2')selected @endif>Sudah Dikonfirmasi</option>
                      </select>
                      <div class="invalid-feedback">
                        Please fill in the 
                      </div>
                    </div>
                  </div>
                  @elseif (Auth::user()->role_id != 2 )
                  <div class="row" hidden>
                    <div class="form-group col-md-7 col-12">
                      <select  name='confirm' class="custom-select"  >
                        <option  value="1"@if($data_pendapatan->confirm_id=='1')selected @endif>Belum Dikonfirmasi</option>
                        <option  value="2"@if($data_pendapatan->confirm_id=='2')selected @endif>Sudah Dikonfirmasi</option>
                      </select>
                      <div class="invalid-feedback">
                        Please fill in the 
                      </div>
                    </div>
                  </div>
                  @endif
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