<<?php
get_header();
get_sidebar();
?>
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Thêm nội dung Bảng giá
            </div>
            <div class="card-body">
            <form action="" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="title">Tiêu đề bài viết</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="pcontent">Nội dung bài viết</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input class="form-control" type="text" name="icon" id="icon">
                    </div>
                    <div class="form-group">
                        <label for="comment">Mô tả thể loại</label>
                        <input class="form-control" type="text" name="comment" id="comment">
                    </div> 
                    <div class="form-group">
                        <label for="section">Thể loại</label>
                        <input class="form-control" type="text" name="section" id="section">
                    </div> 
                    <div class="form-group">
                        <label for="file">Ảnh bài viết</label>
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