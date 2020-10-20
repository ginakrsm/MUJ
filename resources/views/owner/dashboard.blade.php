@extends('layouts.backend-owner')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Laporan Penjualan</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/admin/jenis-mobil') }}">Laporan Penjualan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Index</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <div class="col-mb-0">
                    </div>
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="mb-0">Form Pencarian Laporan</h3>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form method="get" action="{{url('owner')}}">
                                <!-- Input groups with icon -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group input-group-merge">

                                                <select class="form-control" id="exampleFormControlSelect1"
                                                    placeholder="Pilih Bulan" name="bulan">
                                                    <option selected disabled>Pilih Bulan</option>
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group input-group-merge">
                                                <select name="tahun" class="form-control">
                                                    <option value="">Pilih Tahun</option>
                                                    @for ($i = 2017; $i <= date("Y"); $i++) <option value="{{$i}}">
                                                        {{$i}}</option>
                                                        @endfor
                                                </select>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-addon m-b-sm float-right">
                                    <i class="fa fa-search" aria-hidden="true"></i> Cari
                                </button>
                            </form>
                        </div>
                    </div>
                    @if($bulan != NULL && $tahun != NULL)
                    @php
                    $nama_bulan = '';
                    if($bulan == 01) {
                    $nama_bulan = 'Januari';
                    } elseif($bulan == '02') {
                    $nama_bulan = 'Februari';
                    } elseif($bulan == '03') {
                    $nama_bulan = 'Maret';
                    } elseif($bulan == '04') {
                    $nama_bulan = 'April';
                    } elseif($bulan == '05') {
                    $nama_bulan = 'Mei';
                    } elseif($bulan == '06') {
                    $nama_bulan = 'Juni';
                    } elseif($bulan == '07') {
                    $nama_bulan = 'Juli';
                    } elseif($bulan == '08') {
                    $nama_bulan = 'Agustus';
                    } elseif($bulan == '09') {
                    $nama_bulan = 'September';
                    } elseif($bulan == '10') {
                    $nama_bulan = 'Oktober';
                    } elseif($bulan == '11') {
                    $nama_bulan = 'November';
                    } elseif($bulan == '12') {
                    $nama_bulan = 'Desember';
                    }else{}
                    @endphp
                    <button  class="btn btn-warning btn-addon m-b-sm float-right" onclick="printDiv('printable')">
                        <i class="fa fa-print" aria-hidden="true"></i> Print
                    </button>
                    <div id="printable">
                    <h3>Laporan Jumlah Pendapatan Bulan {{$nama_bulan}} tahun {{$tahun}}</h3>
                        <div class="table-responsive py-4">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Customer</th>
                                        <th>Nama Company</th>
                                        <th>No. Telpon Company</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Jumlah Bayar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($hasil as $i => $item)
                                    @php
                                    $hasil = number_format($pendapatan,2,',','.');
                                    @endphp
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{$item->nama_customer}}</td>
                                        <td>{{$item->nama_company}}</td>
                                        <td>{{$item->no_telpon_company}}</td>
                                        <td>{{$item->tanggal_transaksi}}</td>
                                        <td>{{$item->total_bayar}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tr class="table-success">
                                    <th>Total Pendapatan</th>
                                    <th>Rp. {{$hasil}}</th>
                                </tr>
                            </table>
                        </div>           
                    </div>
                    @else
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('scripts')
<script>
    function printDiv(printable) {
     var printContents = document.getElementById(printable).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
@endsection