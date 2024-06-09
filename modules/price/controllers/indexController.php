<?php 

function construct(){
    load_model('index');
}
function indexAction(){

    $getList = getList();
    $getListContent = getListContent();
    $data['getList'] = $getList;
    $data['getListContent'] = $getListContent;
    load_view('index', $data);
}