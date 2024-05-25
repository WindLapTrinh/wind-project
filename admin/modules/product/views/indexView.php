<<?php
get_header();
get_sidebar();
?>
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Thêm sản phẩm
            </div>
            <div class="card-body">
            <form action="" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="name">Tên sản phẩm</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>                
                    <div class="form-group">
                        <label for="customer">Tên khách hàng</label>
                        <input class="form-control" type="text" name="customer" id="customer">
                    </div>
                    <div class="form-group">
                        <label for="content">Nội dung</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="startDay">Ngày tạo</label>
                        <input class="form-control" type="text" name="startDay" id="startDay">
                    </div>

                    <div class="form-group">
                        <label for="section">Danh mục</label>
                        <input class="form-control" type="text" name="section" id="section">
                    </div>
                    
                    <div class="form-group">
                        <label for="logo">Ảnh sản phẩm</label>
                        <input class="form-control" type="file" name="file" id="logo">
                    </div>    
                    <button type="submit" name="btn-add" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>