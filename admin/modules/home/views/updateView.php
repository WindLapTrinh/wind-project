<?php
get_header();
get_sidebar();
?>
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Cập nhập thông tin bài viết
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="title">Tiêu đề bài viết</label>
                        <input class="form-control" type="text" name="title" id="title" value="<?php echo $getListId['title'] ?>">
                    </div>
                    <?php echo form_error('title') ?>
                    <div class="form-group">
                        <label for="content">Nội dung bài viết</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="5"><?php echo $getListId['content'] ?></textarea>
                    </div>
                    <?php echo form_error('content') ?>

                    <button type="submit" name="btn-edit" class="btn btn-primary">Cập nhập</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>