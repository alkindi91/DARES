<?php 


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