<?php 
// function check_login($username, $password){
//         if($username == $username['username'] && $password == $password['password']){
//             return true;
//         }
//     return false;

// }

//Hàm này trả về true nếu tồn tại user_login
//Hàm này trả về true nếu tồn tại is_login
function is_login(){
    if(isset($_SESSION['is_login'])){
        return true;
    }
    return false;
}

//Hàm này trả về true nếu tồn tại user_login
function user_login(){
    if(isset($_SESSION['user_login'])){
        return $_SESSION['user_login'];
    }
    return false;
}
?>