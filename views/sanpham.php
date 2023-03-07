<div class="row mb  ">
            <div class="boxtrai mr ">
            <div class="row mb">
               
                <div class="boxtitle">SAN PHAM <strong><?$tendm?></strong></div>
                <div class="row boxcontent">
                    <?php
                        $i=0;
                        foreach ($dssp as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$img;
                            if(($i==2)||($i==5)||($i==8)||($i=11)){
                                $mr="";
                            }else {
                                $mr="mr";
                            }
                            echo '<div class="box_sanpham '.$mr.'">
                                        <div class=" row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                
                                        <p>Giá KM: '.$price.' Đ</p>
                                        <a href="'.$linksp.'">'.$name.'</a>
                                    </div>';
                            $i+=1;
                        }
                    ?>

                </div>
            </div>
            
            <div class="boxphai  ">
                <?php include "boxright.php"; ?>
            </div>
        </div>