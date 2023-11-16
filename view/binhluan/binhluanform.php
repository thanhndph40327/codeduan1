<?php 
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $iduser = $_SESSION['user']['id'];
    $idpro = $_REQUEST['idpro'];

    $dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css.css">
</head>
<body>

<div class="mb">
                <div class="box_title">BÌNH LUẬN</div>
                <div class="box_content2 product_portfolio">
                  <ul >
                    <table>
                        <?php
                    
                        // echo "Bình luận ở đây: ".$idpro;
                        foreach($dsbl as $bl){
                            extract($bl);
                            echo '<tr><td>'.$noidung.' </td>';
                            echo '<td>'.$iduser.' </td>';
                            echo '<td>'.$ngaybinhluan.' </td></tr>';
                            
                        }
                        ?>
                    </table>
                    
                     <!-- <li><a href="">Đồng hồ </a></li>
                     <li><a href="">Laptop</a></li>
                     <li><a href="">Điện thoại</a></li>
                     <li><a href="">Ipad</a></li>
                     <li><a href="">Tivi</a></li> -->
                  </ul>
                </div>
                <div class="box_search">
                  <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                    <input type="hidden" name="idpro" value="<?=$idpro?>">
                    <input type="text" name="noidung" placeholder="Từ khóa tìm kiếm">
                    <input type="submit" name="guibinhluan" value="GỬI BÌNH LUẬN">
                  </form>
                </div>

                <?php
                    if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                        $noidung = $_POST['noidung'];
                        $idpro = $_POST['idpro'];
                        $idpro = $_POST['idpro'];
                        $iduser = $_SESSION['user']['id'];
                        $ngaybinhluan = date('h:i:sa d/m/Y');
                        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                        header("Location: ".$_SERVER['HTTP_REFERER']);
                    }
                    
                ?>
             </div>

                 
</body>
</html>