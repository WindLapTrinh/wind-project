<?php
function construct() {
    //    echo "DÙng chung, load đầu tiên";
        load_model('index');
    }
    function indexAction() {
    //    show_array($list_users);
        load_view('index');
    }
    function projectAction(){
        load_view('project');
    }
    
    