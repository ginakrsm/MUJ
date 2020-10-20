<div class="form-group{{ $errors->has('nama_bank') ? 'has-error' : ''}}">
    {!! Form::label('nama_bank', 'Nama Bank', ['class' => 'control-label']) !!}
    {!! Form::text('nama_bank', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nama_bank', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('id_company') ? 'has-error' : ''}}">
    {!! Form::label('id_company', 'Company', ['class' => 'control-label']) !!}
    {!! Form::select('id_company', $company, null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'placeholder' => 'Please Select']) !!}
    {!! $errors->first('id_company', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('no_rek') ? 'has-error' : ''}}">
    {!! Form::label('no_rek', 'No Rek', ['class' => 'control-label']) !!}
    {!! Form::text('no_rek', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('no_rek', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('atas_nama_rekening') ? 'has-error' : ''}}">
    {!! Form::label('atas_nama_rekening', 'Atas Nama Rekening', ['class' => 'control-label']) !!}
    {!! Form::text('atas_nama_rekening', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('atas_nama_rekening', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('cabang') ? 'has-error' : ''}}">
    {!! Form::label('cabang', 'Cabang', ['class' => 'control-label']) !!}
    {!! Form::text('cabang', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('cabang', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group" align="right">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary btn-lg']) !!}
    {!! Form::reset('Reset', ['class' => 'btn btn-warning btn-lg']) !!}
    <a href="#" onClick="javascript:history.go(-1)" class="btn btn-danger btn-lg">Cancel and Back</a>
</div>
