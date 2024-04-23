<?php
function construct()
{
    //    echo "DÙng chung, load đầu tiên";
    load_model('index');
}
function indexAction()
{
    //    show_array($list_users);
    load_view('index');
}
function softwareAction()
{
    //    show_array($list_users);
    load_view('software');
}
function zaloAction()
{
    //    show_array($list_users);
    load_view('zalo');
}
