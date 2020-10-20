<div class="form-group{{ $errors->has('id_ambulance') ? 'has-error' : ''}}">
    {!! Form::label('id_ambulance', 'Ambulance', ['class' => 'control-label']) !!}
    {!! Form::select('id_ambulance', $ambulance, null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'placeholder' => 'Please ', 'disabled']) !!}
    {!! $errors->first('id_ambulance', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('id_customer') ? 'has-error' : ''}}">
    {!! Form::label('id_customer', 'Customer', ['class' => 'control-label']) !!}
    {!! Form::select('id_customer', $customer, null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'placeholder' => 'Please ']) !!}
    {!! $errors->first('id_customer', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('id_bank_account') ? 'has-error' : ''}}">
    {!! Form::label('id_bank_account', 'Bank Account', ['class' => 'control-label']) !!}
    {!! Form::select('id_bank_account', $bank, null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'placeholder' => 'Please ']) !!}
    {!! $errors->first('id_bank_account', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('tanggal_transaksi') ? 'has-error' : ''}}">
    {!! Form::label('tanggal_transaksi', 'Tanggal Transaksi', ['class' => 'control-label']) !!}
    {!! Form::date('tanggal_transaksi', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('tanggal_transaksi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('bukti_pembayaran') ? 'has-error' : ''}}">
    {!! Form::label('bukti_pembayaran', 'Bukti Pembayaran', ['class' => 'control-label']) !!}
    {!! Form::file('bukti_pembayaran', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('bukti_pembayaran', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group" align="right">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary btn-lg']) !!}
    {!! Form::reset('Reset', ['class' => 'btn btn-warning btn-lg']) !!}
    <a href="#" onClick="javascript:history.go(-1)" class="btn btn-danger btn-lg">Cancel and Back</a>
</div>
