<?php
/*
 * --------------------------------
 * EMAIL
 * --------------------------------
 * Trong phần này chúng ta khai báo các thông số để cấu hình
 * gửi mail bằng php
 * --------------------------------
 * GIẢI THÍCH BIẾN
 * --------------------------------
 * protocol: Giao thức gửi mail
 * smtp_host: Host gửi mail
 * smtp_port: Cổng
 * smtp_user: Tên đăng nhập tài khoản gửi mail
 * smtp_pass: Password tài khoản gửi mail
 * smtp_port: Cổng
 * mailtype: Định dạng nội dung mail
 * charset: Mã ký tự nội dung mail(UTF-8)
 */

$email = Array(
    'protocol' => 'smtp',
    'host' => 'ssl://smtp.googlemail.com',
    'port' => 465,
    'user' => 'info.windlaptrinh@gmail.com',
    'fullname' => 'Wind Lập Trình',
    'pass' => '',
    'timeout' => '7',
    'mailtype' => 'html',
    'charset' => 'UTF-8'
);



