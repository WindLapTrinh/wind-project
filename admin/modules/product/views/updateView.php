<?php 
get_header();
get_sidebar();
?>
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Cập nhập thông tin sản phẩm 
            </div>
            <div class="card-body">
                <form action="" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="name">Tên sản phẩm</label>
                        <input class="form-control" type="text" name="name" id="name" value="<?php echo $getListId['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="customer">Tên khách hàng</label>
                        <input class="form-control" type="text" name="customer" id="customer" value="<?php echo $getListId['customer'] ?>">
                    </div>
                    <?php echo form_error('customer') ?>
                    <div class="form-group">
                        <label for="section">Danh mục</label>
                        <input class="form-control" type="text" name="section" id="section" value="<?php echo $getListId['section'] ?>">
                    </div>
                    <?php echo form_error('section') ?>
                    <div class="form-group">
                        <label for="content">Nội dung bài viết</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="5"><?php echo $getListId['content'] ?></textarea>
                    </div>
                    <?php echo form_error('content') ?>
                    
                    <div class="form-group">
                        <label for="image">Ảnh dịch vụ</label>
                        <input class="form-control" type="file" name="file" id="file" value="<?php echo $getListId['image'] ?>">
                    </div>
                    <?php echo form_error('image') ?>
                    <button type="submit" name="btn-edit" class="btn btn-primary">Cập nhập</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>