<?php
function __(){return call_user_func_array('dw\Core::__', func_get_args());}
function pre(){return call_user_func_array('dw\Core::Pre', func_get_args());}
function pre_die(){return call_user_func_array('dw\Core::PreDie', func_get_args());}