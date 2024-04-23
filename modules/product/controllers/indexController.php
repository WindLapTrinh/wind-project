<?php 
function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
}
function webAction() {
    load_view('index');
}
function zaloAction(){
    load_view('zalo');
}
function detailAction() {
    //    show_array($list_users);
        load_view('detail');
}
