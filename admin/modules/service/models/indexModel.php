<?php 


function getListCat(){
    $item = db_fetch_array("SELECT * FROM `tbl_content_service`");
    if (!empty($item))
        return $item;
}
function addCat($data)
{
    return db_insert('tbl_content_service', $data);
}