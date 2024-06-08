<?php
#method
function construct()
{
    load('lib', 'valitation');
    load_model('index');
}
#end method

#event
function addAction(){

    

    load_view('index');
}