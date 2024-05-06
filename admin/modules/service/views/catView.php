<?php
get_header();
get_sidebar();
?>
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        Thêm danh mục
                    </div>
                    <div class="card-body">
                    <form action="" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <label for="name">Tên danh mục</label>
                                <input class="form-control" type="text" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="icon">Icon</label>
                                <input class="form-control" type="text" name="icon" id="icon">
                            </div>
                            <div class="form-group">
                                <label for="content">Nội dung</label>
                                <input class="form-control" type="text" name="content" id="icon">
                            </div>
                            <div class="form-group">
                                <label for="section">Loại danh mục</label>
                                <input class="form-control" type="section" name="section" id="icon">
                            </div>

                            <button type="submit" name="btn-add" class="btn btn-primary">Thêm mới</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        Danh mục
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Tên danh mục</th>
                                    <th scope="col">Nội dung</th>
                                    <th>Loại danh mục</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($getListCat > 0) { ?>
                                    <?php foreach ($getListCat as $item) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $item['name'] ?></th>
                                            <td><?php echo $item['content'] ?></td>
                                            <td><?php echo $item['section'] ?></td>
                                            <td>
                                                <a href="?mod=service&action=editCat&id=<?php echo $item['id'] ?>">
                                                    <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                                </a>
                                                <a href="?mod=service&action=deleteCat&id=<?php echo $item['id'] ?>" onclick="deleteAlert()">
                                                    <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php }else{ ?>
                                        <tr>
                                            <td scope="col-3">Hiện đang không có danh mục nội dung dịch vụ nào ?</td>
                                        </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>