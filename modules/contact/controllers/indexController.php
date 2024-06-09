<?php 
function construct(){
    //    echo "DÙng chung, load đầu tiên";
    load_model('index');
}
function indexAction(){
    if(isset($_POST['btn-add'])){
        global $error;
        $error = array();

        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';

        if (empty($error)) {
           SendMail($name, $content, $email);
        }
        redirect("trang-chu.html");
    }
    load_view('index');
}