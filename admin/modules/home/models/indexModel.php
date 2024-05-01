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

function getPage($num_page, $page, $base_url = "")
{
    //Đầu
    $str_pagging = "<ul class='pagination '>";
    if ($page > 1) {
        $page_prev = $page - 1;
        $str_pagging .= "
        <li class='page-item'>
            <a class='page-link' href='{$base_url}&page={$page_prev}' aria-label='Previous'>
                <span aria-hidden='true'>Trước</span>
         
            </a>
        </li>";
    }

    //Content
    for ($i = 1; $i <= $num_page; $i++) {
        $active = "";
        if ($i == $page)
            $active = "class = 'active'";
        $str_pagging .= "<li {$active} class='page-item'><a class='page-link' href='{$base_url}&page={$i}'>$i</a></li>";
    }
    if ($page < $num_page) {
        $page_next = $page + 1;
        $str_pagging .= "
        <li class='page-item'>
        <a class='page-link' href='{$base_url}&page={$page_next}' aria-label='Previous'>
            <span >Sau</span>
     
        </a>
    </li>";
    }

    //Cuối
    $str_pagging .= "</ul>";
    return $str_pagging;
}
//search
function getListSearch($search){
    $item = db_fetch_array("SELECT * FROM `tbl_post_home` WHERE `title` LIKE '%$search%' OR `content` LIKE '%$search%'");
    if (!empty($item))
        return $item;
}
//end event
