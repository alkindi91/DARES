<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">
        <h3>&nbsp;</h3>

        <ul class="nav side-menu">
            @include(config('laravel-menu.views.bootstrap-items'), array('items' => $SidebarMenu->roots()))
        </ul>

    </div>


</div>
<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small" style="display:{{ !session('sidebar') ? 'none' : 'block'}}">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" href='admin/logout.php' data-placement="top" title="تسجيل الخروج">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
                    <!-- /menu footer buttons -->