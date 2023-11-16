<main class="catalog  mb ">
            <div class="boxleft">
                <div class="  mb">
                    <div class="box_title">QUÊN MẬT KHẨU</div>
                    <div class="box_content">
                        <form action="index.php?act=quenmk" method = "post">
                            Email<input type="email" name="email" id=""> <br>
                            
                            <input type="submit" name="guiemail" value="GỬI">
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
        