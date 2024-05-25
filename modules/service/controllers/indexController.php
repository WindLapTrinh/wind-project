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
    $getServiceSoftware = getServiceSoftware();
    $getContentServiceSoftware = getContentServiceSoftware();
    $data['getServiceSoftware'] = $getServiceSoftware;
    $data['getContentServiceSoftware'] = $getContentServiceSoftware;
    //    show_array($list_users);
    load_view('software', $data);
}
function zaloAction()
{
    $getServiceZalo = getServiceZalo();
    $getContentServiceZalo = getContentServiceZalo();
    $data['getServiceZalo'] = $getServiceZalo;
    $data['getContentServiceZalo'] = $getContentServiceZalo;
    load_view('zalo', $data);
}
