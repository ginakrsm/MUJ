<div class="form-group{{ $errors->has('nama_customer') ? 'has-error' : ''}}">
    {!! Form::label('nama_customer', 'Nama Customer', ['class' => 'control-label']) !!}
    {!! Form::text('nama_customer', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nama_customer', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('id_company') ? 'has-error' : ''}}">
    {!! Form::label('id_company', 'Company', ['class' => 'control-label']) !!}
    {!! Form::select('id_company', $company, null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control' , 'placeholder' => 'Please Select']) !!}
    {!! $errors->first('id_company', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('no_telpon_customer') ? 'has-error' : ''}}">
    {!! Form::label('no_telpon_customer', 'No Telpon Customer', ['class' => 'control-label']) !!}
    {!! Form::text('no_telpon_customer', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('no_telpon_customer', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group" align="right">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary btn-lg']) !!}
    {!! Form::reset('Reset', ['class' => 'btn btn-warning btn-lg']) !!}
    <a href="#" onClick="javascript:history.go(-1)" class="btn btn-danger btn-lg">Cancel and Back</a>
</div>
