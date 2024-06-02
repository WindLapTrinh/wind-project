<?php
#method

function construct()
{
    load('lib', 'valitation');
    load_model('index');
}

#end method

#event
function addAction()
{
    if (isset($_POST['btn-add'])) {
        global $error;
        $error = array();

        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $customer = isset($_POST['customer']) ? $_POST['customer'] : '';
        $startDay = isset($_POST['startDay']) ? $_POST['startDay'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';
        $note = isset($_POST['note']) ? $_POST['note'] : '';
        $content_new = isset($_POST['content_new']) ? $_POST['content_new'] : '';
        $video = isset($_POST['video']) ? $_POST['video'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
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
                'content' => $content,
                'note' => $note,
                'content_new' => $content_new,
                'address' => $address,
                'video' => $video

            );
            Add($data);
            redirect("?mod=news&action=getList");
        }
    }
    load_view('index', $data);
}

function updateAction()
{
    //id 
    $id = $_GET['id'];

    // Lấy thông tin khách hàng cần chỉnh sửa từ database
    $getListId = getListId($id);

    if (isset($_POST['btn-edit'])) {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $customer = isset($_POST['customer']) ? $_POST['customer'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';
        $section = isset($_POST['section']) ? $_POST['section'] : '';
        $startDay = isset($_POST['startDay']) ? $_POST['startDay'] : '';


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
                'section' => $section,
                'startDay' => $startDay,
                'customer' => $customer,
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
    redirect("?mod=news&action=getList");
}

function getListAction()
{
    if (isset($_POST['btn-search'])) {
        //phân trang list_pages
        $search = $_POST['search'];
        //phân trang list_pages
        $num_rows = db_num_rows("SELECT * FROM `tbl_new_we` WHERE `content` LIKE '%$search%' OR `name` LIKE '%$search%'");
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
        $num_rows = db_num_rows("SELECT * FROM `tbl_new_we`");
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
    load_view('listNews', $data);
}
#endevent