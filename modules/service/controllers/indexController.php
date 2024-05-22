<?php
function construct()
{
    //    echo "DÙng chung, load đầu tiên";
    load_model('index');
}
function indexAction()
{
    $getServiceWebsite = getServiceWebsite();
    $getContentServiceWeb = getContentServiceWeb();
    $data['getServiceWebsite'] = $getServiceWebsite;
    $data['getContentServiceWeb'] = $getContentServiceWeb;
    //    show_array($list_users);
    load_view('index', $data);
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
