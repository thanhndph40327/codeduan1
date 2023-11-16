<main class="catalog  mb ">
            <div class="boxleft">
                <div class="  mb">
                    <div class="box_title">SẢN PHẨM <?=$tendm?></div>
                    <div class="box_content">
                        <?php 
                            foreach($dssp as $sp){
                                extract($sp);
                                $linksp = "index.php?act=sanphamct&idsp=".$id;
                                $hinh = $img_path.$img;
                                echo ' <div class="box_items">
                                            <div class="box_items_img">
                                                <img src="'.$hinh.'" alt="">
                                                <div class="add" href="">ADD TO CART</div>
                                            </div>
                                                <a class="item_name" href="'.$linksp.'">'.$name.'</a>
                                                <p class="price">'.$price.'</p>
                                                
                                        </div>';
                                
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="boxright">
               <?php
                    include "boxright.php";
                ?>
            </div> 
        </main>
        <!-- BANNER 2 -->
        