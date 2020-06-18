<?php
    function check_login($username, $password){
        global $list_user;
        foreach ($list_user as $user) {
            if($user['username'] == $username && $user['password'] == md5($password)){
                return true;
            }    
        }
        return FALSE;
    }
    
    // Trả về true nếu đã login
    function is_login(){
        if(isset($_SESSION['is_login']))
            return true;
        return FALSE;
    }
    
    // Trả về username
    function user_login(){
        if(isset($_SESSION['user_login'])){
            return $_SESSION['user_login'];
        }
    }
    
    function info_user($username, $field = 'id'){
        global $list_user;
        if(isset($_SESSION['is_login'])){
            foreach($list_user as $user){
                if($user['username'] == $username){
                    // Hàm kiểm tra key có tồn tại hay không.
                    if(array_key_exists($field, $user)){
                        return $user[$field];
                    }
                }
            }
        }
        return false;
    }
?>
