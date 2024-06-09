<?php
function getList(){
    $item = db_fetch_array("SELECT * FROM `tbl_price`");
    if (!empty($item))
        return $item;
}

function getListContent(){
    $item = db_fetch_array("SELECT * FROM `tbl_content_price`");
    if(!empty($item))
        return $item;
}