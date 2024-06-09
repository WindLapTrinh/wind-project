<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chào mừng bạn đến với Wind Lập Trình</title>
  <!-- style.css -->
  <link rel="stylesheet" href="public/css/login.css">
  <!-- bootstrap.css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row border rounded-5 p-3 shadow box-area">

      <!-- left -->
      <dir class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box " style="backdrop-filter: blur(20px);">
        <div class="featured-image mb-3">
          <img src="public/images/banner-login.png" class="img-fluid" style="width: 450px;">
        </div>

        <p class="text-white fs-2" style="font-family:'Courier New', Courier, monospace;
                font-weight:600;"><span style="color: white;">Wind Lập Trình</span></p>
      </dir>

      <!-- right -->

      <!-- signup box  -->
      <div class="col-md-6 right-box" id="signUp">
        <form action="" method="post">
          <div class="row align-items-center">
            <div class="header-text mb-4">
              <a href="#" class="d-flex justify-content-center mb-4">
                <img src="public/images/logo/wind.png" width="200">
              </a>
              <div class="text-center m5-5">
                <h3 class="fw-bold text-white">Hello. Employee !</h3>
                <p class="text-secondary">Chúc bạn ngày mới làm việc hiệu quả.</p>
              </div>
              <div class="col-12 d-none" id="msgDiv">
                <div class="alert alert-danger" role="alert" id="msg"></div>
              </div>
              <div class="input-group mb-2">
                <span class="input-group-text">
                  <ion-icon name="person-outline"></ion-icon>
                </span>
                <input type="text" name="username" class="form-control form-control-lg fs-6" placeholder="User Name">
              </div>
              <?php echo form_error('username') ?>

              <div class="input-group mb-2">
                <span class="input-group-text">
                  <ion-icon name="lock-closed-outline"></ion-icon>
                </span>
                <input type="password" name="password" class="form-control form-control-lg fs-6" placeholder="Password">
              </div>
              <?php echo form_error('password') ?>

              <div class="input-group mb-3">
                <button name="btn-login" class="btn btn-lg btn-primary w-100 fs-6">Đăng nhập</button>
              </div>
              <?php echo form_error('account')  ?>
              <div class="row">
                <small class="text-white">Lấy lại <a href="#">mật khẩu</a></small>
              </div>
            </div>
          </div>
      </div>
      </form>

    </div>
  </div>


  <!-- Ionic -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!-- bootstrap.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>