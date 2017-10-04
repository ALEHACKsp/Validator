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

class URL implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options) {
        if(!filter_var($value, FILTER_VALIDATE_URL)) {
            return 'formvalidator_make_url';
        }
        
        return true;
    }
}