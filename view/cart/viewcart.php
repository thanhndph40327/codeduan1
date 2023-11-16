<main class="catalog  mb ">
            <div class="boxleft">
                <div class="  mb">
                    <div class="box_title">GIỎ HÀNG</div>
                    <div class="box_content">
                        <table>
                            <tr>
                                <th>Hình</th>
                                <th>Sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành Tiền</th>
                                <th>Thao Tác</th>
                            </tr>

                            <?php 
                                $tong = 0;
                                $i=0;
                                foreach($_SESSION['mycart'] as $cart){
                                    $hinh = $img_path.$cart[2];
                                    $ttien = $cart[3] * $cart[4];
                                    $tong+=$ttien;
                                    $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="XÓA"></a>';
                                    echo '<tr>
                                            <td><img src="'.$hinh.'" alt="" height="80px"></td>
                                            <td>'.$cart[1].'</td>
                                            <td>'.$cart[3].'</td>
                                            <td>'.$cart[4].'</td>
                                            <td>'.$ttien.'</td>
                                            <td>'.$xoasp.'</td>
                                        </tr>';
                                    $i+=1;
                                }
                                echo '<tr>
                                        <td colspan = "4" >Tổng đơn hàng </td>
                                        <td>'.$tong.'</td>
                                    </tr>'
                            ?>
                            <!-- <tr>
                                <td>1</td>
                                <td><img src="img/clockforgirl.jpg" alt="" height="80px"></td>
                                <td>ĐỒNG HỒ</td>
                                <td>50</td>
                                <td>2</td>
                                <td>100VND</td>
                                <td><input type="button" value="XÓA"></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="img/iphoneX.jpg" alt="" height="80px"></td>
                                <td>Điện thoại</td>
                                <td>120</td>
                                <td>3</td>
                                <td>360VND</td>
                                <td><input type="button" value="XÓA"></td>
                            </tr> -->
                        </table>
                    </div>
                </div>
                <div>
                    <a href="index.php?act=bill"><input type="button" value="ĐỒNG Ý ĐẶT HÀNG" name=""></a><a href="index.php?act=delcart"><input type="button" value="XÓA GIỎ HÀNG"></a>
                </div>
            </div>
            
            <div class="boxright">
               <?php
                    include "view/boxright.php";
                ?>
            </div> 
        </main>
        <!-- BANNER 2 -->
        