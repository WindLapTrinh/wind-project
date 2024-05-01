<?php
get_header();
get_sidebar();
?>
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
                <h5 class="m-0 ">Danh sách khách hàng</h5>
                <div class="form-search form-inline">
                    <form action="" method="POST">
                        <input type="" name="search" class="form-control form-search" placeholder="Tìm kiếm">
                        <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="analytic">
                    <a href="" class="text-primary">Trạng thái 1<span class="text-muted">(10)</span></a>
                    <a href="" class="text-primary">Trạng thái 2<span class="text-muted">(5)</span></a>
                    <a href="" class="text-primary">Trạng thái 3<span class="text-muted">(20)</span></a>
                </div>
                <div class="form-action form-inline py-3">
                    <select class="form-control mr-1" id="">
                        <option>Chọn</option>
                        <option>Tác vụ 1</option>
                        <option>Tác vụ 2</option>
                    </select>
                    <input type="submit" name="btn-search" value="Áp dụng" class="btn btn-primary">
                </div>
                <table class="table table-striped table-checkall">
                    <thead>
                        <tr>
                            <th scope="col">
                                <input name="checkall" type="checkbox">
                            </th>
                            <th scope="col">#</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tên khách hàng</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Ngày cập nhập</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $i = 0;
                        foreach ($getList as $item) {
                            $i++;
                        ?>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td scope="row"><?php echo $i ?></td>
                                <td>
                                    <?php if ($item['avatar']) { ?>
                                        <img class="image_product" src="public/images/<?php echo $item['avatar'] ?>" alt="">
                                    <?php } else { ?>
                                        <img class="image_product" src="public/images/update.png" alt="">
                                    <?php } ?>
                                </td>
                                <td><a href="" class="post-title"><?php echo $item['title'] ?></a></td>
                                <td>
                                    <?php
                                    if (strlen($item['content']) > 20) {
                                        echo substr($item['content'], 0, 20) . '...';
                                    } else {
                                        echo $item['content'];
                                    }
                                    ?>
                                </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="?mod=customers&action=update&id=<?php echo $item['id'] ?>">
                                        <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                    </a>
                                    <a href="?mod=customers&action=delete&id=<?php echo $item['id'] ?>">
                                        <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                    </a>
                                </td>

                            </tr>
                        <?php } ?>



                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <?php echo  getPage($num_page, $page, "?mod=home&action=getList") ?>
                    <p class="num-rows"> Có tổng <?php echo $num_rows ?> bài viết </p>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>