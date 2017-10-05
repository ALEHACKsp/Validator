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

class Max implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, \CharlotteDunois\Validation\Validator $validator) {
        if(isset($_FILES[$key]) AND file_exists($_FILES[$key]['tmp_name']) AND $_FILES[$key]['error'] == 0) {
            $v = filesize($_FILES[$key]['tmp_name']);
        } elseif(is_array($value)) {
            $v = count($value);
        } elseif(is_numeric($value)) {
            $v = $value;
        } else {
            $v = strlen($value);
        }
        
        if($v > $options) {
            if(is_string($value)) {
                return array('formvalidator_make_max_string', array('{0}' => $options));
            } else {
                return array('formvalidator_make_max', array('{0}' => $options));
            }
            
        }
        
        return true;
    }
}