<div class="row mb  ">
            <div class="boxtrai mr ">
            <div class="row mb">
                <?php
                extract($onesp);
                ?>
                <div class="boxtitle"><?=$name?></div>
                <div class="row boxcontent">
                    <?php
                    $img=$img_path.$img;
                    echo '<div class="row mb spct"><img src="'.$img.'"></div>';
                    echo "$mota";
                    ?>

                </div>
            </div>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#binhluan").load("views/binhluan/binhluanform.php", {idpro: <?=$id?>});
                }); 
                
            </script>
            <div class="row" id="binhluan">
                
            </div>
            <div class="row mb">
                <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
                <div class="row boxcontent">
                    <?php
                        foreach ($sp_cung_loai as $sp_cung_loai ) {
                            extract($sp_cung_loai);
                            $linksp = "index.php?act=sanphamct&idsp=".$id;
                            echo '<li><a href ="'.$linksp.'">'.$name. '</a></li>';
                        }
                    ?>
                </div>
            </div>
            </div>
            <div class="boxphai  ">
                <?php include "boxright.php"; ?>
            </div>
        </div>