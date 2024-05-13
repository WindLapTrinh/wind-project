<<?php
get_header();
get_sidebar();
?>
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Thêm dịch vụ
            </div>
            <div class="card-body">
            <form action="" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="name">Tên dịch vụ</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="service">Loại dịch vụ</label>
                        <input class="form-control" type="text" name="service" id="service">
                    </div>
                    <div class="form-group">
                        <label for="section">Nội dung liên quan</label>
                        <input class="form-control" type="text" name="section" id="section">
                    </div>
                    <div class="form-group">
                        <label for="content">Nội dung</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input class="form-control" type="text" name="icon" id="icon">
                    </div>
                    
                    <div class="form-group">
                        <label for="note">Ghi chú</label>
                        <input class="form-control" type="text" name="note" id="note">
                    </div>  
                              
                    <div class="form-group">
                        <label for="logo">Ảnh dịch vụ</label>
                        <input class="form-control" type="file" name="file" id="logo">
                    </div>    
                    <button type="submit" name="btn-add" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>