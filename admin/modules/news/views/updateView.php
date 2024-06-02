<?php
get_header();
get_sidebar();
?>
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
              Cập nhập tin tức
            </div>
            <div class="card-body">
            <form action="" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="name">Tên tin tức</label>
                        <input class="form-control" type="text" name="name" id="name"  value="<?php echo $getListId['name'] ?>">
                    </div>                
                    <div class="form-group">
                        <label for="customer">Tên khách hàng</label>
                        <input class="form-control" type="text" name="customer" id="customer"  value="<?php echo $getListId['customer'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="content">Nội dung</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="5"  value="<?php echo $getListId['content'] ?>"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="startDay">Ngày tạo</label>
                        <input class="form-control" type="text" name="startDay" id="startDay"  value="<?php echo $getListId['startDay'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="content_new">Nội dung chi tiết</label>
                        <textarea name="content_new" class="form-control" id="content_new" cols="30" rows="5"  value="<?php echo $getListId['content_new'] ?>"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="note">Ghi chú</label>
                        <input class="form-control" type="text" name="note" id="note"  value="<?php echo $getListId['note'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input class="form-control" type="text" name="address" id="address"  value="<?php echo $getListId['address'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="video">Video</label>
                        <input class="form-control" type="text" name="video" id="video"  value="<?php echo $getListId['video'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="section">Danh mục</label>
                        <input class="form-control" type="text" name="section" id="section"  value="<?php echo $getListId['section'] ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="logo">Ảnh sản phẩm</label>
                        <input class="form-control" type="file" name="file" id="logo"  value="<?php echo $getListId['image'] ?>">
                    </div>    
                    <button type="submit" name="btn-add" class="btn btn-primary">Cập nhập</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

