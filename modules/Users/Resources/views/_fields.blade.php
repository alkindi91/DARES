{{-- Form Input Group --}}
<div class="form-group {{ $errors->first('name' ,'has-error') }}">
    {!! Form::label('name' ,trans('users::users.name') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('name' ,null ,['required'=>'required' ,'class'=>'form-control col-md-7 col-xs-12 ']) !!}
    {!! $errors->first('name' ,'<div class="label label-danger">:message</div>') !!}
    </div>
</div>
{{-- Form Input Group --}}
<div class="form-group">
    {!! Form::label('password' ,trans('users::users.password') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="password" name='password' {{ empty($user) ? 'required' : null }} class='form-control col-md-7 col-xs-12'>
    {!! $errors->first('password' ,'<div class="label label-danger">:message</div>') !!}
    </div>
</div>
{{-- Form Input Group --}}
<div class="form-group">
    {!! Form::label('password_confirmation' ,trans('users::users.password_confirmation') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

    <div class="col-md-6 col-sm-6 col-xs-12">
       
        <input type="password" name='password_confirmation' {{ empty($user) ? 'required' : null }} class='form-control col-md-7 col-xs-12'>
    {!! $errors->first('password_confirmation' ,'<div class="label label-danger">:message</div>') !!}
    </div>
</div>
{{-- Form Input Group --}}
<div class="form-group">
    {!! Form::label('email' ,trans('users::users.email') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::email('email',null,['required'=>'required' ,'class'=>'form-control col-md-7 col-xs-12']) !!}
        <div class="help-block">
            @lang('users::users.email_hint')
        </div>
        {!! $errors->first('email' ,'<div class="label label-danger">:message</div>') !!}
    </div>
</div>
{{-- Form Input Group --}}
<div class="form-group">
    {!! Form::label('sex' ,trans('users::users.sex') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div id="gender" class="btn-group" data-toggle="buttons">
            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
               {!! Form::checkbox('gender' ,"m") !!} &nbsp; @lang('users::users.male') &nbsp;
            </label>
            <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
            {!! Form::checkbox('gender' ,"f") !!}
                <input type="radio" name="gender" value="f" checked=""> @lang('users::users.female')
            </label>
        </div>
        {!! $errors->first('sex' ,'<div class="label label-danger">:message</div>') !!}
    </div>
    
</div>
{{-- Form Input Group --}}
<div class="form-group">
    <label for='birthday' class="control-label col-md-3 col-sm-3 col-xs-12">@lang('users::users.birthday')
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
         {!! Form::text('birthday',null,['id'=>'birthday','class'=>'date-picker form-control col-md-7 col-xs-12']) !!}
         {!! $errors->first('birthday' ,'<div class="label label-danger">:message</div>') !!}
    </div>

</div>