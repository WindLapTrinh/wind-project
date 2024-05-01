<<?php
get_header();
get_sidebar();
?>
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Thêm bài viết
            </div>
            <div class="card-body">
            <form action="" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="title">Tiêu đề bài viết</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                    <?php echo form_error('title') ?>

                    <div class="form-group">
                        <label for="pcontent">Nội dung bài viết</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="5"></textarea>
                    </div>
                    <?php echo form_error('pcontent') ?>
                    <div class="form-group">
                        <label for="page_title">Icon</label>
                        <input class="form-control" type="text" name="icon" id="icon">
                    </div>
                    <div class="form-group">
                        <label for="page_title">Danh mục</label>
                        <input class="form-control" type="text" name="categori" id="categori">
                    </div> 
                    <div class="form-group">
                        <label for="page_title">Ảnh bài viết</label>
                        <input class="form-control" type="file" name="file" id="file">
                    </div>    
                    <?php echo form_error('image') ?>                               
                    <button type="submit" name="btn-add" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>