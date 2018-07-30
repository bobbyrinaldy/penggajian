<?php

if (! function_exists('user')) {
    function user() {
        return \Auth::getUser();
    }
}

if (! function_exists('flash')) {
    function flash($key, $message, $type = 'default')
    {
        \Session::flash($key, [
            'type'          => $type,
            'message'       => $message
        ]);
    }
}