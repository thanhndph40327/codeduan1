<main class="catalog  mb ">
            <div class="boxleft">
                 <div class="banner">
                    <!-- Slideshow container -->
                    <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="view/img/anh0.jpg" style="width:100%">
                    <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="view/img/anh1.jpg" style="width:100%">
                    <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="view/img/anh2.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <!-- The dots/circles -->
                    <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                    <button class="pre" onclick="pre()">&#10094;</button>
                    <button class="next" onclick="next()">&#10095;</button>
                 </div>
            <div class="items">
                <?php
                    foreach($spmoi as $sp){
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        $hinh = $img_path.$img;
                        echo  '<div class="box_items">
                                    <div class="box_items_img">
                                        <img src="'.$hinh.'" alt="">
                                        <div class="add" href="">ADD TO CART</div>
                                    </div>
                                        <a class="item_name" href="'.$linksp.'">'.$name.'</a>
                                        <p class="price">'.$price.'</p>
                                    <div>
                                       <form action="index.php?act=addtocart" method="post">
                                          <input type="hidden" name="id" value="'.$id.'">
                                          <input type="hidden" name="name" value="'.$name.'">
                                          <input type="hidden" name="img" value="'.$img.'">
                                          <input type="hidden" name="price" value="'.$price.'">
                                          <input type="submit" name="addtocart" value="THÊM VÀO GIỎ HÀNG">
                                       </form>
                                    </div>    
                                </div>';
                    }
                ?>
             <!-- <div class="box_items">
               <div class="box_items_img">
                  <img src="view/img/realme2.jpg" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="view/img/iphoneX.jpg" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="view/img/iphoneX.jpg" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./view/img/item1.jpg" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./view/img/item0.jfif" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./view/img/galaxyJ4.jfif" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./view/img/iphoneX.jpg" alt="">
                  <a class="add" href="">ADD TO CART</a>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./view/img/item0.jfif" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div>
             <div class="box_items">
               <div class="box_items_img">
                  <img src="./view/img/anh5.jpg" alt="">
                  <div class="add" ><a href="danhsach.html">ADD TO CART</a></div>
               </div>
                <a class="item_name" href="">SamSung J4</a>
                <p class="price">$4000</p>
                
             </div> -->
             
             
            
            </div>
      </div>
            <div class="boxright">
                <?php
                    include "boxright.php";
                ?>
            </div> 
        </main>
        <!-- BANNER 2 -->
        