<?php

function setInternalServerError($errno, $errstr, $errfile, $errline)
{
http_response_code(500);

    echo "<h1 style='color: #2980b9;'>Errors</h1>";
    if(!DEBUG){
        exit;
    }
    echo "<span style='color: #e74c3c;'>";
    switch ($$errno) {
        case E_USER_ERROR:
            echo "<strong>ERROR</strong> [ " . $errno . " ] " . $errstr . "<br>\n";

            break;

        case E_USER_WARNING:
            echo "<strong>WARNING</strong> [ " . $errno . " ] " . $errstr . "<br>\n";
            break;

        case E_USER_NOTICE:
            echo "<strong>NOTICE</strong> [ " . $errno . " ] " . $errstr . "<br>\n";
            break;

        default:
            echo "<strong>UNKNOWN error type</strong> [ " . $errno . " ] " . $errstr . "<br>\n";
            break;
    }
    echo "</span>";

    echo "<ul>";
    foreach(debug_backtrace() as $error){
        if(!empty($error['file'])){
            echo "<li>";
            echo $error['file'] . ": ";
            echo $error['line'];
            echo "</li>";
        }        
    }
    echo "</ul>";

    exit;
}

set_error_handler('setInternalServerError');
set_exception_handler('setInternalServerError');
