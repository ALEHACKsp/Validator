<?php
/**
 * Validator
 * Copyright 2017 Charlotte Dunois, All Rights Reserved
 *
 * Docs: https://laravel.com/docs/5.2/validation
 * Website: https://charuru.moe
 * License: https://github.com/CharlotteDunois/Validator/blob/master/LICENSE
**/

namespace CharlotteDunois\Validation\Rule;

class Different implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, \CharlotteDunois\Validation\Validator $validator) {
        if($value == $fields[$options]) {
            return array('formvalidator_make_different', array('{0}' => $options));
        }
        
        return true;
    }
}