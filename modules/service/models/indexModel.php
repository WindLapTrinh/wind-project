<?php 
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