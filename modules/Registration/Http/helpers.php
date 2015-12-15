<?php 


/*
    Generic function to fetch all input tags (name and value) on a page
Useful when writing automatic login bots/scrapers
*/
if(!function_exists('get_input_tags')) {
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
}

if(!function_exists('daress_generate_username')) {
    function daress_generate_username() {
       
        do {
            $first_letter = range('A', 'Z')[mt_rand(0,25)];
            $second_letter = range('A', 'Z')[mt_rand(0,25)];
            $numbers = str_pad(mt_rand(1,999),3,'0',STR_PAD_LEFT);
            $username = $first_letter.$second_letter.$numbers;
        }while(\Modules\Registration\Entities\Registration::where('username', '!=', $username)->count()>0);

        return $username;
    }
}

if(!function_exists('daress_registerd()')){
    function daress_registerd() {
        return session()->get(config('registration.session_key'));
    }
}

if(!function_exists('student_registered()')){
    function student_registered() {
        return false;
    }
}