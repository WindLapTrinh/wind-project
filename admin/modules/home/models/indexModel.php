<?php
//event
function Add($data)
{
    return db_insert('tbl_post_home', $data);
}

function Update($id, $data){
    return db_update('tbl_post_home', $data, "`id` = '{$id}'");
}

function Delete($id){
    return db_delete('tbl_post_home', "`id` = '{$id}'");
}

function getListId($id){
    $item = db_fetch_row("SELECT * FROM `tbl_post_home` WHERE `id`= '{$id}'");
    if (!empty($item))
        return $item;
}

function getList($start = 1, $num_per_page = 5, $where = "")
{

    if (!empty($where))
        $where = "WHERE {$where}";
    $getList = db_fetch_array("SELECT * FROM `tbl_post_home` {$where} LIMIT {$start}, $num_per_page");
    return $getList;
}
//search
function getListSearch($search){
    $item = db_fetch_array("SELECT * FROM `tbl_post_home` WHERE `title` LIKE '%$search%' OR `content` LIKE '%$search%'");
    if (!empty($item))
        return $item;
}
//end event
