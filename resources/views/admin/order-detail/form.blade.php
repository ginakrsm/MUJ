<div class="form-group{{ $errors->has('id_equipment') ? 'has-error' : ''}}">
    {!! Form::label('id_equipment', 'Equipment', ['class' => 'control-label']) !!}
    {!! Form::select('id_equipment', $addon,null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'placeholder' => 'Please Select']) !!}
    {!! $errors->first('id_equipment', '<p class="help-block">:message</p>') !!}
</div>

<input type="hidden" value="{{Request::segment(3)}}" name="id_order">
<div class="form-group" align="right">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary btn-lg']) !!}
    {!! Form::reset('Reset', ['class' => 'btn btn-warning btn-lg']) !!}
    <a href="#" onClick="javascript:history.go(-1)" class="btn btn-danger btn-lg">Cancel and Back</a>
</div>
