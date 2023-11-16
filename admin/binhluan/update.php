<?php

if (is_array($binhluan)) {
    extract($binhluan);
}

?>
<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT BÌNH LUẬN</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatebl" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
            </div>

            <div class="row2 mb10">
                <label>Nội dung</label> <br>
                <input type="text" name="noidung" value="<?= $noidung ?>">

                <div class="row mb10 ">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input class="mr20" type="submit" name="capnhat" value="Cập nhật">
                    <input class="mr20" type="reset" value="Nhập lại">

                    <a href="index.php?act=listsp"><input class="mr20" type="button" value="Danh sách"></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                ?>
        </form>
    </div>
</div>
</div>