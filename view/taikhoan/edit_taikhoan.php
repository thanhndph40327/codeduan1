<main class="catalog  mb ">
            <div class="boxleft">
                <div class="  mb">
                    <div class="box_title">CẬP NHẬT TÀI KHOẢN</div>
                    <div class="box_content">
                        <?php
                            if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                                extract($_SESSION['user']);
                            }
                        ?>
                        <form action="index.php?act=edit_taikhoan" method = "post">
                            Email<input type="email" name="email" value="<?=$email?>"> <br>
                            Tên Đăng Nhập<input type="text" name="user" <?=$user?>><br>
                            Mật Khẩu<input type="password" name="pass" <?=$pass?>><br>
                            Địa Chỉ<input type="text" name="address" <?=$address?>><br>
                            Điện Thoại<input type="text" name="tel" <?=$tel?>><br>
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="submit" name="capnhat" value="CẬP NHẬT">
                            <input type="reset" value = "NHẬP LẠI">
                        </form>
                        <?php 
                            if(isset($thongbao)&&($thongbao!="")){
                                echo $thongbao;
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="boxright">
               <?php
                    include "view/boxright.php";
                ?>
            </div> 
        </main>
        <!-- BANNER 2 -->
        