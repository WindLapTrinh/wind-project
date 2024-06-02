<?php 
function getList(){
    $item = db_fetch_array("SELECT * FROM `tbl_new_we`");
    if (!empty($item))
        return $item;
}
function getListProduct(){
    $item = db_fetch_array("SELECT * FROM `tbl_product`");
    if (!empty($item))
        return $item;

}