<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('users.index') }}" class="btn btn-primary pull-left" novalidate>
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button type="submit" name='submit' value='save' class="btn btn-success pull-left" novalidate>
        <i class="fa fa-save"></i> @lang('global.save')</button>
        <button type="submit" name='submit' value='exit' class="btn btn-default pull-left" novalidate>
        <i class="fa fa-table"></i> @lang('global.save_and_exit')</button>
    </div>
</div>
<div class="ln_solid"></div>
<fieldset>
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
{!! !!}
<?php  ?>
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
    <label for='role' class="control-label col-md-3 col-sm-3 col-xs-12">@lang('users::users.role')
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
       {!! Form::select('role',$roles,null,['id'=>'role','class'=>'form-control col-md-7 col-xs-12']) !!}
       {!! $errors->first('role' ,'<div class="label label-danger">:message</div>') !!}
   </div>

</div>
{{-- Form Input Group --}}
<div class="form-group">
    {!! Form::label('avatar' ,trans('users::users.avatar') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::file('avatar',['class'=>'form-control col-md-7 col-xs-12']) !!}

        {!! $errors->first('avatar' ,'<div class="label label-danger">:message</div>') !!}
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

<br>
<div class="row">
    <div class="col-md-4 col-sm-6 col-lg-3">
        <div class="x_panel">
            <div class="x_title">
                صلاحيات المستخدمين
            </div>
            <div class="x_content">
               <div class="checkbox">
                <label>
                <input name='permissions[]' class='js-switch'  {{ (isset($user) and $user->hasPermission('view.users')) ? 'checked' : null }} type="checkbox" value="view.users"> مشاهدة المستخدمين
                </label>
            </div>
            <div class="checkbox">
                <label>
                <input class='js-switch' name='permissions[]'  {{ (isset($user) and $user->hasPermission('create.users')) ? 'checked' : null }} type="checkbox" value="create.users"> اضافة المستخدمين
                </label>
            </div>
            <div class="checkbox">
                <label>
                <input name='permissions[]' class='js-switch'  {{ (isset($user) and $user->hasPermission('edit.users')) ? 'checked' : null }} type="checkbox" value="edit.users"> تعديل المستخدمين
                </label>
            </div>
            <div class="checkbox">
                <label>
                <input name='permissions[]' class='js-switch'  {{ (isset($user) and $user->hasPermission('delete.users')) ? 'checked' : null }} type="checkbox" value="delete.users"> حذف المستخدمين
                </label>
            </div>
        </div>
        </div>
        </div>
         <div class="col-md-4 col-sm-6 col-lg-3">
        <div class="x_panel">
            <div class="x_title">
                صلاحيات الصلاحيات
            </div>
            <div class="x_content">
               <div class="checkbox">
                <label>
                <input name='permissions[]' class='js-switch'  {{ (isset($user) and $user->hasPermission('view.roles')) ? 'checked' : null }} type="checkbox" value="view.roles"> مشاهدة الصلاحيات
                </label>
            </div>
            <div class="checkbox">
                <label>
                <input class='js-switch' name='permissions[]' {{ (isset($user) and $user->hasPermission('create.roles')) ? 'checked' : null }} type="checkbox" value="create.roles"> اضافة الصلاحيات
                </label>
            </div>
            <div class="checkbox">
                <label>
                <input name='permissions[]' class='js-switch'  {{ (isset($user) and $user->hasPermission('edit.roles')) ? 'checked' : null }} type="checkbox" value="edit.roles"> تعديل الصلاحيات
                </label>
            </div>
            <div class="checkbox">
                <label>
                <input name='permissions[]' class='js-switch'  {{ (isset($user) and $user->hasPermission('delete.roles')) ? 'checked' : null }} type="checkbox" value="delete.roles"> حذف الصلاحيات
                </label>
            </div>
        </div>
</div>
</div>
</div>
</fieldset>
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-12">
        <a href="{{ route('users.index') }}" class="btn btn-primary pull-left" novalidate>
        <i class="fa fa-times"></i> @lang('global.cancel')</a>
        <button type="submit" name='submit' value='save' class="btn btn-success pull-left" novalidate>
        <i class="fa fa-save"></i> @lang('global.save')</button>
        <button type="submit" name='submit' value='exit' class="btn btn-default pull-left" novalidate>
        <i class="fa fa-table"></i> @lang('global.save_and_exit')</button>
    </div>
</div>
