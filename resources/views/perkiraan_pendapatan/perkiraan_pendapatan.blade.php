@extends('master.app')

@section('title')

Perkiraan Pendapatan

@stop

@section('content')

<section class="section">
    <form action="#" method="GET" >
        <div class="d-flex">
            <input type="number" name="tahun"  class="form-control col-md-2" placeholder="Tahun">
        <button type="submit" style="margin-left: 10px;" class=" btn btn-success">Cari</button>
        </div>
      </form>
	  <div class=" text-right">
    <a href="{{Route('rekap')}}">

      <button class="btn btn-primary" >Rekap Total Pendapatan</button>
    </a>
  </div>
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class=" col-md">
          <div class="panel">
              <div class="panel">
                  <div id = 'chartPerkiraan'></div>
              </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('chartPerkiraan', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Perkiraan Pendapatan Karet'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories:{!!json_encode($bPerkiraan)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (Kg)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} Kg</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: ' Total Berat Bersih',
        data:{!!json_encode($tPerkiraan)!!},

    }]
});
              
</script>
@endsection