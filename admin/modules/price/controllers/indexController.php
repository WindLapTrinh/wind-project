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
        $content = isset($_POST['content']) ? $_POST['content'] : '';
        $icon = isset($_POST['icon']) ? $_POST['icon'] : '';
        $note = isset($_POST['note']) ? $_POST['note'] : '';
        $file = isset($_POST['file']) ? $_POST['file'] : '';
        $section = isset($_POST['section']) ? $_POST['section'] : '';
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
                'category' => $category,
            );
            Add($data);
            redirect("?mod=price&action=getList");
        }
    }
    load_view('index');
}

function addCatAction()
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
                'category' => $category,
            );
            addCat($data);
            redirect("?mod=price&action=addCat");
        }
    }

    load_view('cat', $data);
}

function deleteAction(){

}

function deleteCatAction(){
    $id = $_GET['id'];
    deleteCat($id);
    redirect("?mod=price&action=addCat");
}
