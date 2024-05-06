<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/solid.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="main.js"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/header.css">

    <title>Admintrator</title>
</head>

<body>
    <div id="warpper" class="nav-fixed">
        <nav class="topnav shadow navbar-light user-header d-flex">

        <div class="navbar-brand"><a href="?" class="user_login">
        <img style="max-width: 84px; max-height: 71px;" src="public/images/logo/wind.png" alt="">
        WIND LẬP TRÌNH
                <!-- <?php echo $_SESSION['user_login']; ?> -->
            </a></div>
            <div class="nav-right ">
                <div class="btn-group mr-auto">
                    <button type="button" class="btn dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="plus-icon fas fa-plus-circle"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="?view=add-post">Thêm bài viết</a>
                        <a class="dropdown-item" href="?view=add-product">Thêm sản phẩm</a>
                        <a class="dropdown-item" href="?view=list-order">Thêm đơn hàng</a>
                    </div>
                </div>
                <div class="btn-group ">
                    <button type="button" class="btn dropdown-toggle name-login" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Wind
                    <!-- <?php echo $_SESSION['user_login']; ?> -->
                    </button>
                    <div class="dropdown-menu dropdown-menu-right ">
                        <a class="dropdown-item" href="?mod=users&action=add">Tài khoản</a>
                        <a class="dropdown-item" href="?mod=users&action=logout">Thoát</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end nav  -->