@extends('layouts.backend')

@section('content')  
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Order Detail</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{ url('/admin/order-detail') }}">Order Detail</a></li>
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
                <a href="{{ url('/admin/order/') }}/{{Request::segment(3)}}/detail/create" class="btn btn-success btn-addon m-b-sm float-left">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>#</th>
                    <th>Equipment</th><th>Harga</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($orderdetail as $i => $item)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $item->nama_equipment }}</td><td>{{ $item->harga }}</td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection