<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

// Chuyển đổi chữ thành số
function string_to_int($str) {
    return sprintf("%u", crc32($str));
}

function isUser($user) {
    if(preg_match("/[A-Za-z0-9]+/", $user) == TRUE){
         return TRUE;;
    }
    return FALSE;
 }
