@extends('layouts.backend')

@section('content')  
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Bank Account</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{ url('/admin/bank-account') }}">Bank Account</a></li>
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
                <a href="{{ url('/admin/bank-account/create') }}" class="btn btn-success btn-addon m-b-sm float-left">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>#</th>
                    <th>Nama Bank</th><th>Company</th><th>No Rek</th><th>Atas Nama Rekening</th><th>Cabang</th>
                    <th style="text-align:center;">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($bankaccount as $i => $item)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $item->nama_bank }}</td><td>{{ $item->nama_company }}</td><td>{{ $item->no_rek }}</td><td>{{ $item->atas_nama_rekening }}</td><td>{{ $item->cabang }}</td>
                        <td align="center">
                            <a href="{{ url('/admin/bank-account/' . $item->bid . '/edit') }}" title="Edit BankAccount"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i></button></a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteConfirm{{$item->bid}}"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            <div class="modal fade" id="deleteConfirm{{$item->bid}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure want to delete  this record?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/bank-account', $item->bid],
                                                'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('Delete', array(
                                                    'type' => 'submit',
                                                    'class' => 'btn btn-danger btn-sm',
                                                    'title' => 'Confirm Delete'
                                            )) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
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