<?php
function construct()
{
    //    echo "DÙng chung, load đầu tiên";
    load_model('index');
}
function homeAction()
{
    //    show_array($list_users);
    $post_home = get_post_home();
    $getCustomer = getCustomer();
    $getProductWebsite = getProductWebsite();
    $data['post_home'] = $post_home;
    $data['getCustomer'] = $getCustomer;
    $data['getProductWebsite'] = $getProductWebsite;

    load_view('index', $data);
}
