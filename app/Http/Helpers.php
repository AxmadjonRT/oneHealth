<?php


use Illuminate\Support\Facades\Request;

function set_active($route)
{
    return (Request::path() == $route) ? 'active' : '';
}
