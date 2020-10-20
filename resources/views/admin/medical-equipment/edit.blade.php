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
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                    <h3>Edit MedicalEquipment #{{ $medicalequipment->id }}</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            @endif

                            {!! Form::model($medicalequipment, [
                                'method' => 'PATCH',
                                'url' => ['/admin/medical-equipment', $medicalequipment->id],
                                'class' => '','enctype' => 'multipart/form-data'
                            ]) !!}

                            @include ('admin.medical-equipment.form', ['formMode' => 'edit'])

                            {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection