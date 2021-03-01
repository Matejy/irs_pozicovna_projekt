<?php
// mysql.php
function mysqli_safe_string($value) {
    $value = trim($value);
    if(empty($value))           return 'NULL';
    elseif(is_numeric($value))  return $value;
    else                        return "'".mysqli_real_escape_string($value)."'";
}

function mysqli_safe_query($query) {
    $args = array_slice(func_get_args(),1);
    $args = array_map('mysql_safe_string',$args);
    return mysqli_query(vsprintf($query,$args));
}

function redirect($uri) {
    header('location:'.$uri);
    exit;
}

mysqli_connect('localhost','USERNAME','PASSWORD');
mysqli_select_db('DATABASE');
?>