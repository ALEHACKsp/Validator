<?php
/**
 * Validator
 * Copyright 2017 Charlotte Dunois, All Rights Reserved
 *
 * Website: https://charuru.moe
 * License: https://github.com/CharlotteDunois/Validator/blob/master/LICENSE
**/

namespace CharlotteDunois\Validation\Rule;

/**
 * Name: `activeurl`
 *
 * This rule ensures a specific field is an active URL (has a DNS record).
 */
class ActiveURL implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if($exists === false) {
            return null;
        }
        
        if(!checkdnsrr($value)) {
            return 'formvalidator_make_active_url';
        }
        
        return true;
    }
}
