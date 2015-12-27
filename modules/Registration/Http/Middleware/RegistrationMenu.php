<?php namespace Modules\Registration\Http\Middleware; 

use Closure;
use Menu;
class RegistrationMenu {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $registration = daress_registerd();

       

            $menu = Menu::get('SidebarMenu');

            $submenu = $menu->add(trans('registration::registration.header'))->prepend('<i class="fa fa-check"></i>')->data('permission', ['view.registration.steps', 'view.registration.periods','view.registration.registrations']);
            $submenu->add(trans('registration::registrations.header'), ['route'=>'registration.registrations.index'])->prepend('<i class="fa fa-users"></i>')->data('permission', ['view.registration.registrations']);
            $submenu->add(trans('registration::steps.header'), ['route'=>'registration.steps.index'])->prepend('<i class="fa fa-recycle"></i>')->data('permission', ['view.registration.steps']);
            $submenu->add(trans('registration::periods.header'), ['route'=>'registration.periods.index'])->prepend('<i class="fa fa-arrows-h"></i>')->data('permission', ['view.registration.periods']);

         if(!empty($registration)) {
            $upload_alert = '';
            $form_alert = '';
            
            if($registration->step->upload_files) {
                $upload_alert = '<span class="badge bg-red pull-left"><i style="font-size:12px" class="fa fa-bell"></i></span>';
            }        
            if($registration->step->edit_form) {
                $form_alert = '<span class="badge bg-red pull-left"><i style="font-size:12px" class="fa fa-bell"></i></span>';
            }
            $menu->add('حالة الطلب', ['route'=>'registration.registrar.status'])->data('permission',['registrar'])->prepend('<i class="fa fa-question"></i>');
            // $menu->add('بوابة الطالب', ['route'=>'registration.registrar.portal'])->data('permission',['registrar'])->prepend('<i class="fa fa-dashboard"></i>');
            $menu->add('تعديل البيانات', ['route'=>'registration.registrar.form'])->data('permission',['registrar'])->prepend($form_alert.'<i class="fa fa-edit"></i>');
            $menu->add('تحميل الملفات', ['route'=>'registration.registrar.files'])->data('permission',['registrar'])->prepend($upload_alert.'<i class="fa fa-upload"></i>');
        

        	
        }
        return $next($request);
    }
    
}
