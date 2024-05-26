<?php 
function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function webAction() {
    $getProductWebsite = getProductWebsite();
    $data['getProductWebsite'] =$getProductWebsite;
    load_view('index', $data);
}

function zaloAction(){
    load_view('zalo');
}

function detailAction() {
    //    show_array($list_users);
        load_view('detail');
}



