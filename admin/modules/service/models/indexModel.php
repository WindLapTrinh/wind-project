<?php 

// event cat
function getListCat(){
    $item = db_fetch_array("SELECT * FROM `tbl_content_service`");
    if (!empty($item))
        return $item;
}
function getListCatId($id){
    $item = db_fetch_row("SELECT * FROM `tbl_content_service` WHERE `id`= '{$id}'");
    if (!empty($item))
        return $item;
}
function addCat($data)
{
    return db_insert('tbl_content_service', $data);
}
function updateCat($id, $data){
    return db_update('tbl_content_service', $data, "`id` = '{$id}'");
}

//end event cat