@extends('layouts.backend')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Order</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/admin/order') }}">Order</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail</li>
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
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="datatable-buttons">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th>{{ $order->id }}</th>
                            </tr>
                            <tr><th> Id Ambulance </th><td> {{ $order->id_ambulance }} </td></tr><tr><th> Id Customer </th><td> {{ $order->id_customer }} </td></tr><tr><th> Id Bank Account </th><td> {{ $order->id_bank_account }} </td></tr><tr><th> Tanggal Transaksi </th><td> {{ $order->tanggal_transaksi }} </td></tr><tr><th> Total Bayar </th><td> {{ $order->total_bayar }} </td></tr><tr><th> Bukti Pembayaran </th><td> {{ $order->bukti_pembayaran }} </td></tr>
                            <tr>
                                <td colspan="10" align="center">
                                    <a href="{{ url('/admin/order/' . $order->id . '/edit') }}"><button class="btn btn-primary btn-sm" title="Edit Order"><i class="fa fa-pencil-alt" aria-hidden="true"></i></button></a>
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'url' => ['admin/order', $order->id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', array(
                                                'type' => 'submit',
                                                'class' => 'btn btn-danger btn-sm',
                                                'title' => 'Delete Order',
                                                'onclick'=>'return confirm("Confirm delete?")'
                                        )) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    &nbsp&nbsp&nbsp&nbsp<a href="{{ url('/admin/order') }}"><button class="btn btn-warning btn-addon btn-sm"><i class="fa fa-close" aria-hidden="true"></i> Back</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection