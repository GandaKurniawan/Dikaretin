@extends('master.app')

@section('title')

Pendapatan

@stop

@section('content')

  <section class="section ">
    <form action="{{Route('cari')}}" method="GET" >
      <div class="d-flex">
          <input type="number" name="tahun" style="margin-left: 5px"  class="form-control col-md-2" placeholder="Tahun" id="tahun" >
      <button type="submit" class="btn btn-success " style="margin-left: 10px">Cari</button>
    </div>
  </form>
  
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class=" col-md">
          <div class="card">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th scope="col" >No</th>
                    <th scope="col" style="text-align: center">Kode</th>
                    <th scope="col" style="text-align: center">bulan</th>
                    <th scope="col" style="text-align: center">Tahun</th>
                    <th scope="col"  style="text-align: center">Total Pendapatan Berat Bersih</th>
                  </tr>
              </thead>
              <tbody>
                @php
                    $i =1;
                    $total = 0;
                    $totalP=0;
                    $t2=0;
                    $t=0;
                @endphp
                @forelse ($rekap_pendapatan as $rekap)
                
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td style="text-align: center">{{$rekap->kode}}</td>
                    <td style="text-align: center">{{$rekap->bulan->name_bulan}}</td>
                    <td style="text-align: center">{{$rekap->tahun}}</td>
                    <td style="text-align: center">{{$rekap->total_Pendapatan}}</td>
                </tr>
                @php
                 $i++;
                 $total=$total+$rekap->bulan_id*$rekap->total_Pendapatan;
                 $totalP=$rekap->total_Pendapatan+$totalP;
                 $t2=$rekap->bulan_id**2+$t2;
                 $t=$t+$rekap->bulan_id
                 

 
                @endphp

                @empty
                <div class="alert alert-info" role="alert">
                  <h3>
                    Data Tidak Ada atau Belum Diinputkan !!!
                  </h3>
                </div>
                @endforelse
                @php
                 $b=($rekap->bulan_id*$total-$totalP*$t)/($rekap->bulan_id*$t2-($t**2));
                 $a=($totalP/$rekap->bulan_id)-($b*$t/$rekap->bulan_id);
                 $hPerkiraan=$a+$b*($rekap->bulan_id+1)
                @endphp
              </tbody>
            </table>
            @php
                
            @endphp
            @if(Auth::user()->role_id == 2 )
            <div class="card-footer text-right">
              <form action="{{Route('buatPerkiraan')}} " method="POST">
                {{ csrf_field() }}
                <input type="number" name="kode" value="{{$rekap->tahun}}{{$rekap->bulan_id+1}}" hidden>
                <input type="number" name="totalPerkiraan" value="{{$hPerkiraan}}" hidden>
                <input type="number" name="tahun" value="{{$rekap->tahun}}" hidden>
                <input type="number" name="bulan" value="{{$rekap->bulan_id+1}}" hidden>
                <button  class="btn btn-primary">Buat Perkiraan</button>
              </form>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>

  </section>
 
@endsection

@section('footer')

@endsection