<?php
/**
 * Validator
 * Copyright 2017-2018 Charlotte Dunois, All Rights Reserved
 *
 * Website: https://charuru.moe
 * License: https://github.com/CharlotteDunois/Validator/blob/master/LICENSE
**/

namespace CharlotteDunois\Validation\Rule;

/**
 * Name: `nowhitespace`
 *
 * This rule ensures a specific field contains no whitespaces.
 */
class NoWhitespace implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if($exists === false) {
            return null;
        }
        
        if(preg_match('/\s/u', $value) === 1) {
            return 'formvalidator_make_no_whitespace';
        }
        
        return true;
    }
}
