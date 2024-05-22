<?php
get_header();
get_sidebar();
?>
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Cập nhập thông tin dịch vụ
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Tên Danh mục</label>
                        <input class="form-control" type="text" name="name" id="name" value="<?php echo $getListCatId['name'] ?>">
                    </div>
                    <?php echo form_error('name') ?>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input class="form-control" type="text" name="icon" id="icon" value="<?php echo $getListCatId['icon'] ?>">
                    </div>
                    <?php echo form_error('icon') ?>
                    <div class="form-group">
                        <label for="content">Nội dung danh mục</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="5"><?php echo $getListCatId['content'] ?></textarea>
                    </div>
                    <?php echo form_error('content') ?>
                    <div class="form-group">
                        <label for="section">Loại Danh mục</label>
                        <input class="form-control" type="text" name="section" id="section" value="<?php echo $getListCatId['section'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="category">Loại Nội dung</label>
                        <input class="form-control" type="text" name="category" id="category" value="<?php echo $getListCatId['category'] ?>">
                    </div>

                    <button type="submit" name="btn-edit" class="btn btn-primary">Cập nhập</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>