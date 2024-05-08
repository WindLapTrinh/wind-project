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
function catAction(){

    $getListCat = getListCat();

    $data['getListCat'] = $getListCat;

    if (isset($_POST['btn-add'])) {
        global $error;
        $error = array();

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
            addCat($data);
            redirect("?mod=service&action=cat");
        } 

    }

    load_view('cat', $data);
}
#end event