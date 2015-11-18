{{-- Form Input Group --}}
<div class="form-group {{ $errors->first('name' ,'has-error') }}">
    {!! Form::label('name' ,trans('users::roles.name') ,['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('name' ,null ,['required'=>'required' ,'class'=>'form-control col-md-7 col-xs-12 ']) !!}
    {!! $errors->first('name' ,'<div class="label label-danger">:message</div>') !!}
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