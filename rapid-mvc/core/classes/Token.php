<?php

//CSRF Protection
class Token {
    //generate session level token
    public static function generate() {
        $token = md5(uniqid(rand(), TRUE));
        $_SESSION['lint'] = $token;
        return $token;
    }
    //check if token exist in the session, things are fine else return false
    public static function is_matched() {
        if(
            isset($_SESSION['lint']) &&
            isset($_POST['lint']) &&
            ($_SESSION['lint'] == $_POST['lint'])    
        )
        { return TRUE; }
        
        return FALSE;
    }
}

//use it in form as hidden field with value = Token::generate()
