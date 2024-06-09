<?php 
function Add($data)
{
    return db_insert('tbl_price', $data);
}

function addCat($data)
{
    return db_insert('tbl_content_price', $data);
}

function deleteCat($id){
    return db_delete('tbl_content_price',"`id` = '{$id}'");
}

function getListCat(){
    $item = db_fetch_array("SELECT * FROM `tbl_content_price`");
    if (!empty($item))
        return $item;
}

function getListCatId($id){
    $item = db_fetch_row("SELECT * FROM `tbl_content_price` WHERE `id`= '{$id}'");
    if (!empty($item))
        return $item;
}