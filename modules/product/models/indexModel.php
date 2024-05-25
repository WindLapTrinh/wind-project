<?php 
function getProductWebsite(){
    $item = db_fetch_array("SELECT * FROM `tbl_product`");
    if (!empty($item))
        return $item;
}