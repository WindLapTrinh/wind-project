<?php 
function construct(){
    //    echo "DÙng chung, load đầu tiên";
    load_model('index');
}
function indexAction(){
    if(isset($_POST['btn-add'])){
        require "config/email.php";
        global $error;
        $error = array();

        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';

        if (empty($error)) {
           SendMail($name, $content, $email);
        }else{
            show_array($error);
        }
        show_array($_POST);
    }
    show_array($_POST);
    load_view('index');
}