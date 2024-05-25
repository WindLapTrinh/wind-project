<?php
#method
function construct()
{
    load('lib', 'valitation');
    load_model('index');
}
#end method

#event product 
function addAction()
{
    if (isset($_POST['btn-add'])) {
        global $error;
        $error = array();

        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $customer = isset($_POST['customer']) ? $_POST['customer'] : '';
        $startDay = isset($_POST['startDay']) ? $_POST['startDay'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';
        $file = isset($_POST['file']) ? $_POST['file'] : '';
        $section = isset($_POST['section']) ? $_POST['section'] : '';

        // Xử lý upload ảnh đại diện
        if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
            $upload_dir = 'public/images/';
            $file = $upload_dir . $_FILES['file']['name'];
            // Thực hiện các bước kiểm tra và xử lý upload ảnh tương tự như trên
            // ...
            if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
                $image = $_FILES['file']['name'];
            } else {
                $error['image'] = "Upload ảnh đại diện thất bại";
            }
        } else {
            $error['image'] = "Lỗi khi upload ảnh đại diện";
        }


        // Kiểm tra và xử lý lỗi
        if (empty($error)) {
            $data = array(
                'name' => $name,
                'customer' => $customer,
                'startDay' => $startDay,
                'image' => isset($image) ? $image : "",
                'section' => $section,
                'content' => $content
            );
            Add($data);
            redirect("?mod=product&action=getList");
        }
    }
    load_view('index');
}

function getListAction(){
    if (isset($_POST['btn-search'])) {
        //phân trang list_pages
        $search = $_POST['search'];
        //phân trang list_pages
        $num_rows = db_num_rows("SELECT * FROM `tbl_service` WHERE `content` LIKE '%$search%' OR `name` LIKE '%$search%'");
        $num_per_page = 10;
        //Tổng số bản ghi
        $total_row  =  $num_rows;
        //Tổng số trang
        $num_page = ceil($total_row / $num_per_page);
        //Trang
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        //Xuất phát
        $start = ($page - 1) * $num_per_page;

        $getList = getListSearch($search);
        $data['total_row'] = $total_row;
        $data['num_rows'] = $num_rows;
        $data['num_page'] = $num_page;
        $data['page'] = $page;
        $data['getList'] = $getList;
    } else {
        //phân trang list_pages
        $num_rows = db_num_rows("SELECT * FROM `tbl_product`");
        $num_per_page = 10;
        //Tổng số bản ghi
        $total_row  =  $num_rows;
        //Tổng số trang
        $num_page = ceil($total_row / $num_per_page);
        //Trang
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

        //Xuất phát
        $start = ($page - 1) * $num_per_page;

        $getList = getList($start, $num_per_page);

        $data['total_row'] = $total_row;
        $data['num_rows'] = $num_rows;
        $data['num_page'] = $num_page;
        $data['page'] = $page;
        $data['getList'] = $getList;
    }
    //show_array($data);
    load_view('listProduct', $data);
}
#end event product