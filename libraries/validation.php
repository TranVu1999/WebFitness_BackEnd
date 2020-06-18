<?php
    function is_username($username){
        $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
        if(!preg_match($pattern, $username, $matchs))
                return FALSE;
        return TRUE;
    }
    
    function is_password($password){
        $pattern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        if(!preg_match($pattern, $password, $matchs))
            return FALSE;
        return true;
    }
    
    function is_email($email){
        $pattern = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/ ";
        if(!preg_match($pattern, $email, $matchs))
            return FALSE;
        return true;
    }
    
    function form_error($label_field){
        global $error;
        if(!empty($error[$label_field]))
            return "<p class='error'>{$error[$label_field]}</p>";
            //echo $error[$label_field];
    }
    
    function set_value($label_field){
        global $$label_field;
        if(!empty($$label_field))
            return $$label_field;
    }
?>