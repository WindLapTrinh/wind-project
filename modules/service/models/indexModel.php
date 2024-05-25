<?php 
//getList website
function getServiceWebsite(){
    $item = db_fetch_array("SELECT * FROM `tbl_service`");
    if (!empty($item))
        return $item;
}

function getContentServiceWeb(){
    $item = db_fetch_array("SELECT * FROM `tbl_content_service`");
    if(!empty($item))
        return $item;
}
//end getListWeb

//getList software
function getServiceSoftware(){
    $item = db_fetch_array("SELECT * FROM `tbl_service`");
    if (!empty($item))
        return $item;
}

function getContentServiceSoftware(){
    $item = db_fetch_array("SELECT * FROM `tbl_content_service`");
    if(!empty($item))
        return $item;
}
//end getList software

//getList zalo mini app
function getServiceZalo(){
    $item = db_fetch_array("SELECT * FROM `tbl_service`");
    if (!empty($item))
        return $item;
}

function getContentServiceZalo(){
    $item = db_fetch_array("SELECT * FROM `tbl_content_service`");
    if(!empty($item))
        return $item;
}
//end getList zalo mini app