<main class="catalog  mb ">
            <div class="boxleft">
                <div class="  mb">
                    <div class="box_title">ĐĂNG KÝ THÀNH VIÊN</div>
                    <div class="box_content">
                        <form action="index.php?act=dangky" method = "post">
                            Email<input type="email" name="email" id=""> <br>
                            Tên Đăng Nhập<input type="text" name="user" id=""><br>
                            Mật Khẩu<input type="password" name="pass" id=""><br>
                            <input type="submit" name="dangky" value="ĐĂNG KÝ">
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
        