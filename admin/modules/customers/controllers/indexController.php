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

#event 
function addAction()
{
    if (isset($_POST['btn-add'])) {
        global $error;
        $error = array();

        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $title = isset($_POST['title']) ? $_POST['title'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';
        $icon = isset($_POST['icon']) ? $_POST['icon'] : '';
        $note = isset($_POST['note']) ? $_POST['note'] : '';

        // Xử lý upload ảnh đại diện
        if ($_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
            $upload_dir = 'public/images/';
            $avatar_file = $upload_dir . $_FILES['avatar']['name'];
            // Thực hiện các bước kiểm tra và xử lý upload ảnh tương tự như trên
            // ...
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar_file)) {
                $avatar = $_FILES['avatar']['name'];
            } else {
                $error['avatar'] = "Upload ảnh đại diện thất bại";
            }
        } else {
            $error['avatar'] = "Lỗi khi upload ảnh đại diện";
        }

        // Xử lý upload ảnh logo
        if ($_FILES['logo']['error'] === UPLOAD_ERR_OK) {
            $upload_dir = 'public/images/';
            $logo_file = $upload_dir . $_FILES['logo']['name'];
            // Thực hiện các bước kiểm tra và xử lý upload ảnh tương tự như trên
            // ...
            if (move_uploaded_file($_FILES['logo']['tmp_name'], $logo_file)) {
                $logo = $_FILES['logo']['name'];
            } else {
                $error['logo'] = "Upload ảnh logo thất bại";
            }
        } else {
            $error['logo'] = "Lỗi khi upload ảnh logo";
        }

        // Kiểm tra và xử lý lỗi
        if (empty($error)) {
            $data = array(
                'name' => $name,
                'title' => $title,
                'content' => $content,
                'icon' => $icon,
                'note' => $note,
                'avatar' => isset($avatar) ? $avatar : "",
                'logo' => isset($logo) ? $logo : "",
            );
            Add($data);
            redirect("?mod=customers&action=getList");
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
        //Kiểm tra dữ liệu     
        $name = $_POST['name'];  
        $title = $_POST['title'];
        $note = $_POST['note'];
        $content = $_POST['content'];
        $icon = $_POST['icon'];

        //xử lý update avatar
        if ($_FILES['avatar']['name'] != null) {
            //Thư mục chứa file load
            $upload_dir = 'public/images/';

            //Đường dẫn của file  sau khi upload.
            $upload_file = $upload_dir . $_FILES['avatar']['name'];

            //Xử lý khi upload đúng file ảnh
            $type_allow = array('png', 'jpg', 'gif', 'jpeg','webp');
            $type = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
            if (!in_array(strtolower($type), $type_allow)) {
                $error['type'] = "Đường dẫn ảnh phải là jpg, png, gif, ipeg";
            } else {
                //Kiểm tra ảnh phải nhỏ hơn 20MB ~ 29.000.000
                $file_size = $_FILES['avatar']['size'];
                if ($file_size > 29000000) {
                    $error['file_size'] = "File ảnh phải nhỏ hơn 20MB";
                }

                //Kiểm tra xem có cùng tên trên hệ thôngs hay không
                if (file_exists($upload_file)) {
                    $file_name = pathinfo($_FILES['avatar']['name'], PATHINFO_FILENAME);
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
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $upload_file)) {
                $avatar = $_FILES['avatar']['name'];
            } else {
                $error['avatar'] = "Upload thất bại";
            }
            show_array($_FILES);
            // Nếu không có lỗi, thêm dữ liệu vào cơ sở dữ liệu
        }else{
            // Nếu không có ảnh được upload, sử dụng ảnh cũ từ database
            $avatar = $getListId['avatar'];
        }

        //xử lý ảnh logo
        if ($_FILES['logo']['name'] != null) {
            //Thư mục chứa file load
            $upload_dir = 'public/images/';

            //Đường dẫn của file  sau khi upload.
            $upload_file = $upload_dir . $_FILES['logo']['name'];

            //Xử lý khi upload đúng file ảnh
            $type_allow = array('png', 'jpg', 'gif', 'jpeg','webp');
            $type = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
            if (!in_array(strtolower($type), $type_allow)) {
                $error['type'] = "Đường dẫn ảnh phải là jpg, png, gif, ipeg";
            } else {
                //Kiểm tra ảnh phải nhỏ hơn 20MB ~ 29.000.000
                $file_size = $_FILES['logo']['size'];
                if ($file_size > 29000000) {
                    $error['file_size'] = "File ảnh phải nhỏ hơn 20MB";
                }

                //Kiểm tra xem có cùng tên trên hệ thôngs hay không
                if (file_exists($upload_file)) {
                    $file_name = pathinfo($_FILES['logo']['name'], PATHINFO_FILENAME);
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
            if (move_uploaded_file($_FILES['logo']['tmp_name'], $upload_file)) {
                $logo = $_FILES['logo']['name'];
            } else {
                $error['logo'] = "Upload thất bại";
            }
            show_array($_FILES);
            // Nếu không có lỗi, thêm dữ liệu vào cơ sở dữ liệu
        }else{
            $logo = $getListId['logo'];
        }
        //Xuất dữ liệu, update qua database
        if (empty($error)) {
            $data = array(
                //'user_id' => $user_id,'
                'name' => $name,
                'title' => $title,
                'note' => $note,
                'content' => $content,
                'avatar' => $avatar,
                'icon' => $icon,
                'logo' => $logo
            );
            Update($id, $data);
        }
        redirect("mod=customers&action=getList");
    }
    $getListId = getListId($id);

    $data['getListId'] = $getListId;
    //show_array($data);
    load_view('update', $data);
}

function deleteAction()
{
    $id = $_GET['id'];
    echo $id;
    Delete($id);
    redirect("?mod=customers&action=getList");
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
    load_view('listCustomer', $data);
}
#end event
