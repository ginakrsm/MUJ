@extends('layouts.backend')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">MedicalEquipment</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/admin/medical-equipment') }}">MedicalEquipment</a></li>
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
                                <th>{{ $medicalequipment->id }}</th>
                            </tr>
                            <tr><th> Nama Equipment </th><td> {{ $medicalequipment->nama_equipment }} </td></tr><tr><th> Harga Jual </th><td> {{ $medicalequipment->harga_jual }} </td></tr><tr><th> Harga Beli </th><td> {{ $medicalequipment->harga_beli }} </td></tr>
                            <tr>
                                <td colspan="10" align="center">
                                    <a href="{{ url('/admin/medical-equipment/' . $medicalequipment->id . '/edit') }}"><button class="btn btn-primary btn-sm" title="Edit MedicalEquipment"><i class="fa fa-pencil-alt" aria-hidden="true"></i></button></a>
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'url' => ['admin/medicalequipment', $medicalequipment->id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', array(
                                                'type' => 'submit',
                                                'class' => 'btn btn-danger btn-sm',
                                                'title' => 'Delete MedicalEquipment',
                                                'onclick'=>'return confirm("Confirm delete?")'
                                        )) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    &nbsp&nbsp&nbsp&nbsp<a href="{{ url('/admin/medical-equipment') }}"><button class="btn btn-warning btn-addon btn-sm"><i class="fa fa-close" aria-hidden="true"></i> Back</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection