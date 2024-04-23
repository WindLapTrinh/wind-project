<?php 
function get_post_home(){
    $item = db_fetch_array("SELECT * FROM `tbl_post_home`");
    if (!empty($item))
        return $item;
}