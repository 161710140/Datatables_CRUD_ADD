<div class="form-group{{ $errors->has('Nama') ? ' has-error' : '' }}">
    {!! Form::label('Nama', 'Nama', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('Nama', null, ['class'=>'form-control']) !!}
        {!! $errors->first('Nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('Nama') ? ' has-error' : '' }}">
    {!! Form::label('Lahir', 'Lahir', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('Lahir', null, ['class'=>'form-control']) !!}
        {!! $errors->first('Lahir', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-4 col-md-offset-2">
        {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>