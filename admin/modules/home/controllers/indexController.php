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

#envent
function addAction()
{
    if (isset($_POST['btn-add'])) {
        global $error;
        $error = array();

        // Kiểm tra và xử lý lỗi cho trường 'title'
        $title = isset($_POST['title']) ? $_POST['title'] : '';
        if (empty($title)) {
            $error['title'] = "Tiêu đề không được để trống";
        }

        // Kiểm tra và xử lý lỗi cho trường 'content'
        $content = isset($_POST['content']) ? $_POST['content'] : '';

        // Kiểm tra và xử lý lỗi cho trường 'icon'
        $icon = isset($_POST['icon']) ? $_POST['icon'] : '';

        //Thư mục chứa file load
        $upload_dir = 'public/images/';

        //Đường dẫn của file  sau khi upload.
        $upload_file = $upload_dir . $_FILES['file']['name'];

        //Xử lý khi upload đúng file ảnh
        $type_allow = array('png', 'jpg', 'gif', 'jpeg');
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
        if (empty($error)) {
            $data = array(
                'title' => $title,
                'content' => $content,
                'icon' => $icon,
                'image' => $image
            );
            Add($data);
        }
        show_array($_POST);
    }
    load_view('index');
}
function updateAction(){
    //id 
    $id = $_GET['id'];

    if (isset($_POST['btn-edit'])) {
        //Kiểm tra dữ liệu
        if (empty($_POST['title'])) {
            $error['title'] = "Tiêu đề không được để trống";
        } else {
            $title = $_POST['title'];
        }

        //page_content
        if (empty($_POST['content'])) {
            $error['content'] = "Nội dung bài viết không được để trống";
        } else {
            $content = $_POST['content'];
        }
       
        //Xuất dữ liệu, update qua database
        if (empty($error)) {
            $data = array(
                //'user_id' => $user_id,
                'title' => $title,
                'content' => $content,
            );
            Update($id, $data);
        }
    }
    $getListId = getListId($id);

    $data['getListId'] = $getListId;
    //show_array($data);
    load_view('update', $data);

}
function deleteAction(){
    $id = $_GET['id'];
    echo $id;
    Delete($id);
    redirect("?mod=home&action=getList");
}
function getListAction(){
    if (isset($_POST['btn-search'])) {
        //phân trang list_pages
        $search = $_POST['search'];
        //phân trang list_pages
        $num_rows = db_num_rows("SELECT * FROM `tbl_post_home` WHERE `title` LIKE '%$search%' OR `content` LIKE '%$search%'");
        $num_per_page = 5;
        //Tổng số bản ghi
        $total_row  =  $num_rows;
        //Tổng số trang
        $num_page = ceil($total_row / $num_per_page);
        //Trang
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        //Xuất phát
        $start = ($page - 1) * $num_per_page;

        $listSearch = getListSearch($search);
        $post_images = get_post_by_image_id();
        $category_name = get_category_name_by_id();

        $data['total_row'] = $total_row;
        $data['num_rows'] = $num_rows;
        $data['num_page'] = $num_page;
        $data['page'] = $page;
        $data['listSearch'] = $listSearch;
    } else {
        //phân trang list_pages
        $num_rows = db_num_rows("SELECT * FROM `tbl_post_home`");
        $num_per_page = 5;
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
    load_view('listHome', $data);
}
#end event
