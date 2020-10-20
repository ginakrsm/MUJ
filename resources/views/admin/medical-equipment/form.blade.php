<div class="form-group{{ $errors->has('nama_equipment') ? 'has-error' : ''}}">
    {!! Form::label('nama_equipment', 'Nama Equipment', ['class' => 'control-label']) !!}
    {!! Form::text('nama_equipment', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nama_equipment', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('harga_jual') ? 'has-error' : ''}}">
    {!! Form::label('harga_jual', 'Harga Jual', ['class' => 'control-label']) !!}
    {!! Form::number('harga_jual', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('harga_jual', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('harga_beli') ? 'has-error' : ''}}">
    {!! Form::label('harga_beli', 'Harga Beli', ['class' => 'control-label']) !!}
    {!! Form::number('harga_beli', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('harga_beli', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group" align="right">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary btn-lg']) !!}
    {!! Form::reset('Reset', ['class' => 'btn btn-warning btn-lg']) !!}
    <a href="#" onClick="javascript:history.go(-1)" class="btn btn-danger btn-lg">Cancel and Back</a>
</div>
