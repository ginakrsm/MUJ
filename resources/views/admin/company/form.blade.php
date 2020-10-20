<div class="form-group{{ $errors->has('nama_company') ? 'has-error' : ''}}">
    {!! Form::label('nama_company', 'Nama Company', ['class' => 'control-label']) !!}
    {!! Form::text('nama_company', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nama_company', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('detail') ? 'has-error' : ''}}">
    {!! Form::label('detail', 'Detail', ['class' => 'control-label']) !!}
    {!! Form::textarea('detail', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('npwp_company') ? 'has-error' : ''}}">
    {!! Form::label('npwp_company', 'Npwp Company', ['class' => 'control-label']) !!}
    {!! Form::text('npwp_company', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('npwp_company', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('alamat_company') ? 'has-error' : ''}}">
    {!! Form::label('alamat_company', 'Alamat Company', ['class' => 'control-label']) !!}
    {!! Form::textarea('alamat_company', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('alamat_company', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('email_company') ? 'has-error' : ''}}">
    {!! Form::label('email_company', 'Email Company', ['class' => 'control-label']) !!}
    {!! Form::email('email_company', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('email_company', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('no_telpon_company') ? 'has-error' : ''}}">
    {!! Form::label('no_telpon_company', 'No Telpon Company', ['class' => 'control-label']) !!}
    {!! Form::text('no_telpon_company', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('no_telpon_company', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group" align="right">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary btn-lg']) !!}
    {!! Form::reset('Reset', ['class' => 'btn btn-warning btn-lg']) !!}
    <a href="#" onClick="javascript:history.go(-1)" class="btn btn-danger btn-lg">Cancel and Back</a>
</div>
