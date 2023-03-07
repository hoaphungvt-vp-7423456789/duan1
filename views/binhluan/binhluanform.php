<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idpro = $_REQUEST['idpro'];

   $dsbl = loadall_binhluan($idpro);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binh luan</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="row mb ">
        <div class="box_title">Bình luận</div>
        <div class="box_content2 binhluan">
            <table>
                <?php
                    foreach ($dsbl as $bl) {
                       extract($bl);
                     
                       echo '<tr><td>'.$noidung.'</td>';
                       echo '<td>'.$iduser.'</td>';
                       echo' <td>'.$ngaybinhluan.'</td></tr>';
                    }
                ?>
                
                </table>
        </div>
        <div class="box_footer binhluanform">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                <input type="text" name="noidung" placeholder="Ý kiến của bạn">
                <input type="submit" name="guibinhluan" value="Bình luận">
                
            </form>
        </div>

        <?php
            if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            //    var_dump($_SESSION['user']);die(); 
                $noidung= $_POST['noidung'];
                $idpro = $_POST['idpro'];
                $iduser = $_SESSION['user']['id'];
                $ngaybinhluan = date('h:i:a d/m/Y');
                insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                header("Location: ".$_SERVER['HTTP_REFERER']);
            }
        ?>
    </div>
</body>
