<?php
#method
function construct()
{
    load('lib', 'valitation');
    load_model('index');
}
function indexAction()
{
    load_view('index');
}
#end method

#event serivce
function addAction()
{
    if (isset($_POST['btn-add'])) {
        global $error;
        $error = array();

        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';
        $icon = isset($_POST['icon']) ? $_POST['icon'] : '';
        $note = isset($_POST['note']) ? $_POST['note'] : '';
        $file = isset($_POST['file']) ? $_POST['file'] : '';
        $section = isset($_POST['section']) ? $_POST['section'] : '';
        $service = isset($_POST['service']) ? $_POST['service'] : '';
        $category = isset($_POST['category']) ? $_POST['category'] : '';

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
                'content' => $content,
                'icon' => $icon,
                'note' => $note,
                'image' => isset($image) ? $image : "",
                'section' => $section,
                'service' => $service,
                'category' => $category
            );
            Add($data);
            redirect("?mod=secvice&action=getList");
        }
    }
    load_view('index');
}
function updateAction()
{
    //id 
    $id = $_GET['id'];

    // Lấy thông tin khách hàng cần chỉnh sửa từ database
    $getListId = getListId($id);

    if (isset($_POST['btn-edit'])) {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';
        $icon = isset($_POST['icon']) ? $_POST['icon'] : '';
        $section = isset($_POST['section']) ? $_POST['section'] : '';
        $service = isset($_POST['service']) ? $_POST['service'] : '';
        $note = isset($_POST['note']) ? $_POST['note'] : '';

        //xử lý update image
        if ($_FILES['file']['name'] != null) {
            //Thư mục chứa file load
            $upload_dir = 'public/images/';

            //Đường dẫn của file  sau khi upload.
            $upload_file = $upload_dir . $_FILES['file']['name'];

            //Xử lý khi upload đúng file ảnh
            $type_allow = array('png', 'jpg', 'gif', 'jpeg', 'webp');
            $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            if (!in_array(strtolower($type), $type_allow)) {
                $error['type'] = "Đường dẫn ảnh phải là jpg, png, gif, ipeg";
            } else {
                //Kiểm tra ảnh phải nhỏ hơn 20MB ~ 29.000.000
                $file_size = $_FILES['file']['size'];
                if ($file_size > 29000000) {
                    $error['file_size'] = "File ảnh phải nhỏ hơn 20MB";
                }

                //Kiểm tra xem có cùng tên trên hệ thôngs hay không
                if (file_exists($upload_file)) {
                    $file_name = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
                    $new_file_name = $file_name . '- Copy.';
                    $new_upload_file = $upload_dir . $new_file_name . $type;

                    //Tang chi so khi file do da ton tai
                    $k = 1;
                    while (file_exists($new_upload_file)) {
                        $new_file_name = $file_name . "- Copy{$k}.";
                        $k++;
                        $new_upload_file = $upload_dir . $new_file_name . $type;
                    }
                    $upload_file = $new_upload_file;
                }
            }
            if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
                $image = $_FILES['file']['name'];
            } else {
                $error['image'] = "Upload thất bại";
            }
            show_array($_FILES);
            // Nếu không có lỗi, thêm dữ liệu vào cơ sở dữ liệu
        } else {
            $image = $getListId['image'];
        }

        // Kiểm tra và xử lý lỗi
        if (empty($error)) {
            $data = array(
                'name' => $name,
                'content' => $content,
                'icon' => $icon,
                'section' => $section,
                'service' => $service,
                'note' => $note,
                'image' => $image

            );
            Update($id, $data);
            redirect("?mod=service&action=getList");
        }
    }


    $data['getListId'] = $getListId;
    //show_array($data);
    load_view('update', $data);
}
function deleteAction(){
    $id = $_GET['id'];
    echo $id;
    Delete($id);
    redirect("?mod=service&action=getList");
}
function getListAction()
{
    if (isset($_POST['btn-search'])) {
        //phân trang list_pages
        $search = $_POST['search'];
        //phân trang list_pages
        $num_rows = db_num_rows("SELECT * FROM `tbl_customer` WHERE `title` LIKE '%$search%' OR `name` LIKE '%$search%'");
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
        $num_rows = db_num_rows("SELECT * FROM `tbl_post_home`");
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
    load_view('listService', $data);
}
#end service
#cat
function updateCatAction()
{
    //id 
    $id = $_GET['id'];

    // Lấy thông tin khách hàng cần chỉnh sửa từ database
    $getListCatId = getListCatId($id);

    if (isset($_POST['btn-edit'])) {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';
        $icon = isset($_POST['icon']) ? $_POST['icon'] : '';
        $section = isset($_POST['section']) ? $_POST['section'] : '';

        // Kiểm tra và xử lý lỗi
        if (empty($error)) {
            $data = array(
                'name' => $name,
                'content' => $content,
                'icon' => $icon,
                'section' => $section,
            );
            updateCat($id, $data);
            redirect("?mod=service&action=cat");
        }
    }


    $data['getListCatId'] = $getListCatId;
    //show_array($data);
    load_view('updateCat', $data);
}
function deleteCatAction()
{
    $id = $_GET['id'];
    deleteCat($id);
    redirect("?mod=service&action=cat");
}
function catAction()
{

    $getListCat = getListCat();

    $data['getListCat'] = $getListCat;

    if (isset($_POST['btn-add'])) {
        global $error;
        $error = array();

        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';
        $icon = isset($_POST['icon']) ? $_POST['icon'] : '';
        $section = isset($_POST['section']) ? $_POST['section'] : '';
        $category = isset($_POST['category']) ? $_POST['category'] : '';


        // Kiểm tra và xử lý lỗi
        if (empty($error)) {
            $data = array(
                'name' => $name,
                'content' => $content,
                'icon' => $icon,
                'section' => $section,
                'category' => $category
            );
            addCat($data);
            redirect("?mod=service&action=cat");
        }
    }

    load_view('cat', $data);
}
#end cat
