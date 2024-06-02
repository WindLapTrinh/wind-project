<?php
function construct() {
    //    echo "DÙng chung, load đầu tiên";
        load_model('index');
    }
    function indexAction() {
        $getList = getList();
        $getListProduct = getListProduct();

        $data['getListProduct'] = $getListProduct;
        $data['getList'] = $getList;
        load_view('index', $data);
    }
    function projectAction(){
        load_view('project');
    }
    
    