<?php
// get_header();
// get_sidebar();
?>
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Cập nhập thông tin khách hàng
            </div>
            <div class="card-body">
                <form action="" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="name">Tên khách hàng</label>
                        <input class="form-control" type="text" name="name" id="name" value="<?php echo $getListId['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="title">Tiêu đề bài viết</label>
                        <input class="form-control" type="text" name="title" id="title" value="<?php echo $getListId['title'] ?>">
                    </div>
                    <?php echo form_error('title') ?>
                    <div class="form-group">
                        <label for="note">Ghi chú</label>
                        <input class="form-control" type="text" name="note" id="note" value="<?php echo $getListId['note'] ?>">
                    </div>
                    <?php echo form_error('title') ?>
                    <div class="form-group">
                        <label for="content">Nội dung bài viết</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="5"><?php echo $getListId['content'] ?></textarea>
                    </div>
                    <?php echo form_error('content') ?>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input class="form-control" type="text" name="icon" id="icon" value="<?php echo $getListId['icon'] ?>">
                    </div>
                    <?php echo form_error('icon') ?>
                    <div class="form-group">
                        <label for="avatar">Ảnh khách hàng</label>
                        <input class="form-control" type="file" name="avatar" id="avatar" value="<?php echo $getListId['avatar'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="logo">Logo của khách hàng</label>
                        <input class="form-control" type="file" name="logo" id="logo" value="<?php echo $getListId['logo'] ?>">
                    </div>
                    <?php echo form_error('logo') ?>
                    <button type="submit" name="btn-edit" class="btn btn-primary">Cập nhập</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>