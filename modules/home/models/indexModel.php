<?php 


function get_post_home(){
    $item = db_fetch_array("SELECT * FROM `tbl_post_home`");
    if (!empty($item))
        return $item;
}

function getCustomer(){
    $item = db_fetch_array("SELECT * FROM `tbl_customer`");
    if (!empty($item))
        return $item;
}

function getProductWebsite(){
    $item = db_fetch_array("SELECT * FROM `tbl_product`");
    if (!empty($item))
        return $item;
}