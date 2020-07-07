<?php
function FormatPhoneNumber($str_phone){
    $format_str = "";
    $length = strlen($str_phone);
    
    $format_str = substr_replace( $str_phone, ' ', 3, 0 );
    $format_str = substr_replace( $format_str, ' ', $length - 2, 0 );
    return $format_str;
}

function FormatLink($str_link){
    $format_str = "<a href = ". $str_link .">Click here</a>";
    return $format_str;
}

function FormatDateToClient($date){
    $arr_day = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    $arr_month = ['January', 'February', 'March', 'April', 'May', 'June', 'Junly', 'August', 'September',
        'October', 'November', 'December'];
    $day = date_format($date,"w");
    $month = date_format($date,"n");
    $date = date_format($date,"d");
    $year = 1;
    $format_str = $arr_day[$day] . ", ". $arr_month[$month]. " ". $date. " ". $year;
//    return $format_str;
  
    return date("Y-m-d");
    
}

function encode_string($str){
    $result = '';
    $arr_word = explode("_",$str);
    for($i = 0; $i < count($arr_word); $i++){
        
        $result .= ucwords(str_replace('"',"",$arr_word[$i])) . " ";
    }
    return $result;
}
