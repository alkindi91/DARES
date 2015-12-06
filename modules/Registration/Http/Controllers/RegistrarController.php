<?php namespace Modules\Registration\Http\Controllers;

use Modules\Lists\Entities\Country;
use Modules\Registration\Entities\RegistrationPeriod;
use Pingpong\Modules\Routing\Controller;
use DomDocument;
class RegistrarController extends Controller {
	
	public function index(RegistrationPeriod $PeriodModel)
	{
		//dd(get_input_tags(file_get_contents(route('registration.registrar.apply'))));

		$period = $PeriodModel->orderBy('id' ,'desc')
		                      ->with('year')
		                      ->where(function($sql) {
		                      	$sql->where('start_at','<=' ,date('Y-m-d'))
		                      	    ->where('finish_at','>=' ,date('Y-m-d'));
		                      })
		                      ->first();
       
		return view('registration::registrar.index' ,compact('period'));
	}

	public function apply(RegistrationPeriod $PeriodModel, Country $CountryModel)
	{
		$countries = $CountryModel->all();

		$countries_list = [""=>""]+$countries->lists('name' ,'id')->toArray();

		$codes_list = [""=>""]+$countries->lists('calling_code' ,'id')->toArray();
		
		$stay_types = config('registration.stay_types');
		
		$social_status = [""=>"",'single'=>'أعزب' ,'married'=>'متزوج / متزوجة' ,'divorced'=>'مطلق / مطلقة' ,'widow'=>'أرمل /أرملة'];

		$social_job_status = [""=>"",'unemployed'=>'بدون عمل' ,'employed'=>'أعمل' ,'retired'=>'متقاعد'];

		$computer_skills = [""=>"",'excellent'=>'ممتاز' ,'great'=>'جيد جدا' ,'very_low'=>'ضعيف جدا' ,'low'=>'ضعيف' ,'good'=>'جيد'];

		$social_job_types = [""=>"",'government'=>'عام' ,'private'=>'خاص' ,'free'=>'حر'];

		$social_jobs = [""=>"",'unemployed'=>'بدون عمل' ,'employed'=>'أعمل' ,'retired'=>'متقاعد'];

		$references = [""=>"",'iiswebsite'=>'موقع كلية العلوم الشرعية','iisewebsite'=>'موقع مركز التعليم عن بعد','iisfriend'=>'صديق يدرس بالكلية','iisefriend'=>'صديق يدرس بمركز التعليم عن بعد','other'=>'أخرى'];

		$period = $PeriodModel->orderBy('id' ,'desc')
		                      ->with('year')
		                      ->where(function($sql) {
		                      	$sql->where('start_at','<=' ,date('Y-m-d'))
		                      	    ->where('finish_at','>=' ,date('Y-m-d'));
		                      })
		                      ->first();

		return view('registration::registrar.apply' ,compact('period' ,'countries' ,'stay_types' ,'countries_list' ,'references','computer_skills','codes_list' ,'social_job_types','social_status' ,'social_jobs'));
	}
	
}

/*
    Generic function to fetch all input tags (name and value) on a page
Useful when writing automatic login bots/scrapers
*/
function get_input_tags($html)
{
    $post_data = array();
     
    // a new dom object
    $dom = new DomDocument; 
     
    //load the html into the object
    $dom->loadHTML($html); 
    //discard white space
    $dom->preserveWhiteSpace = false; 
     
    //all input tags as a list
    $input_tags = $dom->getElementsByTagName('input'); 
 
    //get all rows from the table
    for ($i = 0; $i < $input_tags->length; $i++) 
    {
        if( is_object($input_tags->item($i)) )
        {
            $name = $value = '';
            $name_o = $input_tags->item($i)->attributes->getNamedItem('name');
            if(is_object($name_o))
            {
                $name = $name_o->value;
                 
                $value_o = $input_tags->item($i)->attributes->getNamedItem('value');
                if(is_object($value_o))
                {
                    $value = $input_tags->item($i)->attributes->getNamedItem('value')->value;
                }
                 
                $post_data[$name] = $value;
            }
        }
    }
     
    return $post_data;
}
 
/*
    Usage
*/
 
error_reporting(~E_WARNING);
$html = file_get_contents("https://accounts.google.com/ServiceLoginAuth");
 
echo "<pre>";
print_r(get_input_tags($html));
echo "</pre>";