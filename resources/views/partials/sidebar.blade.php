<div class="clearfix"></div>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">
        <h3>&nbsp;</h3>

        <ul class="nav side-menu">
            @include(config('laravel-menu.views.bootstrap-items'), array('items' => $SidebarMenu->filter(function($item){
              $permission = $item->data('permission');
              if(Auth::user()){
                  if(Auth::user()->canOne( $permission)) {
                      return true;
                  }
              }

              if(daress_registerd() && (is_array($permission) and in_array('registrar', $permission)))
              {

               return true;
              }

              if(student_registered() && (is_array($permission) and $item->data('permission')=='student'))
              {
               return true;
              }
              
          return false;
        })->roots()))
        </ul>

    </div>


</div>
<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small" style="display:{{ session('sidebar_hidden') ? 'none' : 'block'}}">
    <a data-toggle="tooltip" data-placement="top" title="إعدادت">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" class='go-full-screen' data-placement="top" title="ملء الشاشة">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="قفل">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" href='{{ route('logout')}}' data-placement="top" title="تسجيل الخروج">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->