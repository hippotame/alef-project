<?php

 /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function _dump_r ($some, $ret = false)
{
    $str = "<pre>";
    $str .= var_export($some, true);
    $str .= "</pre>";

    if ($ret === true) {
        return $str;
    }
    echo $str;
}

function _dump_d ($data, $exit = TRUE, $file = '')
{
    if ($data) {
        print '<pre>';
        var_dump($data);
        print '</pre>';
    }
    if ($exit) {
        die($file);
    }
}

function _print_r ($some, $ret = false)
{
    $str = "<pre>";
    $str .= print_r($some, true);
    $str .= "</pre>";

    if ($ret === true) {
        return $str;
    }
    echo $str;
}

function _print_d ($data, $exit = TRUE, $file = '')
{
    if ($data) {
        print '<pre>';
        print_r($data);
        print '</pre>';
    }
    if ($exit) {
        die($file);
    }
}
